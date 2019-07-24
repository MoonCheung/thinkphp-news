<?php

/**
 * Created by PhpStorm.
 * User: hp-pc
 * Date: 2017/1/10
 * Time: 22:10
 */
//命名空间
namespace Admin\Controller;
//引入父类
use Common\Controller\AdminBaseController;
class DeptSortController extends AdminBaseController{
  //添加部门栏目录入
  public function addDept(){
    if(IS_POST){
      $post = I('post.');
//      var_dump($post);die; //打印数据信息
      $model = D('Dept'); //实例化模型类
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
        $this->success('添加栏目成功!',U('deptList'),1);
      }else{
        $this->error('添加栏目失败!');
      }
    }else{
      //展示模板
      $this->display();
    }
  }

  //展示部门栏目列表
  public function deptList(){
    $model = M('Dept');
    $data = $model->order('sort desc')->select();
    //传递给数据
    $this->assign('data',$data);
    //展示模板
    $this->display();
  }

  //编辑新闻栏目
  public function deptEdit(){
    //实例化模型类
    $model = D('Dept');
    if(IS_POST){
      $data['name'] = I('name');
      $data['sort'] = I('sort');
      $data['id'] = I('id');
      if($model->create($data)){
        $save = $model->save();
        if($save !== false){
          $this->success('修改栏目成功',U('deptList'),3);
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
    $model = M("Dept");
    //连贯操作
    $info = $model->delete(I('id'));
    //判断是否删除成功
    if($info != false){
      $this->success('删除栏目成功',U('deptList'),3);
    }else{
      $this->error('删除栏目失败');
    }
  }

  //空方法:
  public function _empty(){
    $this->display('Index/404');
  }
}