<script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="101435544" data-redirecturi=""http://www.geek-iot.com/user/qq/qc_back.php" charset="utf-8"></script>


<!DOCTYPE html>
<html>
<head>
	<title>qq登录测试</title>
</head>
<body>
<div id="qqLoginBtn" style="size: 100px;"></div>
</body>
</html>

<script type="text/javascript">
	//调用QC.Login方法，指定btnId参数将按钮绑定在容器节点中 
	QC.Login({ 
		//btnId：插入按钮的节点id，必选 
		btnId:"qqLoginBtn", 
		//用户需要确认的scope授权项，可选，默认all 
		scope:"all", 
		//按钮尺寸，可用值[A_XL| A_L| A_M| A_S| B_M| B_S| C_S]，可选，默认B_S 
		size: "B_M"
	}, function(reqData, opts){//登录成功 
		console.log(reqData, opts); 
		//根据返回数据，更换按钮显示状态方法 
		var dom = document.getElementById(opts['btnId']), 
		_logoutTemplate=[ 
		//头像 
		'<span><img src="{figureurl}" class="{size_key}"/></span>', 
		//昵称 
		'<span>{nickname}</span>', 
		//退出 
		'<span><a href="javascript:QC.Login.signOut();" rel="external nofollow" >退出</a></span>'
		].join(""); 
		dom && (dom.innerHTML = QC.String.format(_logoutTemplate, { 
			nickname : QC.String.escHTML(reqData.nickname), //做xss过滤 
			figureurl : reqData.figureurl 
		})); 
	}, function(opts){//注销成功 
		alert('QQ登录 注销成功'); 
	}); 
</script>