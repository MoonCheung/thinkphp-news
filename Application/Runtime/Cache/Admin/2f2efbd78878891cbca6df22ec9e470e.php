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
                <label for="username" class="col-sm-2 control-label">英文名称:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control input-text" name="username" placeholder="请输入用户名">
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="col-sm-2 control-label">显示中文名称:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control input-text" name="password" placeholder="请输入中文名称">
                </div>
              </div>
              <div class="form-group">
                <label for="state" class="col-sm-2 control-label">状态:</label>
                <div class="col-sm-5">
                  <label class="radio-inline" for="state">
                    <input type="radio" name="state" value="禁用">禁用
                  </label>
                  <label class="radio-inline" for="state">
                    <input type="radio" name="state" value="启用">启用
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label for="type_id" role="select" class="col-sm-2 control-label">类型:</label>
                <div class="col-sm-3">
                  <select name="role_id" class="form-control input-text">
                    <option value="0">项目</option>
                    <!--<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                      <!--&lt;!&ndash;<option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option>&ndash;&gt;-->
                    <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="parentNode" role="select" class="col-sm-2 control-label">父节点:</label>
                <div class="col-sm-3">
                  <select name="parentNode" class="form-control input-text">
                    <option value="0">根节点</option>
                    <!--<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                      <!--&lt;!&ndash;<option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option>&ndash;&gt;-->
                    <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="sort" class="col-sm-2 control-label">排序:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control input-text" name="sort" placeholder="请输入排序" id="datetimepicker1">
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