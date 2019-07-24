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
              <a class="navbar-brand thumb hidden-lg hidden-md hidden-sm" href="/tp_news/index.php/Home/index/index.html"><img src="/tp_news/Public/Home/images/m_logo.png" alt="缩略图"></a>
            </div>
            <div class="collapse navbar-collapse nav-pic" id="mycollapse">
              <ul class="nav navbar-nav navbar-list">
                <li><a href="/tp_news/index.php/Home/index/index.html">首页</a></li>
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
      <div class="col-md-12 col-sm-12 div_phone">
        <div class="art-box">
          <div class="col-md-8 col-sm-12">
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><h4 class="box-title"><?php echo ($vo["title"]); ?></h4>
              <p class="box-col">所属栏目:<?php echo ($vo["catename"]); ?>&nbsp;,&nbsp;日期:<?php echo (date('Y:m:d',$vo["time"])); ?></p>
              <div><?php echo (htmlspecialchars_decode($vo["content"])); ?></div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="box-foot">
              <ul class="pager">
                <li class="previous">
                  <?php if($prevs): ?><a href="/tp_news/index.php/Home/Article/index/id/<?php echo ($prevs["id"]); ?>">上一章:<?php echo (mb_substr($prevs["title"],0,5)); ?></a>
                    <?php else: ?>
                    <a href="#">上一章:没有</a><?php endif; ?>
                </li>
                <li class="next pull-right">
                  <?php if($nexts): ?><a href="/tp_news/index.php/Home/Article/index/id/<?php echo ($nexts["id"]); ?>">下一章:<?php echo (mb_substr($nexts["title"],0,5)); ?></a>
                    <?php else: ?>
                    <a href="#">下一章:没有</a><?php endif; ?>
                </li>
              </ul>
            </div>
            <!--分享插件-->
            <div class="share-md">分享到:
            <div class="bdsharebuttonbox">
              <a href="#" class="bds_more" data-cmd="more"></a>
              <a href="#" class="bds_qzone" data-cmd="qzone"></a>
              <a href="#" class="bds_tsina" data-cmd="tsina"></a>
              <a href="#" class="bds_tqq" data-cmd="tqq"></a>
              <a href="#" class="bds_renren" data-cmd="renren"></a>
              <a href="#" class="bds_weixin" data-cmd="weixin"></a>
            </div></div>
          </div>
          <aside class="col-md-4 hidden-xs">
            <span class="header-art-asi"><strong>最新发表:</strong></span>
            <ul class="body-art-asi">
              <?php if(is_array($node)): $i = 0; $__LIST__ = $node;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="#"><?php echo (mb_substr($vo["title"],0,20)); ?></a><i class="pull-right"><?php echo (date('Y-m-d',$vo["time"])); ?></i></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>

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
<script src="/tp_news/Public/Home/js/index.js" type="text/javascript"></script>
<script>
  //我们自己的代码
  //百度分享插件如下:
  window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];

</script>
</body>
</html>