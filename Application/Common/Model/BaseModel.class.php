<?php
/**
 * Created by PhpStorm.
 * User: hp-pc
 * Date: 2017/5/16
 * Time: 15:20
 */

namespace Common\Model;
use Think\Model;
/*
 * 基本模型
 * */
class BaseModel extends Model{
  /*
   * 添加数据
   * @parent array  数组$data
   * @return int    新增的数据id
   * */
  public function addData($data){
    foreach($data as $v => $k){
      //去除键值首尾空格
      $data[$v] = trim($k);
    }
    $id = $this->add($data);
    return $id;
  }

  /*
   * 修改数据
   * @parent array   $map     where语句数组形式
   * @parent array   $data    数组$data
   * @return Boolean $result  操作是否成功
   * */
  public function editData($map,$data){
    foreach($data as $v =>$k){
      //去除键值首尾空格
      $data[$v] = trim($k);
    }
    $result = $this->where($map)->save($data);
    return $result;
  }

  /*
   * 删除数据-->暂时的
   * @parent array   $map     where语句数组形式
   * @return Boolean $result  操作是否成功
   * */
  public function deleteData($map){
    if(empty($map)){
      die('where为空的危险操作');
    }
    $result = $this->where($map)->delete();
    return $result;
  }

  /**
   * 数据排序
   * @param  array $data   数据源
   * @param  string $id    主键
   * @param  string $order 排序字段
   * @return boolean       操作是否成功
   */
  public function orderData($data,$id='id',$order='order_number'){
    foreach ($data as $k => $v) {
      $v=empty($v) ? null : $v;
      $this->where(array($id=>$k))->save(array($order=>$v));
    }
    return true;
  }

  /**
   * 获取全部数据
   * @param  string $type  tree获取树形结构 level获取层级结构
   * @param  string $order 排序方式
   * @return array         结构数据
   */
  public function getTreeData($type='tree',$order='',$name='name',$child='id',$parent='pid'){
    // 判断是否需要排序
    if(empty($order)){
      $data=$this->select();
    }else{
      $data=$this->order($order.' is null,'.$order)->select();
    }
    // 获取树形或者结构数据
    if($type=='tree'){
      $data=\Org\Nx\Data::tree($data,$name,$child,$parent);
    }elseif($type="level"){
      $data=\Org\Nx\Data::channelLevel($data,0,'&nbsp;',$child);
    }
    return $data;
  }

}