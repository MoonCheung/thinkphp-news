<?php

/**
 * Created by PhpStorm.
 * User: hp-pc
 * Date: 2017/1/31
 * Time: 22:17
 */
namespace Admin\Controller;
use Common\Controller\AdminBaseController;
class LinkController extends AdminBaseController{
  //添加链接方法
  public function addLink(){
    $link = D('Link');
    if(IS_POST){
      $post = I('post.');
      $post['time'] = time();
      if(!$link->create($post)){
        //验证没有通过,输出错误提示信息
        $this->error($link->getError());
      }else{
        //验证则通过，执行登录操作
        $res = $link->add($post);
        if($res!=false){
          $this->success('添加成功',U('link/linkList'),3);
        }else{
          $this->error('添加失败');
        }
      }
    }else{
      //展示模板
      $this->display();
    }

  }
  //编辑链接方法
  public function linkEdit(){
    $link = D('Link');
    if(IS_POST){
      $data = I('post.');
      $data['time'] = time();
      if(!$link->create($data)){
        //验证没有通过,输出错误提示信息
        $this->error($link->getError());
      }else{
        //验证则通过，执行登录操作
        $res = $link->save($data);
        if($res!=false){
          $this->success('添加成功',U('link/linkList'),3);
        }else{
          $this->error('添加失败');
        }
      }
    }else{
      //从中获得数据单个ID
      $id = I('get.id');
      $data = $link->find($id);
      //传递给数据
      $this->assign('data',$data);
      //展示模板
      $this->display();
    }
  }
  //链接列表方法
  public function linkList(){
    $link = M('Link');
    $count = $link->count(); // 查询满足要求的总记录数
    $page = new \Think\Page($count,12); //实例化分页类
    //分页样式定制
    $page->setConfig('first','首页');
    $page->setConfig('prev','&laquo;');
    $page->setConfig('next','&raquo;');
    $page->setConfig('last','末页');
    $page->rollPage =5;// 分页栏每页显示的页数
    $page->lastSuffix = false; // 最后一页是否显示总页数
    $show = $page->show();
    //进行分页数据查询注意page方法的参数
    $list = $link->order('time desc')->limit($page->firstRow.','.$page->listRows)->select();
    //传递给数据
    $this->assign('list',$list); //赋值数据集
    $this->assign('page',$show); //赋值分页输出
    $this->assign('count',$count); //赋值分页总数
    //展示模板
    $this->display();
  }
  //删除单个链接方法
  public function delLink(){
    $link = M('Link');
    $id = I('get.id');
    //删除从数据库单个行
    if($link->delete($id)){
      $this->success("删除成功!");
    }else{
      $this->error("删除失败!");
    }
  }
}