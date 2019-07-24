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
<section id="#main-content">
  <section class="wrapper">
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="#">Library</a></li>
      <li><a href="#">Data</a></li>
    </ol>
    <div class="row">
      <div class="col-md-12">
        <section class="panel">
          <div class="panel-heading">Advanced Table</div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-9">
                <button type="button" class="btn btn-danger"><i class="icon-trash"></i>删除</button>
                <button type="button" class="btn btn-primary"><i class="icon-edit"></i>添加</button>
                <button type="button" class="btn btn-success"><i class="icon-repeat"></i>更新</button>
              </div>
              <div class="col-sm-3">
                <div class="form-group has-feedback">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                  <input type="text" id="search" name="search" class="form-control input-search" placeholder="搜索...">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3"><a href="javascript:;"><i class=""></i></a></div>
            <div class="col-sm-3"><a href="javascript:;"><i class=""></i></a></div>
            <div class="col-sm-3"><a href="javascript:;"><i class=""></i></a></div>
            <div class="col-sm-3"><a href="javascript:;"><i class=""></i></a></div>
          </div>
          <table class="table table-striped table-advance table-hover border-top">
            <thead class="tab-icon"><tr>
              <th><input type="checkbox"></th>
              <th><i class="icon-exchange"></i>排序</th>
              <th><i class="icon-bullhorn"></i>序号</th>
              <th><i class="icon-user"></i>栏目名称</th>
              <th><i class="icon-cogs"></i>操作</th>
            </tr></thead>
            <tbody>
              <tr>
                <td><input type="checkbox" ></td>
                <td><input type="text" class="input-text-ms"></td>
                <td>1</td>
                <td>嘎啦儿</td>
                <td>
                  <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                  <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                  <button class="btn btn-danger btn-xs"><i class="icon-trash"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
          <!--分页查询-->
          <div class="row">
            <div class="col-sm-6">
              <div class="page-left">总几条总数,显示1到25的分页</div>
            </div>
            <div class="col-sm-6">
              <div class="page-right">
                <ul class="pagination pagination-sm">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
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