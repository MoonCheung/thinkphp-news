/**
 * Created by hp-pc on 2016/12/30.
 */
$(function(){
  //sidebar dropdown menu
  $('#sidebar .sub-menu > a').click(function(){
    var last = $('.sub-menu.open',$('#sidebar'));
    last.removeClass('open');
    $('.arrow',last).removeClass('open');
    $('.sub',last).slideUp(200);
    var sub = $(this).next();
    if(sub.is(':visible')){
      $('.arrow',$(this)).removeClass('open');
      $(this).parent().removeClass('open');
      sub.slideUp(200);
    }else{
      $('.arrow',$(this)).addClass('open');
      $(this).parent().addClass('open');
      sub.slideDown(200);
    }

    // var o = ($(this).offset());
    // var diff = 1000 - o.top;
    // if(diff > 0){
    //   //scrollTo属性(xpost,ypost);方法可把内容滚动到指定的坐标。
    //   $('#sidebar').scrollTo('-='+Math.abs(diff),500);
    // }else{
    //   $('#sidebar').scrollTo('+='+Math.abs(diff),500);
    // }
  });

  //sidebar Toggle
  //sidebar移动端
  $(function(){
    function responsiveView(){
      var wSize = $(window).width();
      if(wSize <= 767){
        $("#container").addClass('sidebar-close');
        $("#sidebar > ul").hide();
      }
      if(wSize > 767){
        $("#container").removeClass('sidebar-close');
        $("#sidebar > ul").show();
      }
    }
    $(window).on('load',responsiveView());
    $(window).on('resize',responsiveView());
  });

  $('.icon-reorder').on('click',function(){
    if($('#sidebar > .sidebar-cont > ul').is(':visible')===true){
      $('#main-content').css({
        'margin-left':'0px'
      })
      $('#sidebar').css({
        'margin-left':'-180px'
      })
      $('#sidebar > .sidebar-cont > ul').hide();
      $("#container").addClass('sidebar-closed');
    }else{
      $('#main-content').css({
        'margin-left':'180px'
      })
      $('#sidebar').css({
        'margin-left':'0px'
      })
      $('#sidebar > .sidebar-cont > ul').show();
      $("#container").removeClass('sidebar-closed');
    }
  });

  //菜单栏母类--子类
  $('.sidebar-menu').on('click','li',function(e){
    e.preventDefault(); //阻止浏览器默认化
    var aurl = $(this).find('a').attr("data-src");
    $('#iframe').attr('src',aurl);
    $(this).siblings().removeClass('active');
    var hasChild = !$(this).find('.sub');
    if(hasChild){
      $(this).toggleClass('hasChild');
    }
    $(this).addClass('active');
  });
  
  
});

