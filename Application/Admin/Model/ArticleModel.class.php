<?php

/**
 * Created by PhpStorm.
 * User: hp-pc
 * Date: 2017/1/11
 * Time: 16:21
 */
//命名空间
namespace Admin\Model;
//引入父类
use Common\Model\BaseModel;
class ArticleModel extends BaseModel{
  protected $_validate = array(
    array('title','require','该标题不能为空',0,'regex'),
    array('picture','require','该文件不能空',0,'regex'),
    array('author','require','请输入作者且作者不为空',0,'regex'),
    array('desc','require','请输入文章描述且描述不为空',0,'regex'),
    array('content','require','请输入文章内容且内容不为空',0,'regex'),
  );

}