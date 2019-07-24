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
<section id="#main-content">
  <section class="wrapper">
    <ol class="breadcrumb">
      <li><a href="<?php echo U('index/home');?>">首页</a></li>
      <li>栏目管理</li>
      <li class="active">新闻栏目</li>
    </ol>
    <div class="row">
      <div class="col-md-12">
        <section class="panel">
          <div class="panel-heading">新闻栏目</div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-9 btn-group btn-crud">
                <a class="btn btn-danger btn-all-del" href="javascript:;"><i class="icon-trash"></i>删除</a>
                <a class="btn btn-primary" href="/tp_news/index.php/Admin/NewSort/addNew.html"><i class="icon-edit"></i>添加</a>
              </div>
              <div class="col-sm-3">
                <div class="form-group has-feedback">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                  <input type="text" id="search" class="form-control input-search" placeholder="搜索...">
                </div>
              </div>
            </div>
          </div>
          <table class="table table-striped table-advance table-hover border-top">
            <thead class="tab-icon"><tr>
              <th><input type="checkbox" id="select_all" value="0"></th>
              <th><i class="icon-list-ol"></i>序号</th>
              <th><i class="glyphicon glyphicon-sort"></i>排序</th>
              <th><i class="icon-user"></i>栏目名称</th>
              <th><i class="icon-cogs"></i>操作</th>
            </tr></thead>
            <tbody>
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td><input type="checkbox" value="<?php echo ($vo["id"]); ?>" name="select_item"></td>
                <td><?php echo ($vo["id"]); ?></td>
                <td><?php echo ($vo["sort"]); ?></td>
                <td><?php echo ($vo["catename"]); ?></td>
                <td>
                  <a class="btn btn-success btn-xs" href=""><i class="icon-ok"></i></a>
                  <a class="btn btn-primary btn-xs" href="/tp_news/index.php/Admin/NewSort/newEdit/id/<?php echo ($vo["id"]); ?>.html"><i class="icon-pencil"></i></a>
                  <a class="btn btn-danger btn-xs btn-close" href="javascript:;"><i class="icon-trash"></i></a>
                </td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
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

<script src="/tp_news/Public/Admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/tp_news/Public/Admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/tp_news/Public/Admin/plugin/layer/layer.js"></script>
<script src="/tp_news/Public/Admin/js/index.js" type="text/javascript"></script>
<script>
  //我们自己的代码
  $(function(){
    $('.btn-close').on('click',function(){
      var id = $(':checkbox:checked')[0].value;
      //信息框-例2
      layer.confirm('您确定删除吗?', {
        time: 0 //不自动关闭
        ,btn: ['确定', '取消']
        ,yes: function(index){
          layer.close(index);
          window.location.href = "/tp_news/index.php/Admin/NewSort/newDel/id/"+id;
        }
      });
    });
    $(".btn-all-del").on('click',function(){
      //单个选中
      var chek = $(':checkbox:checked');
      var id = "";
      for(var i=0;i<chek.length;i++){
        id += chek[i].value+",";
      }
      id = id.substring(2,id.length-1);
      //信息框-例2
      layer.confirm('您确定删除吗?', {
        time: 0 //不自动关闭
        ,btn: ['确定', '取消']
        ,yes: function(index){
          layer.close(index);
          window.location.href = "/tp_news/index.php/Admin/NewSort/newDel/id/"+id;
        }
      });

    });

    //全选or反选
    $("#select_all").click(function(){
      var checkboxs = document.getElementsByName('select_item');
      var id = "";
      for(var i=0;i<checkboxs.length;i++){
        var checkbox = checkboxs[i];
        if(!$(this).get(0).checked){
          checkbox.checked = false;
          id += checkbox.value + ",";
        }else{
          checkbox.checked = true;
          id += checkbox.value + ",";
        }
      }
      //为idAll最后句话清除
      id = id.substring(0,id.length-1);
    });

  });



</script>
</body>
</html>