<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Examples</title>
  <!-- 设置 viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- IE浏览器 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- 兼容国产浏览器的高速模式 -->
  <meta name="renderer" content="webkit">
  <!-- 引入 Bootstrap 的 CSS 文件 -->
  <link href="/tp_news/Public/Home/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- 引入 plugin CSS的样式-->
  <link href="/tp_news/Public/Home/plugin/Font-Awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/tp_news/Public/Home/plugin/unslider/dist/css/unslider.css" rel="stylesheet">
  <!-- 引入自定义样式 -->
  <link href="/tp_news/Public/Home/css/style.css" rel="stylesheet">
</head>
<body>
<header>
  <!--header top-->
  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-8 nav-list hidden-xs">
          <ul class="">
            <li><a href="#">新闻首页</a></li>
            <li><a href="#">巴西世界杯一再爆冷</a></li>
            <li><a href="#">卫冕冠军西班牙出局</a></li>
            <li><a href="#">瑞士人为啥最幸福</a></li>
            <li><a href="#">中国病人庞麦郎</a></li>
          </ul>
        </div>
        <div class="col-md-4 nav-list hidden-xs">
          <ul class="pull-right nav-top-btn">
            <li><a href="#" class="">登录</a></li>
            <li><a href="#" class="">注册</a></li>
            <li>您好,admin <a href="#" class="">退出</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- logo and adds-->
  <div class="header-logo">
    <div class="container">
      <div class="row">
        <!--Logo图标-->
        <div class="col-md-8 logo hidden-xs">
          <div><img src="/tp_news/Public/Home/images/logo.png" alt="Logo图标" /></div>
        </div>
        <!--右边搜索栏-->
        <div class="col-md-4 search hidden-xs">
          <div class="form-group">
            <div class="input-group">
              <input class="form-control input-sm" type="text" placeholder="搜索.." />
              <div class="input-group-addon"><a href="javascript:;" class="search-logo"></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--header bottom-->
  <div class="header-bottom header-nav" id="nav-top">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="navbar-header nav-moblie">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mycollapse">
                <span class="sr-only">Toggle navgation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand thumb hidden-lg hidden-md hidden-sm" href="/tp_news/index.php/Home/Index/index.html"><img src="/tp_news/Public/Home/images/m_logo.png" alt="缩略图"></a>
            </div>
            <div class="collapse navbar-collapse nav-pic" id="mycollapse">
              <ul class="nav navbar-nav navbar-list">
                <li><a href="/tp_news/index.php/Home/Index/index.html">首页</a></li>
                <li><a href="#">新闻动态</a></li>
                <li><a href="#">关于我们</a></li>
                <li><a href="#">联系我们</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 div_phone">
        <div class="car-box">
          <!--左边轮播图-->
          <div class="col-md-7 col-lg-7 div_carousel">
            <div class="banner" id="mybanner">
              <ul>
                <!--<li style="background-image: url('/tp_news/Public/Home/images/ad/12493512_1342949594483.jpg');">-->
                  <!--<div class="banner-box">-->
                    <!--<h4>轮播图1</h4>-->
                  <!--</div>-->
                <!--</li>-->
                <?php if(is_array($carousel)): $i = 0; $__LIST__ = $carousel;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="background-image: url('/tp_news<?php echo ($vo["picture"]); ?>');">
                    <div class="banner-box">
                      <h4><?php echo (mb_substr($vo["title"],0,20)); ?></h4>
                    </div>
                  </li><?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
            </div>

          </div>
          <!--右边头条列表-->
          <div class="col-md-5" style="padding-left: 0;">
            <div class="list-group">
              <?php if(is_array($toplist)): $i = 0; $__LIST__ = $toplist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/tp_news/index.php/Home/article/index/id/<?php echo ($vo["id"]); ?>" class="list-group-item">
                    <h4 class="list-group-item-heading list-title"><?php echo (mb_substr($vo["title"],0,18)); ?></h4>
                    <p class="list-group-item-text list-desc">导读:<?php echo (mb_substr($vo["desc"],0,30)); ?></p>
                  </a><?php endforeach; endif; else: echo "" ;endif; ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12 div_phone">
        <div class="sec-box">
          <article class="col-md-8 sec-art">
            <!--Nav tabs-->
            <div class="header-box">
              <ul class="header-btn" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" data-toggle="tab" role="tab">全部</a></li>
                <li role="presentation"><a href="#cate" aria-controls="cate" data-toggle="tab" role="tab">人生感情</a></li>
                <li role="presentation"><a href="#cate1" aria-controls="cate1" data-toggle="tab" role="tab">金典美文</a></li>
                <li role="presentation"><a href="#cate2" aria-controls="cate2" data-toggle="tab" role="tab">感情美文</a></li>
                <li role="presentation"><a href="#cate3" aria-controls="cate3" data-toggle="tab" role="tab">励志文章</a></li>
                <li role="presentation"><a href="#cate4" aria-controls="cate4" data-toggle="tab" role="tab">人生哲理</a></li>
              </ul>
            </div>
            <!--Tab panes-->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="home">
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="media pull-left">
                    <a class="media-left" href="#"><img src="/tp_news<?php echo ($vo["picture"]); ?>" style="width: 80px;height: 80px;" alt="图像"></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="/tp_news/index.php/Home/article/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></h4>
                      <div><?php echo (mb_substr($vo["desc"],0,35)); ?></div>
                      <div>日期:<?php echo (date('Y-m-d',$vo["time"])); ?></div> <!--日期-->
                      <p class="pull-right"><a href="/tp_news/index.php/Home/article/index/id/<?php echo ($vo["id"]); ?>" class="btn btn-primary btn-xs">详情&raquo;</a></p>  <!--点击详情文章-->
                    </div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
                <!--分页查询-->
                <div class="footer-box">
                  <ul class="pagination">
                    <li><?php echo ($page); ?></li>
                  </ul>
                </div>
              </div>
              <!--人生感情分栏-->
              <div role="tabpanel" class="tab-pane" id="cate">
                <?php if(is_array($list5)): $i = 0; $__LIST__ = $list5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo5): $mod = ($i % 2 );++$i;?><div class="media pull-left">
                    <a class="media-left" href="#"><img src="/tp_news<?php echo ($vo5["picture"]); ?>" style="width: 80px;height: 80px;" alt="图像"></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="/tp_news/index.php/Home/article/index/id/<?php echo ($vo5["id"]); ?>"><?php echo ($vo5["title"]); ?></a></h4>
                      <div><?php echo (mb_substr($vo5["desc"],0,35)); ?></div>
                      <div>日期:<?php echo (date('Y-m-d',$vo5["time"])); ?></div> <!--日期-->
                      <p class="pull-right"><a href="/tp_news/index.php/Home/article/index/id/<?php echo ($vo5["id"]); ?>" class="btn btn-primary btn-xs">详情&raquo;</a></p>  <!--点击详情文章-->
                    </div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
                <!--分页查询-->
                <div class="footer-box">
                  <ul class="pagination">
                    <li><?php echo ($page5); ?></li>
                  </ul>
                </div>
              </div>
              <!--金典美文分栏-->
              <div role="tabpanel" class="tab-pane" id="cate1">
                <?php if(is_array($list4)): $i = 0; $__LIST__ = $list4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo4): $mod = ($i % 2 );++$i;?><div class="media pull-left">
                    <a class="media-left" href="#"><img src="/tp_news<?php echo ($vo4["picture"]); ?>" style="width: 80px;height: 80px;" alt="图像"></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="/tp_news/index.php/Home/article/index/id/<?php echo ($vo4["id"]); ?>"><?php echo ($vo4["title"]); ?></a></h4>
                      <div><?php echo (mb_substr($vo4["desc"],0,35)); ?></div>
                      <div>日期:<?php echo (date('Y-m-d',$vo4["time"])); ?></div> <!--日期-->
                      <p class="pull-right"><a href="/tp_news/index.php/Home/article/index/id/<?php echo ($vo4["id"]); ?>" class="btn btn-primary btn-xs">详情&raquo;</a></p>  <!--点击详情文章-->
                    </div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
                <!--分页查询-->
                <div class="footer-box">
                  <ul class="pagination">
                    <li><?php echo ($page4); ?></li>
                  </ul>
                </div>
              </div>
              <!--感情美文分栏-->
              <div role="tabpanel" class="tab-pane" id="cate2">
                <?php if(is_array($list3)): $i = 0; $__LIST__ = $list3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;?><div class="media pull-left">
                    <a class="media-left" href="#"><img src="/tp_news<?php echo ($vo3["picture"]); ?>" style="width: 80px;height: 80px;" alt="图像"></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="/tp_news/index.php/Home/article/index/id/<?php echo ($vo3["id"]); ?>"><?php echo ($vo3["title"]); ?></a></h4>
                      <div><?php echo (mb_substr($vo3["desc"],0,35)); ?></div>
                      <div>日期:<?php echo (date('Y-m-d',$vo3["time"])); ?></div> <!--日期-->
                      <p class="pull-right"><a href="/tp_news/index.php/Home/article/index/id/<?php echo ($vo3["id"]); ?>" class="btn btn-primary btn-xs">详情&raquo;</a></p>  <!--点击详情文章-->
                    </div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
                <!--分页查询-->
                <div class="footer-box">
                  <ul class="pagination">
                    <li><?php echo ($page3); ?></li>
                  </ul>
                </div>
              </div>
              <!--励志文章分栏-->
              <div role="tabpanel" class="tab-pane" id="cate3">
                <?php if(is_array($list2)): $i = 0; $__LIST__ = $list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><div class="media pull-left">
                    <a class="media-left" href="#"><img src="/tp_news<?php echo ($vo2["picture"]); ?>" style="width: 80px;height: 80px;" alt="图像"></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="/tp_news/index.php/Home/article/index/id/<?php echo ($vo2["id"]); ?>"><?php echo ($vo2["title"]); ?></a></h4>
                      <div><?php echo (mb_substr($vo2["desc"],0,35)); ?></div>
                      <div>日期:<?php echo (date('Y-m-d',$vo2["time"])); ?></div> <!--日期-->
                      <p class="pull-right"><a href="/tp_news/index.php/Home/article/index/id/<?php echo ($vo2["id"]); ?>" class="btn btn-primary btn-xs">详情&raquo;</a></p>  <!--点击详情文章-->
                    </div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
                <!--分页查询-->
                <div class="footer-box">
                  <ul class="pagination">
                    <li><?php echo ($page2); ?></li>
                  </ul>
                </div>
              </div>
              <!--人生哲理分栏-->
              <div role="tabpanel" class="tab-pane" id="cate4">
                <?php if(is_array($list1)): $i = 0; $__LIST__ = $list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><div class="media pull-left">
                    <a class="media-left" href="#"><img src="/tp_news<?php echo ($vo1["picture"]); ?>" style="width: 80px;height: 80px;" alt="图像"></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="/tp_news/index.php/Home/article/index/id/<?php echo ($vo1["id"]); ?>"><?php echo ($vo1["title"]); ?></a></h4>
                      <div><?php echo (mb_substr($vo1["desc"],0,35)); ?></div>
                      <div>日期:<?php echo (date('Y-m-d',$vo1["time"])); ?></div> <!--日期-->
                      <p class="pull-right"><a href="/tp_news/index.php/Home/article/index/id/<?php echo ($vo1["id"]); ?>" class="btn btn-primary btn-xs">详情&raquo;</a></p>  <!--点击详情文章-->
                    </div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
                <!--分页查询-->
                <div class="footer-box">
                  <ul class="pagination">
                    <li><?php echo ($page1); ?></li>
                  </ul>
                </div>
              </div>
            </div>

            <div style="clear: both;"></div>
          </article>
          <aside class="col-md-4 sec-asi">
            <div class="header-asi">头条排行榜:</div>
            <div class="panel panel-default panel-box">
              <div class="panel-body">
                <div style="position: relative;">
                  <img src="/tp_news<?php echo ($imageOne["picture"]); ?>" class="img-rounded img-box" alt="头条图片">
                  <div class="img-title"><a href="#" style="color: #fff;"><?php echo ($imageOne["title"]); ?></a></div>
                </div>
                <ul class="list-group">
                  <?php if(is_array($imageTwo)): $i = 0; $__LIST__ = $imageTwo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo_two): $mod = ($i % 2 );++$i;?><li class="list-group-item"><a href="#"><?php echo ($vo_two["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
              </div>
            </div>
            <div class="panel panel-default panel-box">
              <div class="panel-body">
                <ul class="list-group">
                  <li class="list-group-item list-items"><b style="font-size: 14px;"><a href="#"><?php echo ($nodeOne["title"]); ?></a></b></li>
                  <?php if(is_array($nodeTwo)): $i = 0; $__LIST__ = $nodeTwo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo_Two): $mod = ($i % 2 );++$i;?><li class="list-group-item list-items"><a href="#"><?php echo ($vo_Two["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
              </div>
            </div>

          </aside>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="ftr-box">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="ftr-list">
          <div class="hb"><h4>合作伙伴</h4></div>
          <p class="hb-child">
            <b>部委网站:</b>
            <?php if(is_array($link)): foreach($link as $key=>$vo): ?><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["title"]); ?></a>&nbsp;|<?php endforeach; endif; ?>
          </p>
          <p class="hb-child">
            <b>中央媒体:</b>
            <?php if(is_array($link1)): foreach($link1 as $key=>$vo): ?><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["title"]); ?></a>&nbsp;|<?php endforeach; endif; ?>
          </p>
          <p class="hb-child">
            <b>中国地区:</b>
            <?php if(is_array($link2)): foreach($link2 as $key=>$vo): ?><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["title"]); ?></a>&nbsp;|<?php endforeach; endif; ?>
          </p>
        </div>
        <div class="ftr-last">
          <p>
            <a href="#">关于新闻</a>&nbsp;|
            <a href="#">广告服务</a>&nbsp;|
            <a href="#">联系我们</a>&nbsp;|
            <a href="#">招聘信息</a>&nbsp;|
            <a href="#">网站律师</a>&nbsp;|
            <a href="#">通行证注册</a>&nbsp;|
            <a href="#">产品答疑</a>
          </p>
          <p>Copyright © 1996-2016 Corporation, All Rights Reserved</p>
          <p>新闻网站&nbsp;&nbsp;版权所有</p>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="/tp_news/Public/Home/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/tp_news/Public/Home/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/tp_news/Public/Home/plugin/unslider/src/js/unslider.js"></script>
<script src="/tp_news/Public/Home/js/index.js" type="text/javascript"></script>
<script>
  //我们自己的代码
  //轮播图方法:
  $(function(){
    $('#mybanner').unslider({
      dots:true,
      autoplay: true,
      fluid:true //  支持响应式设计（有可能会影响到响应式）
    });
    $('.unslider-nav>ol>li').text(''); //清空内容
//    $('.unslider-arrows').click(function(){
//      var fn = this.className.split(' ')[1];
//      myunslider.data('unslider')[fn]();
//    });
//    $('.unslider-arrow').html(function(){
//      $(this).text(""); //清空内容
//      var left = $('<i></i>').addClass('icon-angle-left icon-3x');
//      var right = $('<i></i>').addClass('icon-angle-right icon-3x');
//      var next = $('.next').append(left);
//      var nexts = next;
//      console.log(nexts);
//      $('.prev').append(right);
//    });
  });


</script>
</body>
</html>