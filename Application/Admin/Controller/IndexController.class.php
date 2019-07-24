<?php
namespace Admin\Controller;
use Common\Controller\AdminBaseController;
class IndexController extends AdminBaseController{
  //index方法:
  public function index(){
    //$this->show('这是后台,请一定要注意!');
    //展示模板
    $this->display();
  }
  //home方法
  public function home(){
    //展示模板
    $this->display();
  }

  //退出登录
  public function logout(){
//    //展示模板
    session_unset(); //销毁变量
    session_destroy(); //销毁一个会话中的全部数据
    $this->redirect("Admin/Login/index");
  }
  //空方法:
  public function _empty(){
    $this->display('Index/404');
  }
}