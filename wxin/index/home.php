<?php 
//重定向浏览器 
header("Location: https://geek-iot.com"); 

?>  

<!-- <!DOCTYPE html>
<html>
<head>
	<title>极客物联网 | 首页</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
	<h1>这是首页</h1>
	<a href="/wxin/device/temperature/index.html?data=12">温度</a>
</body>
</html> -->
<html>	
<meta charset="utf-8" />
 <title>Pull to Refresh</title>
 <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />
 <style>
 div{
     position: absolute;
     top:0px;
     bottom:0px;
     width:100%;
     left:0px;
     overflow: hidden;
 }
 li{
     list-style-type: none;
     height:35px;
     background: #ccc;
     border-bottom: solid 1px #fff;
     text-align: left;
     line-height: 35px;
     padding-left:15px;
 }
 ul{
     width:100%;
     margin-top:0px;
     position: absolute;
     left:0px;
     padding:0px;
     top:0px;
     height: 100%;
     background-color: red;
 }
 </style>
 <a href="/">极客物联网</a>
 <div class="outerScroller">
     <ul class = 'scroll'>
       <!--   <li>1</li>
         <li>2</li>
         <li>3</li> -->
     </ul>
 </div>
 <script>
    var scroll = document.querySelector('.scroll');
    var outerScroller = document.querySelector('.outerScroller');
    var touchStart = 0;
    var touchDis = 0;
    outerScroller.addEventListener('touchstart', function(event) { 
         var touch = event.targetTouches[0]; 
         // 把元素放在手指所在的位置 
           touchStart = touch.pageY; 
            console.log(touchStart);
         }, false);
    outerScroller.addEventListener('touchmove', function(event) { 
         var touch = event.targetTouches[0]; 
         console.log(touch.pageY + 'px');  
         scroll.style.top = scroll.offsetTop + touch.pageY-touchStart + 'px';
         console.log(scroll.style.top);
         touchStart = touch.pageY;
         touchDis = touch.pageY-touchStart;
         }, false);
    outerScroller.addEventListener('touchend', function(event) { 
         touchStart = 0;
         var top = scroll.offsetTop;
         console.log(top);
         // if(top>70){alert('下拉');};
         // if(top>0){
         //     // var time = setInterval(function(){
         //     //   scroll.style.top = scroll.offsetTop -2+'px';
         //     //   if(scroll.offsetTop<=0)clearInterval(time);
         //     // },1)
         //     alert('上拉');
         //     //this.reload();
         // }
        scroll.style.top = 0;
     }, false);
    function refresh(){
    	//this.reload();
     // for(var i = 1;i>0;i--)
     //     {
     //         var node = document.createElement("li");
     //         node.innerHTML = "I'm new";
     //         scroll.insertBefore(node,scroll.firstChild);
     //     }
    }
 </script>
</html>