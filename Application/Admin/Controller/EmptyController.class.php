<?php

/**
 * Created by PhpStorm.
 * User: hp-pc
 * Date: 2017/1/17
 * Time: 11:13
 */
//命名空间
namespace Admin\Controller;
//引入父类
use Common\Controller\AdminBaseController;
class EmptyController extends AdminBaseController{
  //空方法与空操作:
  public function _empty(){
    //把所有的操作解析到方法和控制器类
    $controll = CONTROLLER_NAME;
    $action = ACTION_NAME;
    $this->controller($controll);
    $this->controller($action);
  }
  //注意 controller方法 本身是 protected 方法
  protected function controller($name){
    //提示错误
    echo '本身控制器:'.$name.'不复存在'."<br/>";
  }
  //注意 action方法 本身是protected 方法
  protected function action($name1){
    //提示错误
    echo '本身方法:'.$name1.'不复存在';
  }
}