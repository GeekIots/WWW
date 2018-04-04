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
	 * { padding: 0; margin: 0; }
        .main {
             
            background-color: #fff;
            width: 100%;
            padding-bottom: 100%;
            padding-left: 0.5%;
    	　　 padding-top: 0.5%;
        }
        .main>div {
            width: 31%;
            padding-bottom: 31%;
            border: 1% solid #fff;         
            background-color: mediumpurple;
            border-radius: 3%;
            float: left;
            margin: 1%;
        }        
</style>
<body>
	
  	 <div class="main">
        <div class="box1">
          <a href="test">测试页面</a>
        </div>
        <div class="box2"></div>
        <div class="box3"></div>
        <div class="box4"></div>
        <div class="box5"></div>
        <div class="box6"></div>
        <div class="box7"></div>
        <div class="box8"></div>
        <div class="box9"></div>
    </div>
</body>
<script>
  setTimeout(function() {
    window.location.reload();
    console.log("load");
  }, 3000);
</script>
</html>
