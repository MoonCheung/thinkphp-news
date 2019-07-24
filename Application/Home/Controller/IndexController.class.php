<?php
namespace Home\Controller;
use Common\Controller\HomeBaseController;
class IndexController extends HomeBaseController{
  //前台页面
  public function index(){
    $model = M('Article');  //实例化对象
    $count = $model->count(); //查询满足要求的总记录数
    $page = new \Think\Page($count,9); //实例化分页类,传入总记录数的每页显示的记录数(5)
    //分页第三步:定义提示文字
    $page->setConfig('first','首页');
    $page->setConfig('prev','&laquo;上一页');
    $page->setConfig('next','下一页&raquo;');
    $page->setConfig('last','末页');
    $page->rollPage  = 5;      // 分页栏每页显示的页数
    $page->lastSuffix = false; // 最后一页是否显示总页数

    $show = $page->show();  //分页显示输出
    //进行分页数据查询，注意limit方法的参数要使用page类的属性
    $list = $model->order('time desc')->limit($page->firstRow.','.$page->listRows)->select();
    $this->assign("list",$list); //赋值数据集
    $this->assign("page",$show); //赋值分页输出
    //引入公共属性的类方法：
    $this->topList();
    $this->carousel();
    $this->link();
    $this->cate(); //跳转到人生哲理
    $this->cate1();//跳转到励志文章
    $this->cate2();//跳转到感情美文
    $this->cate3();//跳转到金典美文
    $this->cate4();//跳转到人生感情
    $this->sidebar(); //文章侧栏->图片头条&列表
    $this->sideList(); //文章侧栏->节点列表
    //展示模板
    $this->display();
  }
  //右边头条方法
  public function topList(){
    $model = M('Article');
    $toplist = $model->field('id,title,desc')->limit(6)->select();
    //传递给数据
    $this->assign('toplist',$toplist);
  }
  //左边轮播方法
  public function carousel(){
    $model = M('Lunbo');
    $carousel = $model->field('id,picture,title')->limit(5)->select();
    //传递给数据
    $this->assign('carousel',$carousel);
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
  //跳转到人生哲理方法
  public function cate(){
    $model = M('Article');  //实例化对象
    $count = $model->count(); //查询满足要求的总记录数
    $page = new \Think\Page($count,9); //实例化分页类,传入总记录数的每页显示的记录数(5)
    //分页第三步:定义提示文字
    $page->setConfig('first','首页');
    $page->setConfig('prev','&laquo;上一页');
    $page->setConfig('next','下一页&raquo;');
    $page->setConfig('last','末页');
    $page->rollPage  = 5;      // 分页栏每页显示的页数
    $page->lastSuffix = false; // 最后一页是否显示总页数
    $show = $page->show();  //分页显示输出
    //进行分页数据查询，注意limit方法的参数要使用page类的属性
    //主表:tp_Article;
    //从表:tp_cate;
    //$sql = "select tp1.*,tp2.catename as catename from tp_article as tp1 left join tp_cate as tp2 on tp1.cateid = tp2.id where array('catename'=>'人生哲理');";
    $list =  $model->field('tp1.*,tp2.catename as catename')->alias('tp1')->join('left join tp_cate as tp2 on tp1.cateid = tp2.id')->where(array('catename'=>'人生哲理'))->limit($page->firstRow.','.$page->listRows)->select();
    $this->assign("list1",$list); //赋值数据集
    $this->assign("page1",$show); //赋值分页输出
  }
  //跳转到励志文章方法
  public function cate1(){
    $model = M('Article');  //实例化对象
    $count = $model->count(); //查询满足要求的总记录数
    $page = new \Think\Page($count,9); //实例化分页类,传入总记录数的每页显示的记录数(5)
    //分页第三步:定义提示文字
    $page->setConfig('first','首页');
    $page->setConfig('prev','&laquo;上一页');
    $page->setConfig('next','下一页&raquo;');
    $page->setConfig('last','末页');
    $page->rollPage  = 5;      // 分页栏每页显示的页数
    $page->lastSuffix = false; // 最后一页是否显示总页数
    $show = $page->show();  //分页显示输出
    //进行分页数据查询，注意limit方法的参数要使用page类的属性
    //主表:tp_Article;
    //从表:tp_cate;
    //$sql = "select tp1.*,tp2.catename as catename from tp_article as tp1 left join tp_cate as tp2 on tp1.cateid = tp2.id where array('catename'=>'励志文章');";
    $list =  $model->field('tp1.*,tp2.catename as catename')->alias('tp1')->join('left join tp_cate as tp2 on tp1.cateid = tp2.id')->where(array('catename'=>'励志文章'))->limit($page->firstRow.','.$page->listRows)->select();
    $this->assign("list2",$list); //赋值数据集
    $this->assign("page2",$show); //赋值分页输出
  }
  //跳转到感情美文方法
  public function cate2(){
    $model = M('Article');  //实例化对象
    $count = $model->count(); //查询满足要求的总记录数
    $page = new \Think\Page($count,9); //实例化分页类,传入总记录数的每页显示的记录数(5)
    //分页第三步:定义提示文字
    $page->setConfig('first','首页');
    $page->setConfig('prev','&laquo;上一页');
    $page->setConfig('next','下一页&raquo;');
    $page->setConfig('last','末页');
    $page->rollPage  = 5;      // 分页栏每页显示的页数
    $page->lastSuffix = false; // 最后一页是否显示总页数
    $show = $page->show();  //分页显示输出
    //进行分页数据查询，注意limit方法的参数要使用page类的属性
    //主表:tp_Article;
    //从表:tp_cate;
    //$sql = "select tp1.*,tp2.catename as catename from tp_article as tp1 left join tp_cate as tp2 on tp1.cateid = tp2.id where array('catename'=>'感情美文');";
    $list =  $model->field('tp1.*,tp2.catename as catename')->alias('tp1')->join('left join tp_cate as tp2 on tp1.cateid = tp2.id')->where(array('catename'=>'感情美文'))->limit($page->firstRow.','.$page->listRows)->select();
    $this->assign("list3",$list); //赋值数据集
    $this->assign("page3",$show); //赋值分页输出
  }
  //跳转到金典美文方法
  public function cate3(){
    $model = M('Article');  //实例化对象
    $count = $model->count(); //查询满足要求的总记录数
    $page = new \Think\Page($count,9); //实例化分页类,传入总记录数的每页显示的记录数(5)
    //分页第三步:定义提示文字
    $page->setConfig('first','首页');
    $page->setConfig('prev','&laquo;上一页');
    $page->setConfig('next','下一页&raquo;');
    $page->setConfig('last','末页');
    $page->rollPage  = 5;      // 分页栏每页显示的页数
    $page->lastSuffix = false; // 最后一页是否显示总页数
    $show = $page->show();  //分页显示输出
    //进行分页数据查询，注意limit方法的参数要使用page类的属性
    //主表:tp_Article;
    //从表:tp_cate;
    //$sql = "select tp1.*,tp2.catename as catename from tp_article as tp1 left join tp_cate as tp2 on tp1.cateid = tp2.id where array('catename'=>'金典美文');";
    $list =  $model->field('tp1.*,tp2.catename as catename')->alias('tp1')->join('left join tp_cate as tp2 on tp1.cateid = tp2.id')->where(array('catename'=>'金典美文'))->limit($page->firstRow.','.$page->listRows)->select();
    $this->assign("list4",$list); //赋值数据集
    $this->assign("page4",$show); //赋值分页输出
  }
  //跳转到人生感情方法
  public function cate4(){
    $model = M('Article');  //实例化对象
    $count = $model->count(); //查询满足要求的总记录数
    $page = new \Think\Page($count,9); //实例化分页类,传入总记录数的每页显示的记录数(5)
    //分页第三步:定义提示文字
    $page->setConfig('first','首页');
    $page->setConfig('prev','&laquo;上一页');
    $page->setConfig('next','下一页&raquo;');
    $page->setConfig('last','末页');
    $page->rollPage  = 5;      // 分页栏每页显示的页数
    $page->lastSuffix = false; // 最后一页是否显示总页数
    $show = $page->show();  //分页显示输出
    //进行分页数据查询，注意limit方法的参数要使用page类的属性
    //主表:tp_Article;
    //从表:tp_cate;
    //$sql = "select tp1.*,tp2.catename as catename from tp_article as tp1 left join tp_cate as tp2 on tp1.cateid = tp2.id where array('catename'=>'人生感情');";
    $list =  $model->field('tp1.*,tp2.catename as catename')->alias('tp1')->join('left join tp_cate as tp2 on tp1.cateid = tp2.id')->where(array('catename'=>'人生感情'))->limit($page->firstRow.','.$page->listRows)->select();
    $this->assign("list5",$list); //赋值数据集
    $this->assign("page5",$show); //赋值分页输出
  }

  //文章侧栏->图片方法
  public function sidebar(){
    $model = M('Lunbo');
    //显示图片头条
    $one = $model->field('id,picture,title')->order('time desc')->find();
    //显示头条列表
    $two = $model->field('id,title')->order('time desc')->select();
    //传递给数据
    $this->assign('imageOne',$one);
    $this->assign('imageTwo',$two);
  }
  //文章侧栏->节点列表方法
  public function sideList(){
    $model = M('Article');
    //显示头条列表标头
    $one = $model->field('id,title')->order('time desc')->find();
    //显示节点列表
    $two = $model->field('id,title')->limit(5)->select();
    //传递给数据
    $this->assign('nodeOne',$one);
    $this->assign('nodeTwo',$two);
  }
}