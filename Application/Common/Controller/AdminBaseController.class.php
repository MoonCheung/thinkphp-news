<?php
/**
 * Created by PhpStorm.
 * User: hp-pc
 * Date: 2017/5/16
 * Time: 16:16
 */

namespace Common\Controller;
use Common\Controller\BaseController;
/*
 * 基本控制器
 * */
class AdminBaseController extends BaseController{
  /*
   * 初始化
   * */
  public function _initialize(){
    parent::_initialize();
    $auto =new \Think\Auth();
    $rule_name = MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME;
    $result = $auto->check($rule_name,$_SESSION['username ']['id']);
//    if(!$result){  ---->暂时别做Auth权限
//      $this->error('您没有权限访问');
//    }
  }
}