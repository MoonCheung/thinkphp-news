<?php

/**
 * Created by PhpStorm.
 * User: hp-pc
 * Date: 2017/1/7
 * Time: 12:48
 */
namespace Admin\Model;
use Common\Model\BaseModel;
class DeptModel extends BaseModel{
  //自动验证规则
  protected $_validate = array(
    array('name','require','栏目不能为空!'), //默认情况下用正则进行验证
    array('name','','栏目名称已经存在!',0,'unique',1), // 在新增的时候验证name字段是否唯一
    array('sort','number','请输入数字且不为空!'), //默认情况下用正则进行验证
  );
}