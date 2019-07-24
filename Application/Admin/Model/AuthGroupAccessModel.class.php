<?php
/**
 * Created by PhpStorm.
 * User: hp-pc
 * Date: 2017/5/17
 * Time: 13:23
 */

namespace Admin\Model;
use Common\Model\BaseModel;

class AuthGroupAccessModel extends BaseModel{
  /*
   * 获取管理员权限列表
   * */
  public function getAllData(){
    $data = $this
      ->field('u.id,u.username,u.nickname,u.sex,u.phone,u.email,u.lock,aga.group_id,ag.title')
      ->alias('aga')
      ->join('__ADMIN__ u ON aga.uid=u.id','RIGHT')
      ->join('__AUTH_GROUP__ ag ON aga.group_id=ag.id','LEFT')
      ->select();
    $first = $data[0];
    $first['title'] = array(); //空数组
    $group_user[$first['id']] = $first;
    //组合数组
    foreach($data as $k => $v){
      foreach($group_user as $m => $n){
        $uids = array_map(function($a){return $a['id'];},$group_user);
        if(!in_array($v['id'],$uids)){
          $v['title'] = array();
          $group_user[$v['id']] = $v;
        }
      }
    }
    //组合管理员title数组
    foreach($group_user as $k => $v){
      foreach($data as $m => $n){
        if($n['id'] == $k){
          $group_user[$k]['title'][] = $n['title'];
        }
      }
      $group_user[$k]['title'] = implode(',',$group_user[$k]['title']);
    }
    // 管理组title数组用顿号连接
    return $group_user;
  }
}