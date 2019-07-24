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
                <label for="username" class="col-sm-2 control-label">管理组:</label>
                <div class="col-sm-5">
                  <?php if(is_array($manage)): foreach($manage as $key=>$v): echo ($v['title']); ?>
                    <input type="checkbox" name="group_ids[]" value="<?php echo ($v['id']); ?>">
                    &emsp;<?php endforeach; endif; ?>
                </div>
              </div>
              <div class="form-group">
                <label for="username" class="col-sm-2 control-label">用户名:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control input-text" name="username" placeholder="请输入用户名">
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="col-sm-2 control-label">密码名:</label>
                <div class="col-sm-5">
                  <input type="password" class="form-control input-text" name="password" placeholder="请输入密码名">
                </div>
              </div>
              <div class="form-group">
                <label for="nickname" class="col-sm-2 control-label">姓名:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control input-text" name="nickname" placeholder="请输入姓名">
                </div>
              </div>
              <div class="form-group">
                <label for="role_id" role="select" class="col-sm-2 control-label">所属部门:</label>
                <div class="col-sm-3">
                  <select name="role_id" class="form-control input-text">
                    <option value="0">请选择部门</option>
                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="sex" class="col-sm-2 control-label">性别:</label>
                <div class="col-sm-5">
                  <label class="radio-inline" for="sex">
                    <input type="radio" name="sex" value="男">男
                  </label>
                  <label class="radio-inline" for="sex">
                    <input type="radio" name="sex" value="女">女
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label for="birth" class="col-sm-2 control-label">生日:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control input-text" name="birth" placeholder="请输入生日" id="datetimepicker1">
                </div>
              </div>
              <div class="form-group">
                <label for="phone" class="col-sm-2 control-label">联系方式:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control input-text" name="phone" placeholder="请输入电话">
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">邮箱:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control input-text" name="email" placeholder="请输入邮箱">
                </div>
              </div>
              <div class="form-group">
                <label for="remark" class="col-sm-2 control-label">备注:</label>
                <div class="col-sm-5">
                  <textarea class="form-control input-text" cols="60" rows="5" name="remark" placeholder="请输入内容"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="lock" class="col-sm-2 control-label">状态:</label>
                <div class="col-sm-5">
                  <label class="radio-inline" for="lock">
                    <input type="radio" name="lock" value="1" checked="checked">允许登录
                  </label>
                  <label class="radio-inline" for="lock">
                    <input type="radio" name="lock" value="0">禁止登录
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