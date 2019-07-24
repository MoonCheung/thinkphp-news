<?php

/**
 * Created by PhpStorm.
 * User: hp-pc
 * Date: 2017/1/28
 * Time: 22:25
 */
//命名空间
namespace Admin\Controller;
//引入父类
use Common\Controller\AdminBaseController;
class CarouselController extends AdminBaseController{
  //添加轮播方法
  public function addCar(){
    //实例化Model对象
    $lunbo = D('Lunbo');
    if(IS_POST){
      $post = I('post.');
      $post['time'] = time();
      if($_FILES['picture']['error'] == '0'){
        //上传配置
        $cfg = array(
          //定义上传配置
          'rootPath'      =>  WORKING_PATH.UPLOAD_ROOT_PATH, //保存根路径
        );
        //实例化上传类
        $upload = new \Think\Upload($cfg);
        //实例化上传类->上传单个文件
        $info = $upload->uploadOne($_FILES['picture']);
        if(!$info){
          //上传错误提示错误信息
          $this->error($upload->getError());
        }else{
          //上传成功
          //再次传递给原始图片路径
          $post['picture'] = UPLOAD_ROOT_PATH.$info['savepath'].$info['savename'];
          //实例化图像类
          $image = new \Think\Image();
          $image->open(WORKING_PATH.UPLOAD_ROOT_PATH.$info['savepath'].$info['savename']);
          //生成一个固定大小为50*50的缩略图并保存为thumb.jpg
          $image->thumb(50,50,\Think\Image::IMAGE_THUMB_FIXED)->save(WORKING_PATH.UPLOAD_ROOT_PATH.$info['savepath'].'thumb_'.$info['savename']);
          //再次传递给缩略图路径
          $post['pic'] = UPLOAD_ROOT_PATH.$info['savepath'].'thumb_'.$info['savename'];
        }
      }
      //批量$POST自动验证
      if(!$lunbo->create($post)){
        //如果创建失败,表示验证没通过,输出错误提示信息
        unlink(WORKING_PATH.$post['pic']);//当上传图像失败时则会删除。
        $this->error($lunbo->getError());
      }else{
        if($lunbo->add($post)){
          $this->success('添加图像',U('carousel/carList'),3);
        }else{
          $this->error('添加失败');
        }
      }
      return;
    }else{
      //展示模板
      $this->display();
    }

  }
  //编辑轮播方法:
  public function carEdit(){
    //实例化数据类
    $lunbo = D('Lunbo');
    if(IS_POST){
      $post = I('post.');
      $post['time'] = time();
      if($_FILES['picture']['error'] == '0'){
        //上传配置
        $cfg = array(
          //定义上传配置
          'rootPath'      =>  WORKING_PATH.UPLOAD_ROOT_PATH, //保存根路径
        );
        //实例化上传类
        $upload = new \Think\Upload($cfg);
        //实例化上传类->上传单个文件
        $info = $upload->uploadOne($_FILES['picture']);
        if(!$info){
          //上传错误提示错误信息
          $this->error($upload->getError());
        }else{
          //上传成功
          //再次传递给原始图片路径
          $post['picture'] = UPLOAD_ROOT_PATH.$info['savepath'].$info['savename'];
          //实例化图像类
          $image = new \Think\Image();
          $image->open(WORKING_PATH.UPLOAD_ROOT_PATH.$info['savepath'].$info['savename']);
          //生成一个固定大小为50*50的缩略图并保存为thumb.jpg
          $image->thumb(50,50,\Think\Image::IMAGE_THUMB_FIXED)->save(WORKING_PATH.UPLOAD_ROOT_PATH.$info['savepath'].'thumb_'.$info['savename']);
          //再次传递给缩略图路径
          $post['pic'] = UPLOAD_ROOT_PATH.$info['savepath'].'thumb_'.$info['savename'];
        }
      }
      //批量$POST自动验证
      if(!$lunbo->create($post)){
        //如果创建失败,表示验证没通过,输出错误提示信息
        unlink(WORKING_PATH.$post['pic']);//当上传图像失败时则会删除。
        $this->error($lunbo->getError());
      }else{
        if($lunbo->save($post)){
          $this->success('修改图像',U('carousel/carList'),3);
        }else{
          $this->error('修改失败');
        }
      }
      return;

    }else{
      $data = $lunbo->find(I('get.id'));
      //传递给数据
      $this->assign('data',$data);
      //展示模板
      $this->display();
    }

  }
  //列表轮播方法:
  public function carList(){
    $lunbo = M('Lunbo');
    $data = $lunbo->select();
    //传递给数据
    $this->assign('data',$data);
    //展示模板
    $this->display();
  }
  //删除轮播单个方法
  public function cardel(){
    $lunbo = M('Lunbo');
    $id = I('id');
    //删除数据表中单个行
    $res = $lunbo->where(array('id'=>$id))->find();
//    dump($res);die;
    //删除成否结果集
    if($lunbo->delete($id)){
      //删除数据库中单个缩略图路径
      $picpath = WORKING_PATH.$res['pic'];
      unlink($picpath);
      $this->success('删除成功');
    }else{
      $this->error('删除失败');
    }
  }
  //下载download轮播方法:
  public function download(){
    $id = I('get.id');
    $data = M('Lunbo')->find($id);
    //下载代码
    $file = WORKING_PATH.$data['picture'];
    header('Content-type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Content-Length: '.filesize($file));
    readfile($file);
  }

  //空方法:
  public function _empty(){
    $this->display('Index/404');
  }
}