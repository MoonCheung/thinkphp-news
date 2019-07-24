<?php

/**
 * Created by PhpStorm.
 * User: hp-pc
 * Date: 2017/1/15
 * Time: 22:11
 */
namespace Admin\Controller;
use Common\Controller\AdminBaseController;
class LoginController extends AdminBaseController{
  //登录框方法:
  public function index(){
    $model = D('Admin');
    $result = array(
      array('myverify','require','验证码必填且不为空','regex',4),
      array('username','','账号已经存在!',0,'unique',1),
      array('password','require','密码错误!',0,'unique',1),
      array('username','require','账号必填且不为空',0,'regex',4),
      array('password','require','密码必填且不为空',0,'regex',4),
    );
    if(IS_POST){
      $post = I('post.');
      $verify = new \Think\Verify();
      $mycode = $verify->check($post['myverify']);
      if(!$mycode){
        $this->error('验证码错误!');
      }else{
        $result = $model->validate($result)->create($post,4);//4数字:登录验证数据
        if(!$result){
          // 验证没有通过 输出错误提示信息
          $this->error($model->getError());exit;
        }else{
          // 验证通过 执行登录操作
          $myres = $model->login();
          if($myres!=false){
            //登录成功时,跳转到Index.html则true
            $this->success('登录成功!',U('Index/index'),3);
          }else{
            //登录失败时,则false
            $this->error('登录失败!');
          }

        }
      }
    }else{
      if(session('id')){
        $this->error('该用户已登录,请勿重复!',U('Index/index'),2);
      }else{
        //展示模板
        $this->display();
      }

    }
  }
  //设置验证码图片
  public function verify(){
    $config = array(
      'useImgBg'  =>  false,           // 使用背景图片
      'fontSize'  =>  15,              // 验证码字体大小(px)
      'useCurve'  =>  true,            // 是否画混淆曲线
      'useNoise'  =>  true,            // 是否添加杂点
      'imageH'    =>  30,              // 验证码图片高度
      'imageW'    =>  100,             // 验证码图片宽度
      'length'    =>  4,               // 验证码位数
    );
    $verify = new \Think\Verify($config);
    $verify->entry();
  }

  //空方法:
  public function _empty(){
    $this->display('Index/404');
  }
}