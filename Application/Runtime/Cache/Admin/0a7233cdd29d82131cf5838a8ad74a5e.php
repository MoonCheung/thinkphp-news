<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="box-html">
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
  <link href="/project/tp_news/Public/Admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- 引入 plugin CSS的样式-->
  <link href="/project/tp_news/Public/Admin/plugin/Font-Awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- 引入自定义样式 -->
  <link href="/project/tp_news/Public/Admin/css/style.css" rel="stylesheet">
</head>
<body>
<section id="container">
  <section class="wrapper">
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="#">Library</a></li>
      <li><a href="#">Data</a></li>
    </ol>
    <div class="row">
      <div class="col-md-12">
        <div class="panel">
          <div class="panel-heading">Form Elements</div>
          <div class="panel-body">
            <form class="form-horizontal" role="form" method="post">
              <div class="form-group">
                <label for="rolename" class="col-sm-2 control-label">角色名称:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control input-text" name="rolename" placeholder="请输入用户">
                </div>
              </div>
              <div class="form-group">
                <label for="roledesc" class="col-sm-2 control-label">角色描述:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control input-text" name="password" placeholder="请输入描述">
                </div>
              </div>
              <div class="form-group">
                <label for="isopen" class="col-sm-2 control-label">是否开启:</label>
                <div class="col-sm-5">
                  <label class="radio-inline" for="isopen">
                    <input type="radio" name="open" value="关闭">关闭
                  </label>
                  <label class="radio-inline" for="isopen">
                    <input type="radio" name="open" value="开启">开启
                  </label>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-5">
                  <a href="javascript:;" class="btn btn-success confirm">提交</a>
                  <a href="javascript:;" class="btn btn-danger reset">重置</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>

<script src="/project/tp_news/Public/Admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/project/tp_news/Public/Admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/project/tp_news/Public/Admin/js/index.js" type="text/javascript"></script>
<script>
  //我们自己的代码
  $(function(){
    $('.confirm').on('click',function(){
      $('form').submit();
    });
    $('.reset').on('click',function(){
      $('form')[0].reset();
    });
  });
</script>
</body>
</html>