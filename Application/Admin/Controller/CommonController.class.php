<?php

/**
 * Created by PhpStorm.
 * User: hp-pc
 * Date: 2017/1/6
 * Time: 20:25
 */
//命名空间
namespace Admin\Controller;
//继承父类
use Think\Controller;
class CommonController extends Controller{
  //ThinkPHP提供_initialize,不需要构造父类(RBAC权限管理这行暂时写，因为这行出错)
  public function _initialize(){
    //设置从会话获得变量
    $id = session('id');
    //判断登录用户是否登录
    if (!$id){
      $this->error('请先登录后台,望谅解!',U('Login/index'));
//      $url = U('Index/login');
//      echo "<script>window.location.href='$url'</script>";
//      exit;
    }
  }


}