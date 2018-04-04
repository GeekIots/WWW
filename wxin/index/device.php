<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>设备 | 极客物联网</title>
  <meta charset="utf-8">
  <meta name="keywords" content="物联网">
  <!-- vue -->
  <script src="https://cdn.bootcss.com/vue/2.5.3/vue.js"></script>
  <!-- layui -->
  <link rel="stylesheet" href="/frame/layui-master/src/css/layui.css">
  <script src="/frame/layui-master/src/layui.js"></script>
  <!-- 自定义函数 -->
  <script src="/common/fun.js"></script>
</head>
<style type="text/css">
	 * { padding: 0; margin: 0; background-color: #393D49;}
        .main {
            margin-top:30%;
            margin-left:10%;
        }
        .box {
            width: 40%;
            height: 40%;
            border: 1% solid #fff;         
            background-color:#009688;
            border-radius: 3%;
            float: left;
            margin: 1.5%;
            box-shadow:0px 0px  10px 2px #c2c2c2;
        }      
        a{
            color: white;
            text-align: center;
            line-height: 380px;
            margin: 20%;
            font-size: 80px;
            font-weight: bold;
            text-shadow: 1px 1px 2px #393D49, 1px 1px 2px #393D49, 1px 1px 6px #393D49;
        }  
        a:hover{
          color: orange;
        }
</style>
<body>
	
  	 <div class="main">
          <a class="box" href="device/switch.html">开关</a>
          <a class="box" href="test">温度</a>
          <a class="box" href="test">湿度</a>
          <a class="box" href="test">位置</a>
    </div>
</body>
<script>
  setTimeout(function() {
    window.location.reload();
    console.log("load");
  }, 3000);
</script>
</html>
