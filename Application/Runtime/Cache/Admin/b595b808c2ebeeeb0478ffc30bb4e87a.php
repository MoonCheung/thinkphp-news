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
  <link href="/tp_news/Public/Admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- 引入 plugin CSS的样式-->
  <link href="/tp_news/Public/Admin/plugin/Font-Awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- 引入自定义样式 -->
  <link href="/tp_news/Public/Admin/css/style.css" rel="stylesheet">
</head>
<body>
<section id="container" class="">
  <!--header start-->
  <header class="header white-bg">
    <div class="sidebar-toggle-box">
      <div class="icon-reorder"></div>
    </div>
    <!--Login btn-->
    <a href="#" class="login">Flat<span>lab</span></a>
    <div class="nav notify-row hidden-xs" id="top-menu">
      <ul class="nav top-menu">
        <li class="dropdown">
          <a href="#">
            <i class="icon-tasks"></i>
            <span class="badge bg-success"></span> <!--小标签-->
          </a>
        </li>
        <li class="dropdown">
          <a href="#">
            <i class="icon-envelope-alt"></i>
            <span class="badge bg-danger"></span> <!--小标签-->
          </a>
        </li>
        <li class="dropdown">
          <a href="#">
            <i class="icon-bell-alt"></i>
            <span class="badge bg-warning"></span> <!--小标签-->
          </a>
        </li>
      </ul>
    </div>
    <!--search or Login -->
    <div class="top-nav">
      <ul class="nav pull-right top-menu">
        <li class="hidden-xs"><input type="text" class="form-control search" placeholder="搜索"></li>
        <li class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            <img src="/tp_news/Public/Admin/images/avatar1_small.jpg" alt="设置头像">  <!--头像-->
            <span class="username"><?php echo (session('username')); ?></span>
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu extended logout" role="menu">
            <div class="log-arrow-up"></div>
            <li><a href="#"><i class="icon-suitcase"></i>Link</a></li>
            <li><a href="#"><i class="icon-cog"></i>Link</a></li>
            <li><a href="#"><i class="icon-bell-alt"></i>Link</a></li>
            <li><a href="/tp_news/index.php/Admin/Index/logout"><i class="icon-key"></i>退出</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </header>
  <!--aside start-->
  <aside id="sidebar" class="nav-collapse">
    <div class="sidebar-cont" tabindex="5000">
      <!-- sidebar menu start-->
      <ul class="sidebar-menu">
        <li class=""><a href="javascript:;" data-src="<?php echo U('index/home');?>"><i class="icon-dashboard"></i><span>面板</span></a></li>
        <li class="sub-menu">
          <a href="javascript:;"><i class="icon-group"></i><span>会员管理</span><span class="arrow"></span></a>
          <ul class="sub">
            <li><a href="javascript:;" data-src="<?php echo U('new/userList');?>">用户管理</a></li>
            <li><a href="javascript:;" data-src="<?php echo U('Auth/role_group');?>">角色管理</a></li>
            <li><a href="javascript:;" data-src="<?php echo U('Auth/rule_list');?>">权限管理</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;"><i class="icon-reorder"></i><span>栏目管理</span><span class="arrow"></span></a>
          <ul class="sub">
            <li><a href="javascript:;" data-src="<?php echo U('newSort/newList');?>">新闻栏目</a></li>
            <li><a href="javascript:;" data-src="<?php echo U('DeptSort/deptList');?>">部门栏目</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;"><i class="icon-book"></i><span>新闻管理</span><span class="arrow"></span></a>
          <ul class="sub">
            <li><a href="javascript:;" data-src="<?php echo U('article/artiList');?>">文章管理</a></li>
            <li><a href="javascript:;" data-src="<?php echo U('carousel/carList');?>">轮播管理</a></li>
          </ul>
        </li>
        <li class="sub-menu"><a href="javascript:;"><i class="icon-envelope"></i><span>邮件管理</span><span class="label label-danger pull-right mail-info">0</span></a></li>
        <li class="sub-menu">
          <a href="javascript:;"><i class="icon-folder-open"></i><span>文件管理</span><span class="arrow"></span></a>
          <ul class="sub">
            <li><a href="javascript:;" data-src="">子Link</a></li>
            <li><a href="javascript:;" data-src="">子Link</a></li>
            <li><a href="javascript:;" data-src="">子Link</a></li>
            <li><a href="javascript:;" data-src="">子Link</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;"><i class="icon-tags"></i><span>标签管理</span><span class="arrow"></span></a>
          <ul class="sub">
            <li><a href="javascript:;" data-src="">子Link</a></li>
            <li><a href="javascript:;" data-src="">子Link</a></li>
            <li><a href="javascript:;" data-src="">子Link</a></li>
            <li><a href="javascript:;" data-src="">子Link</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;"><i class="icon-comments"></i><span>讨论管理</span><span class="arrow"></span></a>
          <ul class="sub">
            <li><a href="javascript:;" data-src="">子Link</a></li>
            <li><a href="javascript:;" data-src="">子Link</a></li>
            <li><a href="javascript:;" data-src="">子Link</a></li>
            <li><a href="javascript:;" data-src="">子Link</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;"><i class=" icon-comments-alt"></i><span>评论管理</span><span class="arrow"></span></a>
          <ul class="sub">
            <li><a href="javascript:;" data-src="">子Link</a></li>
            <li><a href="javascript:;" data-src="">子Link</a></li>
            <li><a href="javascript:;" data-src="">子Link</a></li>
            <li><a href="javascript:;" data-src="">子Link</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;"><i class="icon-th"></i><span>友情管理</span><span class="arrow"></span></a>
          <ul class="sub">
            <li><a href="javascript:;" data-src="<?php echo U('link/linkList');?>">友情列表</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;"><i class="icon-comment"></i><span>访问管理</span><span class="arrow"></span></a>
          <ul class="sub">
            <li><a href="javascript:;" data-src="">子Link</a></li>
            <li><a href="javascript:;" data-src="">子Link</a></li>
            <li><a href="javascript:;" data-src="">子Link</a></li>
            <li><a href="javascript:;" data-src="">子Link</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </aside>
  <!--iframe内联框架-->
  <!--section start-->
  <section id="main-content">
    <section class="wrapper">
      <iframe id="iframe" name="iframe" src="<?php echo U('home');?>" frameborder="0"></iframe>
    </section>
  </section>
</section>

<script src="/tp_news/Public/Admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/tp_news/Public/Admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/tp_news/Public/Admin/bower_components/jquery.nicescroll/jquery.nicescroll.min.js"></script>
<script src="/tp_news/Public/Admin/js/index.js" type="text/javascript"></script>
<script>
  //我们自己的代码
  $(function(){
    //iframe美化滚动条
    $('#iframe').niceScroll();
    //侧栏菜单滚动条
    $('#sidebar').niceScroll();
  })
</script>
</body>
</html>