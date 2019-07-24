<?php

/**
 * Created by PhpStorm.
 * User: hp-pc
 * Date: 2017/1/29
 * Time: 21:00
 */
namespace Admin\Model;
use Common\Model\BaseModel;
class LunboModel extends BaseModel{
  protected $_validate = array(
    array('title','require','请输入标题且不能为空','0','regex'),
    array('label','require','请输入标签且不能为空','0','regex'),
    array('desc','require','请输入描述且不能为空','0','regex')
  );
}