<?php
/**
 * Created by PhpStorm.
 * User: hp-pc
 * Date: 2017/5/15
 * Time: 14:28
 */

namespace Admin\Controller;
use Common\Controller\AdminBaseController;

class AuthController extends AdminBaseController{
  //添加角色
  public function add_group(){
    if(IS_POST){
      $data = I('post.');
      unset($data['id']);
      $result = D('AuthGroup')->addData($data);
      if($result){
        $this->success('添加成功',U('Admin/Auth/role_group'));
      }else{
        $this->error('添加失败');
      }
    }else{
      //展示模板
      $this->display();
    }
  }
  //角色列表
  public function role_group(){
    $data = D('AuthGroup')->select();
    //保存数据
    $assign = array('data'=>$data);
    $this->assign($assign);
    //展示模板
    $this->display();
  }
  //编辑角色
  public function edit_group(){
    if(IS_POST){
      $data = I('post.');
      $map = array(
        'id'=>$data['id']
      );
      $result = D('AuthGroup')->editData($map,$data);
      if($result){
        $this->success('修改成功！',U('Admin/Auth/role_group'));
      }else{
        $this->error('修改失败！');
      }
    }else{
      //单个数据
      $find = M('AuthGroup')->find(I('get.id'));
      $this->assign('data',$find);
      //展示模板
      $this->display();
    }

  }
  //删除角色
  public function delete_group(){
    $id = I('get.id');
    $result = M('AuthGroup')->delete($id);
    if($result){
      $this->success('删除成功!',U('Admin/Auth/role_group'));
    }else{
      $this->error('删除失败!');
    }
  }

  //添加权限
  public function add_rule(){
    if(IS_POST){
      $post = I('post.');
      unset($post['id']);
      $result = D('AuthRule')->addData($post);
      if($result!=false){
        $this->success('添加成功！',U('Admin/Auth/rule_list'));
      }else{
        $this->error('添加错误！');
      }
    }else{
      //展示模板
      $this->display();
    }
  }

  //添加子权限
  public function add_childRule(){
    $id = I('get.id');
    if(IS_POST){
      $post = I('post.');
      $map = array(
        'pid' => $post['id'],
        'title' => $post['title'],
        'name' => $post['name']
      );
      $result = D('AuthRule')->addData($map);
      if($result!=false){
        $this->success('添加子权限成功！',U('Admin/Auth/rule_list'));
      }else{
        $this->error('添加子权限错误！');
      }
    }else{
      $first = D('AuthRule')->find($id);
      $assign = array(
        'data' => $first,
      );
      //存储数据
      $this->assign($assign);
      //展示模板
      $this->display();
    }
  }

  //权限列表
  public function rule_list(){
    $data = D('AuthRule')->getTreeData('tree','id','title');
    $assign = array(
      'data' => $data
    );
    //存储数据
    $this->assign($assign);
    //展示模板
    $this->display();

  }
  //编辑权限
  public function edit_rule(){
    if(IS_POST){
      $post = I('post.');
      $map = array(
        'id' => $post['id'],
      );
      $result = D('AuthRule')->editData($map,$post);
      if($result){
        $this->success('修改成功！',U('Admin/Auth/rule_list'));
      }else{
        $this->error('修改错误！');
      }
    }else{
      $id = I('get.id');
      $first = D('AuthRule')->find($id);
      $assign = array(
        'data' => $first,
      );
      //存储数据
      $this->assign($assign);
      //展示模板
      $this->display();
    }

  }
  //删除权限
  public function delete_rule(){
    $id = I('get.id');
    $map = array(
      'id' => $id,
    );
    $result = D('AuthRule')->deleteData($map);
    if(!empty($result)){
      $this->success('删除成功！',U('Admin/Auth/rule_list'));
    }else{
      $this->error('请先删除子权限');
    }
  }
}