<?php

/**
 * Created by PhpStorm.
 * User: hp-pc
 * Date: 2017/1/6
 * Time: 21:20
 */
//命名空间
namespace Admin\Controller;
//继承父类
use Common\Controller\AdminBaseController;
class NewSortController extends AdminBaseController{
  //添加新闻栏目录入
  public function addNew(){
    if(IS_POST){
      $post = I('post.');
//      var_dump($post);die; //打印数据信息
      $model = D('Cate'); //实例化模型类
      //创建数据对象--自动验证
      $info = $model->create($post);
      if(!$info){
        //判断自动验证是否符合post信息
//        $this->ajaxReturn($model->getError());die;
        $this->error($model->getError());exit;
      }
      //数据写入
      $res = $model->add();
      //判断结果是否添加
      if($res){
        $this->success('添加栏目成功!',U('newList'),3);
      }else{
        $this->error('添加栏目失败!');
      }
    }else{
      //展示模板
      $this->display();
    }
  }
  //展示新闻栏目列表
  public function newList(){
    $model = M('Cate');
    $data = $model->order('sort desc')->select();
    //传递给数据
    $this->assign('data',$data);
    //展示模板
    $this->display();
  }
  //编辑新闻栏目
  public function newEdit(){
    //实例化模型类
    $model = D('Cate');
    if(IS_POST){
      $data['catename'] = I('catename');
      $data['sort'] = I('sort');
      $data['id'] = I('id');
      if($model->create($data)){
        $save = $model->save();
        if($save !== false){
          $this->success('修改栏目成功',U('newList'),3);
        }else{
          $this->error('修改栏目失败');
        }
      }else{
        // 如果创建失败 表示验证没有通过 输出错误提示信息
        $this->error($model->getError());exit;
      }
      return; //返回执行程序
    }
    $datas = $model->find(I('id'));
    //传递给数据
    $this->assign('data',$datas);
    //展示模板
    $this->display();
  }
  //删除新闻栏目
  public function newDel(){
    //实例化数据表
    $model = M("Cate");
    //连贯操作
    $info = $model->delete(I('id'));
    //判断是否删除成功
    if($info != false){
      $this->success('删除栏目成功',U('newList'),3);
    }else{
      $this->error('删除栏目失败');
    }
  }
  //修改新闻栏目排序
//  public function sort(){
//    if(IS_POST){
//      //实例化类中数据表
//      $model = M('Cate');
//      foreach($_POST as $id=>$sort){
//        //连贯操作
//        $data = $model->where(array('id'=>$id))->setField('sort',$sort);
//      }
//      //判断结果集是否成败
//      if($data){
//        $this->success('更新排序成功');
//      }else{
//        $this->error('更新排序失败');
//      }
//    }
//    //数据库mysql:
////    $sql = "update tp_cate set sort=50,sort=6 where id=7;";
//  }

  //空方法:
  public function _empty(){
    $this->display('Index/404');
  }
  
}