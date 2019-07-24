<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>登录</title>
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
<body class="login-body">
<div class="container">
  <form class="form-signin" method="post">
    <h2 class="form-signin-heading">SIGN IN NOW</h2>
    <div class="login-wrap">
      <div class="form-group has-feedback">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <input type="text" class="form-control" name="username" placeholder="用户名:">
      </div>
      <div class="form-group has-feedback">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <input type="password" class="form-control" name="password" placeholder="密码名:">
      </div>
      <div class="form-group">
        <div class="input-group">
          <input type="text" class="form-control last-input" name="myverify" placeholder="验证码:">
          <div class="input-group-addon last-verify"><img src="/tp_news/index.php/Admin/Login/verify" onclick="this.src='/tp_news/index.php/Admin/Login/verify/'+Math.random()" alt="验证图" /></div> <!--验证图-->
        </div>
      </div>
      <div class="form-group">
        <label class="checkbox">
          <input type="checkbox" />&nbsp;&nbsp;&nbsp;&nbsp;记住我
          <span  class="pull-right"><a href="javascript:;">忘记密码?</a></span>
        </label>
      </div>
      <button type="button" class="btn btn-lg btn-block btn-login">登录</button>
    </div>
  </form>
</div>
<script src="/tp_news/Public/Admin/bower_components/jquery/dist/jquery.min.js"></script>
<script>
  //我们自己的代码
  $('.btn-login').on('click',function(){
    $('form').submit();
  });
</script>
</body>
</html>