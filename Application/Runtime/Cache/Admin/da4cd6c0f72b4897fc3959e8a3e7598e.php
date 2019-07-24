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
  <link href="/project/tp_boot/Public/Admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- 引入 plugin CSS的样式-->
  <link href="/project/tp_boot/Public/Admin/plugin/Font-Awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- 引入自定义样式 -->
  <link href="/project/tp_boot/Public/Admin/css/style.css" rel="stylesheet">
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
    <div class="nav notify-row" id="top-menu">
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
        <li><input type="text" class="form-control search" placeholder="搜索"></li>
        <li class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            <img src="/project/tp_boot/Public/Admin/images/avatar1_small.jpg" alt="设置头像">  <!--头像-->
            <span class="username"><?php echo (session('username')); ?></span>
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu extended logout" role="menu">
            <div class="log-arrow-up"></div>
            <li><a href="#"><i class="icon-suitcase"></i>Link</a></li>
            <li><a href="#"><i class="icon-cog"></i>Link</a></li>
            <li><a href="#"><i class="icon-bell-alt"></i>Link</a></li>
            <li><a href="/project/tp_boot/index.php/Admin/Index/logout"><i class="icon-key"></i>退出</a></li>
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
        <li class=""><a href="javascript:;" data-src="<?php echo U('index/home');?>"><i class="icon-home"></i><span>首页</span></a></li>
        <li class="sub-menu">
          <a href="javascript:;"><i class="icon-book"></i><span>用户管理</span><span class="arrow"></span></a>
          <ul class="sub">
            <li><a href="javascript:;" data-src="<?php echo U('new/add');?>">添加用户</a></li>
            <li><a href="javascript:;" data-src="<?php echo U('new/userList');?>">用户列表</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;"><i class="icon-cogs"></i><span>栏目管理</span><span class="arrow"></span></a>
          <ul class="sub">
            <li><a href="javascript:;" data-src="<?php echo U('newSort/addNew');?>">添加新闻栏目</a></li>
            <li><a href="javascript:;" data-src="<?php echo U('DeptSort/addDept');?>">添加部门栏目</a></li>
            <li><a href="javascript:;" data-src="<?php echo U('newSort/newList');?>">新闻栏目列表</a></li>
            <li><a href="javascript:;" data-src="<?php echo U('DeptSort/deptList');?>">部门栏目列表</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;"><i class="icon-tasks"></i><span>文章管理</span><span class="arrow"></span></a>
          <ul class="sub">
            <li><a href="javascript:;" data-src="<?php echo U('article/addArti');?>">添加文章</a></li>
            <li><a href="javascript:;" data-src="<?php echo U('article/artiList');?>">文章列表</a></li>
            <li><a href="javascript:;" data-src="">子Link</a></li>
            <li><a href="javascript:;" data-src="">子Link</a></li>
          </ul>
        </li>
        <li class="sub-menu"><a href="javascript:;"><i class="icon-envelope"></i><span>邮件管理</span><span class="label label-danger pull-right mail-info">0</span></a></li>
        <li class="sub-menu">
          <a href="javascript:;"><i class="icon-th"></i><span>LinkOne</span><span class="arrow"></span></a>
          <ul class="sub">
            <li><a href="javascript:;" data-src="">子Link</a></li>
            <li><a href="javascript:;" data-src="">子Link</a></li>
            <li><a href="javascript:;" data-src="">子Link</a></li>
            <li><a href="javascript:;" data-src="">子Link</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;"><i class="icon-glass"></i><span>LinkOne</span><span class="arrow"></span></a>
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
      <iframe id="iframe" name="iframe" width="100%" height="100%" src="<?php echo U('home');?>" frameborder="0"></iframe>
    </section>
  </section>
</section>

<script src="/project/tp_boot/Public/Admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/project/tp_boot/Public/Admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/project/tp_boot/Public/Admin/js/index.js" type="text/javascript"></script>
<script>
  //我们自己的代码
</script>
</body>
</html>