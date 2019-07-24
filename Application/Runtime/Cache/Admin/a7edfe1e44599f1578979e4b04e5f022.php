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
  <link href="/tp_news/Public/Admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- 引入 plugin CSS的样式-->
  <link href="/tp_news/Public/Admin/plugin/Font-Awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- 引入自定义样式 -->
  <link href="/tp_news/Public/Admin/css/style.css" rel="stylesheet">
</head>
<body>
<section id="container">
  <section class="wrapper">
    <ol class="breadcrumb">
      <li><a href="<?php echo U('index/home');?>">首页</a></li>
      <li>会员管理</li>
      <li>权限管理</li>
      <li class="active">添加权限</li>
    </ol>
    <div class="row">
      <div class="col-md-12">
        <div class="panel">
          <div class="panel-heading">添加权限</div>
          <div class="panel-body">
            <form class="form-horizontal" role="form" method="post">
              <div class="form-group">
                <label for="title" class="col-sm-2 control-label">权限名称:</label>
                <div class="col-sm-5">
                  <input type="hidden" name="id" value="0">
                  <input type="text" class="form-control input-text" name="title" placeholder="请输入权限名">
                </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">权限:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control input-text" name="name" placeholder="请输入权限">
                  <span class="text-warning">输入模块/控制器/方法即可 例如 Admin/Rule/index</span>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-5">
                  <a href="javascript:;" class="btn btn-success confirm">提交</a>
                  <a href="javascript:;" class="btn btn-danger reset">返回</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>

<script src="/tp_news/Public/Admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/tp_news/Public/Admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/tp_news/Public/Admin/js/index.js" type="text/javascript"></script>
<script>
  //我们自己的代码
  $(function(){
    $('.confirm').on('click',function(){
      $('form').submit();
    });
    $('.reset').on('click',function(){
      window.history.go(-1);
    });
  });
</script>
</body>
</html>