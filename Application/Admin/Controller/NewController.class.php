<?php

/**
 * Created by PhpStorm.
 * User: hp-pc
 * Date: 2017/1/6
 * Time: 20:10
 */
//命名空间
namespace Admin\Controller;
//引入父类
use Common\Controller\AdminBaseController;
class NewController extends AdminBaseController{
  //添加用户
  public function addUser(){
    $model = D('Admin');
    if(IS_POST){
      $post = I('post.');
      $post['password'] = md5($post['password']);
      $post['logintime'] = time();
      $info = $model->create($post);
      /*******暂时*******/
//      //创建数据对象->自动验证
//      if(!$info){
//        //判断自动验证是否符合post信息
//        $this->error($model->getError());exit;
//      }else{
//        $data = $model->add();
//        if($data!=false){
//          $this->success("添加成功!",U('userList'),3);
//        }else{
//          $this->error("添加错误!");
//        }
//      }
      $result = $model->addData($info);
      if($result){
        if(!empty($post['group_ids'])){
          foreach($post['group_ids'] as $k =>$v){
            $group = array(
              'uid' => $result,
              'group_id' => $v
            );
            $groupAccess = D('AuthGroupAccess')->addData($group);
          }
          if(!empty($groupAccess)){
            $this->success('添加成功！',U('Admin/userList'),3);
          }else{
            $this->error('添加错误！');
          }
        }
      }else{
        $error_word = $model->getError();
        //操作失败
        $this->error($error_word);
      }

    }else{
      //管理组栏目列表方法:
      $manage = M('AuthGroup')->select();
      //部门栏目列表方法:
      $data = M('Dept')->select();
      $assign = array(
        'manage'=>$manage,
        'data'=>$data
      );
      //传递给数据
      $this->assign($assign);
      //展示模板
      $this->display();
    }
  }
  //用户列表方法
  public function userList(){
    $group_user = D('AuthGroupAccess')->getAllData();
    $assign = array(
      'data' => $group_user
    );
    //传递给数据
    $this->assign($assign);
    //展示模板
    $this->display();
  }

  //用户删除方法
  public function userDel(){
    $model = M('Admin');
    $id = I('get.id');
    $data = $model->delete($id);
    if($data!=false){
      $this->success('删除成功!');
    }else{
      $this->error('删除失败!');
    }
  }
  //可编辑用户方法:
  public function userEdit(){
    $model = D('Admin');
    if(IS_POST){
      $post = I('post.');
      $uid = $post['id'];
      $map = array(
        'id' => $uid
      );
      // 修改权限
      D('AuthGroupAccess')->deleteData(array('uid'=>$uid));
      foreach ($post['group_ids'] as $k => $v) {
        $group=array(
          'uid'=>$uid,
          'group_id'=>$v
        );
        D('AuthGroupAccess')->addData($group);
      }
      // 如果修改密码则md5
      if (!empty($post['password'])) {
        $post['password']=md5($post['password']);
      }
      $info = $model->create($post);
      $result=$model->editData($map,$info);
      if($result){
        // 操作成功
        $this->success('修改成功',U('Admin/userList',array('id'=>$uid)));
      }else{
        $error_word=$model->getError();
        if (empty($error_word)) {
          $this->success('修改成功',U('Admin/userList',array('id'=>$uid)));
        }else{
          // 操作失败
          $this->error($error_word);
        }

      }

    }else{
      $id = I('get.id');
      //获取用户数据
      $data = $model->find($id);
      //获取已加入用户组：
      $group_data = M('AuthGroupAccess')
        ->where(array('uid'=>$id))
        ->getField('group_id',true);
      //获取用户组
      $group_user = M('AuthGroup')->select();
      //获取栏目数据
      $dept = M('Dept')->select();
      $assign = array(
        'data' => $data,
        'dept' => $dept,
        'group_data' => $group_data,
        'group_user' => $group_user,
      );
      //传递给数据
      $this->assign($assign);
      //展示模板
      $this->display();
    }
  }

  //空方法:
  public function _empty(){
    $this->display('Index/404');
  }
}