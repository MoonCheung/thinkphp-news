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
  <link href="/project/tp_news/Public/Admin/bower_components/bootstrap-fileinput/css/fileinput.min.css" rel="stylesheet">
  <!-- 引入 plugin CSS的样式-->
  <link href="/project/tp_news/Public/Admin/plugin/Font-Awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- 引入自定义样式 -->
  <link href="/project/tp_news/Public/Admin/css/style.css" rel="stylesheet">
</head>
<body>
<section id="container">
  <section class="wrapper">
    <ol class="breadcrumb">
      <li><a href="<?php echo U('index/home');?>">首页</a></li>
      <li>友情管理</li>
      <li class="active">友情列表</li>
      <li class="active">编辑友情</li>
    </ol>
    <div class="row">
      <div class="col-md-12">
        <div class="panel">
          <div class="panel-heading">编辑友情</div>
          <div class="panel-body">
            <form class="form-horizontal" role="form" method="post">
              <div class="form-group">
                <label for="label" class="col-sm-2 control-label">链接标题:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control input-text" name="title" value="<?php echo ($data["title"]); ?>" placeholder="请输入标题">
                </div>
              </div>
              <div class="form-group">
                <label for="label" class="col-sm-2 control-label">链接URL:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control input-text" name="label" value="<?php echo ($data["url"]); ?>" placeholder="请输入URL">
                </div>
              </div>
              <div class="form-group">
                <label for="sort" class="col-sm-2 control-label">链接栏目:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control input-text" name="sort" value="<?php echo ($data["sort"]); ?>" placeholder="请输入排序">
                </div>
              </div>
              <div class="form-group">
                <label for="desc" class="col-sm-2 control-label">链接描述:</label>
                <div class="col-sm-8 col-md-8 col-lg-6">
                  <textarea class="form-control input-text" cols="60" rows="5" name="desc" placeholder="请输入描述"><?php echo ($data["desc"]); ?></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-5">
                  <a href="javascript:;" class="btn btn-success confirm">提交</a>
                  <a href="javascript:;" class="btn btn-danger reset">返回</a>
                </div>
              </div>
              <!--隐藏ID表单-->
              <input type="hidden" name="id" value="<?php echo ($data["id"]); ?>">
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
      window.history.go(-1);
    });


  });
//
</script>
</body>
</html>