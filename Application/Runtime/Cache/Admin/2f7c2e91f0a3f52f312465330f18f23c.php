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
      <li><a href="<?php echo U('index/home');?>">首页</a></li>
      <li>新闻管理</li>
      <li>文章列表</li>
      <li class="active">添加文章</li>
    </ol>
    <div class="row">
      <div class="col-md-12">
        <div class="panel">
          <div class="panel-heading">添加文章</div>
          <div class="panel-body">
            <form action="/project/tp_news/index.php/Admin/Article/addArti" class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
              <div class="form-group">
                <label for="title" class="col-sm-2 control-label">文章标题:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control input-text" name="title" placeholder="请输入文章标题">
                </div>
              </div>
              <div class="form-group">
                <label for="picture" class="col-sm-2 control-label">附件:</label>
                <div class="col-sm-5">
                  <input type="file" name="picture" class="input-file">
                </div>
              </div>
              <div class="form-group">
                <label for="cateid" role="select" class="col-sm-2 control-label">文章栏目:</label>
                <div class="col-sm-3">
                  <select name="cateid" class="form-control input-text">
                    <option value="0">请选择栏目</option>
                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["catename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="author" class="col-sm-2 control-label">文章作者:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control input-text" name="author" placeholder="请输入作者">
                </div>
              </div>
              <div class="form-group">
                <label for="desc" class="col-sm-2 control-label">文章描述:</label>
                <div class="col-sm-8 col-md-7 col-lg-5">
                  <textarea class="form-control input-text" name="desc" cols="60" rows="5" placeholder="请输入描述"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="content" class="col-sm-2 control-label">文章内容:</label>
                <div class="col-sm-8">
                  <textarea id="editor" name="content"></textarea>
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
<script src="/project/tp_news/Public/Admin/plugin/utf8-php/ueditor.config.js"></script>
<script src="/project/tp_news/Public/Admin/plugin/utf8-php/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script src="/project/tp_news/Public/Admin/plugin/utf8-php/lang/zh-cn/zh-cn.js"></script>
<script src="/project/tp_news/Public/Admin/js/index.js" type="text/javascript"></script>
<script>
  //我们自己的代码
  $(function(){
    //提交表单按钮
    $(".confirm").on('click',function(){
      $('form').submit();
    });
    $(".reset").on('click',function(){
      $('form')[0].reset();
    });
  });
  //实例化编辑器
  //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
  var ue = UE.getEditor('editor',{
    initialFrameWidth:700,
    initialFrameHeight:200,
    autoHeightEnabled: false
  });
</script>
</body>
</html>