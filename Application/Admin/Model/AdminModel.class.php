<?php

/**
 * Created by PhpStorm.
 * User: hp-pc
 * Date: 2017/1/14
 * Time: 16:05
 */

namespace Admin\Model; //命名空间
use Common\Model\BaseModel; //引入父类

class AdminModel extends BaseModel{
  protected $_validate = array(
    array('username','require','该用户不能为空',0,'regex'),
    array('password','require','该密码不能空',0,'regex'),
    array('nickname','require','该姓名不能为空',0,'regex'),
    array('birth','require','该生日不能为空',0,'regex'),
    array('phone','number','该电话不能为空',0,'regex'),
    array('email','email','该邮件不能为空',0,'regex'),
    array('remark','require','请输入内容且内容不为空',0,'regex'),
  );

  //登录框方法:
  public function login(){
    $usernames = $this->username;
    $passwords = $this->password;
    $info = $this->where(array('username'=>$usernames))->find();
//    $data = array(
//      'id' => $info['id'],
//      'username' => $info['username'],
//      'password' => $info['password'],
//      'loginip' => get_client_ip()
//    );
//    $result = $this->save($data);
    if($info!=false){
      if($info['password']==md5($passwords)){
        session('id',$info['id']);
        session('username',$info['username']);
        return true;
      }else{
        return false;
      }
    }
    return;
  }
}
