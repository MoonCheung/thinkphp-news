<?php

/**
 * Created by PhpStorm.
 * User: hp-pc
 * Date: 2017/1/11
 * Time: 13:43
 */
//命名空间
namespace Admin\Controller;
//引入父类
use Common\Controller\AdminBaseController;
class ArticleController extends AdminBaseController{
  //添加文章管理
  public function addArti(){
    $article = D('Article');
    if(IS_POST){
      $data = I('post.');
      $data['time'] = time();
      if($_FILES['picture']['error'] == "0"){
        //上传配置
        $cfg = array(
          //定义上传配置
          'rootPath'      =>  WORKING_PATH.UPLOAD_ROOT_PATH, //保存根路径
        );
        //实例化上传类:
        $upload = new \Think\Upload($cfg);
        //实例化上传类->上传单个文件
        $info = $upload->uploadOne($_FILES['picture']);
        if(!$info){
          //上传错误提示错误信息
          $this->error($upload->getError());
        }else{
          //上传成功
          //再次传递给$POST添加缩略图
          $data['picture'] = UPLOAD_ROOT_PATH.$info['savepath'].$info['savename'];
          //实例化图像类->生成缩略图
          $image = new \Think\Image();
          $image->open(WORKING_PATH.UPLOAD_ROOT_PATH.$info['savepath'].$info['savename']);
          // 按照原图的比例生成一个最大为50*50的缩略图并保存为.jpg
          $image->thumb(50,50)->save(WORKING_PATH.UPLOAD_ROOT_PATH.$info['savepath'].'thumb_'.$info['savename']);
          //再次传递给$POST添加缩略图
          $data['pic'] = UPLOAD_ROOT_PATH.$info['savepath'].'thumb_'.$info['savename'];
        }
      }
      //批量$POST自动验证
      if($article->create($data)){
        //判断结果集是否成败
        if($article->add()){
          $this->success("添加成功!",U('artiList'),3);
        }else{
          $this->error("添加失败!");
        }
      }else{
        unlink(WORKING_PATH.$data['pic']);  //验证不通过则已经上传将缩略图删除
        $this->error($article->getError());
      }
      return;
    }else{
      $model = M('Cate');
      $data = $model->select();
      //传递给数据
      $this->assign('data',$data);
      //展示模板
      $this->display();
    }
  }
  //展示文章管理列表
  public function artiList(){
    $model = M('Article');
    $data = $model->select();
    //传递给数据
    $this->assign("data",$data);
    //展示模板
    $this->display();
  }
  //删除文章管理
  public function artidel(){
    $model = M('Article');
    $id = I('id');
    $delfile = $model->find($id);
    if($model->delete($id)){
      $del = WORKING_PATH.$delfile['pic'];
      unlink($del); //删除已经上传将缩略图
      $this->success('删除成功',U('artiList'),3);
    }else{
      $this->error('删除失败');
    }
  }
  //编辑文章管理
  public function artiEdit(){
    $article = D('Article');
    if(IS_POST){
      $data['title'] = I('title');
      $data['cateid'] = I('cateid');
      $data['author'] = I('author');
      $data['desc'] = I('desc');
      $data['content'] = I('content');
      $data['id'] = I('id');
      $data['time'] = time();
      if($_FILES['picture']['error'] == "0"){
        //上传配置
        $cfg = array(
          //定义上传配置
          'rootPath'      =>  WORKING_PATH.UPLOAD_ROOT_PATH, //保存根路径
        );
        //实例化上传类:
        $upload = new \Think\Upload($cfg);
        //实例化上传类->上传单个文件
        $info = $upload->uploadOne($_FILES['picture']);
        if(!$info){
          //上传错误提示错误信息
          $this->error($upload->getError());
        }else{
          //上传成功
          //再次传递给$POST添加缩略图
          $data['picture'] = UPLOAD_ROOT_PATH.$info['savepath'].$info['savename'];
          //实例化图像类->生成缩略图
          $image = new \Think\Image();
          $image->open(WORKING_PATH.UPLOAD_ROOT_PATH.$info['savepath'].$info['savename']);
          // 按照原图的比例生成一个最大为50*50的缩略图并保存为.jpg
          $image->thumb(50,50)->save(WORKING_PATH.UPLOAD_ROOT_PATH.$info['savepath'].'thumb_'.$info['savename']);
          //再次传递给$POST添加缩略图
          $data['pic'] = UPLOAD_ROOT_PATH.$info['savepath'].'thumb_'.$info['savename'];
        }
      }
      //批量$POST自动验证
      if($article->create($data)){
        //判断结果集是否成败
        if($article->save()){
          $this->success("修改成功!",U('artiList'),3);
        }else{
          $this->error("修改失败!");
        }
      }else{
        unlink(WORKING_PATH.$data['pic']);  //验证不通过则已经上传将缩略图删除
        $this->error($article->getError());
      }
      return;

    }else{
      $model = M('Cate');
//      $id = I('get.id');
//      //主表:tp_Article;
//      //从表:tp_cate;
//      //$sql = "select tp1.*,tp2.catename as catename from tp_article as tp1 left join tp_cate as tp2 on tp1.cateid = tp2.id where tp1.id=37;";
//      $cate = $model->field('tp1.*,tp2.catename as catename')->alias('tp1')->join('left join tp_cate as tp2 on tp1.cateid = tp2.id')->select();
      $arti = $article->find(I('id'));
      $cate = $model->select();
      //传递给数据
      $this->assign('arti',$arti);
      $this->assign('cate',$cate);
      //展示模板
      $this->display();
    }
  }
  //缩略图下载方法:
  public function download(){
    $id = I('get.id');
    //连贯操作
    $data = M('Article')->find($id);
    //下载代码
    $file = WORKING_PATH.$data['picture'];
    header('Content-type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Content-Length: '.filesize($file));
    readfile($file);
  }
  //查看可编辑里内容方法
  public function checkcont(){
    $id = I('get.id');
    $data = M('Article')->find($id);
    echo htmlspecialchars_decode($data['content']);
  }
  //空方法:
  public function _empty(){
    $this->display('Index/404');
  }
}