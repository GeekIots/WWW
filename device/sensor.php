<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>传感器 | 极客物联网</title>
  <meta charset="utf-8">
  <meta name="keywords" content="物联网">
  <!-- vue -->
  <!-- <script src="https://cdn.bootcss.com/vue/2.5.3/vue.js"></script> -->
  <!-- layui -->
  <link rel="stylesheet" href="/frame/layui-master/src/css/layui.css">
  <link rel="stylesheet" href="/frame/layui-master/src/css/gloabal/global.css">
  <script src="/frame/layui-master/src/layui.js"></script>
  <!-- QQ登录 -->
  <script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js"></script>
  <!-- 自定义函数 -->
  <script src="/common/fun.js"></script>
  <!-- 引入 Bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

  <style type="text/css">
  
  </style>
    <style type="text/css">
      .dev_border_Top{
        border-top: 1px solid #000;
      }
      .dev_title_color{
        background: lightgray;
        padding-left: 2em;
      }
      .dev_border_Light_Right{
        border-left: 1px solid #000;
        border-right: 1px solid #000;
      }
      .dev_title{
      border:1px solid #000;
      border-left: 1px;
      }
      .first_dev_title{
      border:1px solid #000;
      }
      .dev_button{
      width: 120px;
      height: 55px;   
      border-radius: 5px;
      margin: 54px 10px 54px 5px;
      font-size: 25px;
      }
      .dev_icon{
      width: 140px;
      height: 143px;  
      border-radius: 5px;
      margin: 10px 10px 10px 10px;
      }
      .dev_info_list{
        /*width: 120px;*/
        height: 20px;
        border-radius: 5px;
        /*background-color: red;*/
        margin: 10px 10px 10px 10px;
        font-size: 16px;
        color: #696969;
      }
      .dev_border_list_B{
        border-bottom: 1px solid #000;
      }
      .dev_border_list_R{
        border-right: 1px solid #000;
      }
      .dev_border_list_BR{
        border-bottom: 1px solid #000;
        border-right: 1px solid #000;
      }
      .dev_message{
        text-align: center;
        line-height: 120px;
        font-size: 30px;
        color: orange;
        padding-top:20px;
      }
  </style>
</head>
<body>
  <?php require($_SERVER['DOCUMENT_ROOT'].'/common/header.php'); ?>
  <script id="moduel" type="text/html">
    
      <div class="container" style="padding-top: 10px;padding-bottom: 10px;">
        <!-- 温度 -->
        <blockquote class="layui-elem-quote">温度传感器</blockquote>
        {{#  layui.each(sensor.list, function(index, item){ }}
          {{# if(item.type == "temperature"){ }}
            <div style="height: 200px;margin-left: 30px;">
              <!-- 图片 -->
              <img src={{item.pic}} style="float:left;  width: 150px;height: 150px; border-radius: 15px">
              <!-- 名称 -->
              <div class="layui-bg-green" style="float: left;margin-left: 30px; text-align: center;line-height: 150px; width: 300px;height: 150px;font-size: 50px;border-radius: 30px; margin-bottom: 30px;">{{item.name}}</div>
              <!-- 数值 -->
              <div class="layui-bg-orange" style="float: left;margin-left: 30px; text-align: center; width: 300px;height: 150px;font-size: 100px;border-radius: 30px; margin-bottom: 30px;">{{item.data}}℃</div>
              <legend></legend>
            </div>
            
          {{# } }}
        {{#  }); }}     
      <!-- 湿度 -->
        <blockquote class="layui-elem-quote">湿度传感器</blockquote>
        {{#  layui.each(sensor.list, function(index, item){ }}
          {{# if(item.type == "humidity"){ }}
            <div style="height: 200px;margin-left: 30px;">
              <!-- 图片 -->
              <img src={{item.pic}} style="float:left;  width: 150px;height: 150px; border-radius: 15px">
              <!-- 名称 -->
              <div class="layui-bg-green" style="float: left;margin-left: 30px; text-align: center;line-height: 150px; width: 300px;height: 150px;font-size: 50px;border-radius: 30px; margin-bottom: 30px;">{{item.name}}</div>
              <!-- 数值 -->
              <div class="layui-bg-red" style="float: left;margin-left: 30px; text-align: center; width: 300px;height: 150px;font-size: 100px;border-radius: 30px; margin-bottom: 30px;">{{item.data}}%</div>
              <legend></legend>
            </div>
            
          {{# } }}
        {{#  }); }} 
      <!-- pm2.5 -->
        <blockquote class="layui-elem-quote">空气质量</blockquote>
        {{#  layui.each(sensor.list, function(index, item){ }}
          {{# if(item.type == "pm2.5"){ }}
            <div style="height: 200px;margin-left: 30px;">
              <!-- 图片 -->
              <img src={{item.pic}} style="float:left;  width: 150px;height: 150px; border-radius: 15px">
              <!-- 名称 -->
              <div class="layui-bg-green" style="float: left;margin-left: 30px; text-align: center;line-height: 150px; width: 300px;height: 150px;font-size: 50px;border-radius: 30px; margin-bottom: 30px;">{{item.name}}</div>
              <!-- 数值 -->
              <div class="layui-bg-blue" style="float: left;margin-left: 30px; text-align: center; width: 300px;height: 150px;font-size: 100px;border-radius: 30px; margin-bottom: 30px;">{{item.data}}</div>
              <legend></legend>
            </div>
            
          {{# } }}
        {{#  }); }}
      <!-- 位置 -->
        {{#  layui.each(sensor.list, function(index, item){ }}
          {{# if(item.type == "gps"){ }}
            <blockquote class="layui-elem-quote">{{item.name}}</blockquote>
            <button class="layui-btn layui-btn-normal" style="width: 1000px;height: 150px;font-size: 60px;border-radius: 30px;margin-bottom: 30px;">{{item.data}}</button>
              <legend></legend>
          {{# } }}
        {{#  }); }}
      </div>
 
  </script>
  <!-- 建立视图。用于呈现模板渲染结果。 -->
  <div id="view"></div>
   <!-- <div id="allmap"></div> -->
  <div style="padding-top: 20px"></div>
  <?php include($_SERVER['DOCUMENT_ROOT'].'/common/footer.php') ?>
</body>
</html> 
<script>
  //传感器
  var sensor;
  
  layui.use(['layer','laydate','laypage','laytpl','layedit','form','upload','tree','table','element','util','flow','carousel','code','jquery'], function(){
      var layer,laydate,laypage,laytpl,layim,layedit,form,upload,tree,table,element,util,flow,carousel,code,$,mobile;
      layer = layui.layer;
      laydate = layui.laydate;
      laypage = layui.laypage;
      laytpl = layui.laytpl;
      layedit = layui.layedit;
      form = layui.form;
      upload = layui.upload;
      tree = layui.tree;
      table = layui.table;
      element = layui.element;
      util = layui.util;
      flow = layui.flow;
      carousel = layui.carousel;
      code = layui.code;
      $  = layui.jquery;
      if (user.login=='false') {
     //公告层
      layer.open({
        type: 1
        ,title: false //不显示标题栏
        ,closeBtn: false
        ,area: '300px;'
        ,shade: 0.8
        ,id: 'LAY_layuipro' //设定一个id，防止重复弹出
        ,btn: ['前去登陆', '看看再说']
        ,btnAlign: 'c'
        ,moveType: 1 //拖拽模式，0或者1
        ,content: '<div style="padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 400;">亲,进入设备控制需要登陆哦！</div>'
        ,success: function(layero){
          var btn = layero.find('.layui-layer-btn');
          btn.find('.layui-layer-btn0').attr({
            href: '/user/login.php'
            ,target: '_blank'
          });
          btn.find('.layui-layer-btn1').attr({
            href: '/index.php'
          });
        }
      });
    }
    else
    {
      // 获取列表
      $.ajax({
        type:'GET',
        async: false, //同步
        url: "/api/device/device.php",
        data:{"device":'sensor',"type":'getlist',"userid":user.userid},
        success: function (res) {
          sensor  = res;
          console.log('sensor:',res);

        },
        error:function (res) {
          console.log('fail:',res);
        }
      });

      //渲染数据
      var getTpl = moduel.innerHTML;
      var view = document.getElementById('view');
      laytpl(getTpl).render(sensor, function(html){
        view.innerHTML = html;
      });
    } 
  }); 
</script>