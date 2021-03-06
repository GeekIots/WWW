<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>更新传感器 | 极客物联网</title>
  <meta charset="utf-8">
  <meta name="keywords" content="物联网">
  <!-- vue -->
  <script src="https://cdn.bootcss.com/vue/2.5.3/vue.js"></script>
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
</head>
<body>
  <?php require($_SERVER['DOCUMENT_ROOT'].'/common/header.php'); ?>
  <div>
    <form style="padding: 10% 15% 5%;" class="form-horizontal">
        <script id="moduel" type="text/html">

        <div class="form-group" align="center">
            <img src="{{d.pic}}" id="pic-show" style="width: 150px;height: 150px;border-radius: 10px;" onerror="javascript:this.src='/image/default/error.jpg';">
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">名称:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="name" value="{{d.name}}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">传感器类型:</label>
            <div class="col-sm-6">
                <select class="form-control" id="select1">
                    <option value ="temperature">温度 ℃</option>
                    <option value ="humidity">湿度 RH</option>
                    <option value="pm2.5">PM2.5</option>
                    <option value="gps">GPS位置</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-10">
                <div class="btn btn-default" id="btn-update-pic">更换图片</div>
                <div class="btn btn-default" id="btn-update">提交</div>
                <a class="btn btn-default" href="/device/management.php">取消</a>
            </div>
        </div>
      </script>
    <!-- 建立视图。用于呈现模板渲染结果。 -->
    <div id="view"></div>
    </form>
  <?php include($_SERVER['DOCUMENT_ROOT'].'/common/footer.php') ?>
  </body>
</html>

<script type="text/javascript">
  var _id = getUrlParam('id');
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
      //获取传感器信息
    $.ajax({
      url: "/api/device/get.sensor.php",
      async: false,
      type:"GET",
      data:{"id":_id},
      success: function (res) {
      console.log('success:',res);
      // 显示成功，用户确认后跳转
      if (res.resault=='success') {
        // 渲染页面
        var getTpl = moduel.innerHTML;
        var view = document.getElementById('view');
        laytpl(getTpl).render(res, function(html){
          view.innerHTML = html;
        });
        console.log($("#select1"));
        var province_2 = res.type;
        $("#select1   option[value='"+province_2+"']").attr("selected",true);
      }
      else{
          // 显示错误信息
          layer.msg('拉取数据失败!'+res.msg, {
                time: 20000, //20s后自动关闭
                btn: ['知道了']
                ,yes: function(){
                  layer.closeAll();
                }
              });
        }
      },
      error:function (res) {
      console.log('fail:',res);
      }
    });

    //所有的button引起的变化
    $("#btn-update").bind("click",function(){
      var name = $("#name").val();
      var pic = $("#pic-show")[0].src;
      var type = $("#select1").val();

      //打印引起事件的标签信息
      console.log('click:', this);
      // 发送指令并等待响应
      $.ajax({
        url: "/api/device/update.sensor.php",
        async: true,
        type:"GET",
        data:{"userid":user.userid,"id":_id,"name":name,"type":type,"pic":pic},
        success: function (res) {
          console.log('success:',res);
          // 显示成功，用户确认后跳转
          if (res.resault=='success') {
                layer.msg('更新成功！', {
                time: 5000, //5s后自动关闭
                btn: ['好的']
                ,yes: function(){
                  // 跳转回原来页面
                  location.href = '/device/management.php';  
                }
              });
          }
          else{
              // 显示错误信息
              layer.msg('Sorroy,更新失败!'+res.msg, {
                    time: 20000, //20s后自动关闭
                    btn: ['知道了']
                    ,yes: function(){
                      layer.closeAll();
                    }
                  });
            }
        },
        error:function (res) {
          console.log('fail:',res);
        }
      });
    }); 

    // 更新图片
    upload.render({
      elem: '#btn-update-pic' //绑定元素
      ,method:'POST'
      ,async:true
      ,data:{type:'sensor',userid:user.userid,sensorid:_id,'size':200}
      ,url: '/api/upload/upload.img.php' //上传接口
      ,before : function(){
        //执行上传前的回调  可以判断文件后缀等等
        layer.msg('上传中，请稍后......', {icon:16, shade:0.5, time:0});
      }
      ,done: function(res){
        //上传完毕回调
        console.log(res);
        if(res.code != 0){
        layer.msg(res.msg, {icon:2, shade:0.5, time:res.time});
      }
      else{
            layer_msg("更新图片成功！",4);
            layui.jquery('#pic-show').attr("src", res.msg);
        }
      }
      ,error: function(res){
        //请求异常回调
        console.log(res);
      }
    });
  });
</script>




