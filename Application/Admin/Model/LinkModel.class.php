<?php

/**
 * Created by PhpStorm.
 * User: hp-pc
 * Date: 2017/2/1
 * Time: 16:59
 */
namespace Admin\Model;
use Common\Model\BaseModel;
class LinkModel extends BaseModel{
  protected $_validate = array(
    array('title','require','请输入标题且不为空','0','regex'),
    array('url','url','请输入URL且不为空','0','regex'),
    array('sort','number','请输入排序且不为空','0','regex'),
    array('desc','require','请输入描述且不为空','0','regex'),
  );
}