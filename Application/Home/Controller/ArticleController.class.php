<?php

/**
 * Created by PhpStorm.
 * User: hp-pc
 * Date: 2017/1/25
 * Time: 16:58
 */
namespace Home\Controller;
use Common\Controller\HomeBaseController;
class ArticleController extends HomeBaseController{
  //文章方法:
  public function index(){
    //实例化对象
    $model = M('Article');
    //获得id的数据
    $id = I('id'); //从通过id传过来的id,去找数据库相应的文章
    //主表:tp_Article;
    //从表:tp_cate;
    //$sql = "select tp1.*,tp2.catename as catename from tp_article as tp1 left join tp_cate as tp2 on tp1.cateid = tp2.id where tp1.id=37;";
    $data = $model->field('tp1.*,tp2.catename as catename')->alias('tp1')->join('left join tp_cate as tp2 on tp1.cateid = tp2.id')->where('tp1.id='.$id)->select();
    //传递给数据
    $this->assign('data',$data);
    //引入公共属性的类方法
    $this->other($id);
    $this->link();
    $this->nodeList(); //节点列表
    //展示模板
    $this->display();
  }

  //跳转上下方法:
  public function other($id){
    $model = M('Article');
    $data = $model->find($id);  //从通过id传过来的id,去找数据库相应的文章
    $cateid = $data['cateid'];  //找到获得相应的文章的cateid
    $prevs = $model->where('id>'.$id)->where(array('cateid'=>$cateid))->order('id asc')->find();//asc = 升序
    $nexts = $model->where('id<'.$id)->where(array('cateid'=>$cateid))->order('id desc')->find(); //desc = 降序
//    var_dump($prevs,$nexts);die;
    //传递给数据
    $this->assign("prevs",$prevs);
    $this->assign("nexts",$nexts);
  }

  //链接URL方法:
  public function link(){
    $model = M('Link');
    //部委网站：
    $link = $model->where('sort=0')->select();
    //中央媒体：
    $link1 = $model->where('sort=1')->select();
    //中国地区：
    $link2 = $model->where('sort=2')->select();
    //传递给数据
    $this->assign('link',$link);
    $this->assign('link1',$link1);
    $this->assign('link2',$link2);
  }
  //节点列表方法
  public function nodeList(){
    $model = M('Article');
    $node = $model->field('id,title,time')->limit(8)->order('time desc')->select();
    //传递给数据
    $this->assign('node',$node);
  }

}