<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"
	content="苏州枭航精密钣金有限公司、苏州枭航精密钣金、枭航精密钣金、枭航钣金、枭航精密钣金有限公司" />
<meta name="description"
	content="苏州枭航精密钣金有限公司是一家致力于精密钣金设计、生产的加工型企业，位于风景秀丽的穹窿山国家森林公园旁，环境优美，交通便利。主要产品有：钣金配件、金属箱（柜）、通讯机柜、纺织机械钣金件、医疗仪器钣金件、激光仪器钣金件等。
" />
<meta name="author" content="chenglong yang" />
<meta name="author" content="laurel" />
<title>苏州枭航精密钣金有限公司</title>
<link rel="stylesheet" type="text/css" href="css/global.css" />
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
	$(function() {
		//获取产品列表的总长度
		var width = parseInt($(".product-list").css("width"));
		//设置点击事件
		$("#left-arrow").click(function() {
			//获取当前的css属性left的值
			var currentLeftValue = parseInt($(".product-list").css("left"));
			//alert(Math.abs(currentLeftValue));
			//如果当前left的绝对值小于等于总长度，则向左移动；右移事件同理。
			if (Math.abs(currentLeftValue) <= width) {
				var leftValue = currentLeftValue + 180;
				$(".product-list").stop().animate({
					left : leftValue + 'px'
				}, 600);
			}
		});
		$("#right-arrow").click(function() {
			var currentLeftValue = parseInt($(".product-list").css("left"));
			//alert(currentLeftValue);
			if (Math.abs(currentLeftValue) <= width) {
				var leftValue = currentLeftValue - 180;
				$(".product-list").stop().animate({
					left : leftValue + 'px'
				}, 600);
			}
		});
	})
</script>
</head>

<body>
	<div class="container">
		<!-- logo区 -->
		<div class="logo">
			<img height="100%" src="images/logo.png" alt="苏州枭航精密钣金有限公司" />
			<div class="hotline">
				<img height="100%" src="images/hotline.png" alt="苏州枭航精密钣金有限公司" />
			</div>
		</div>
		<!-- 导航区 -->
		<div class="nav-wrapper">
			<ul class="nav">
				<li class="item"><a href="index.html">首页</a></li>
				<li class="item"><a href="company.html">公司简介</a></li>
				<li class="item"><a href="news.php">新闻动态</a></li>
				<li class="item"><a href="product.html">产品展示</a></li>
				<li class="item"><a href="#">客户留言</a></li>
				<li class="item"><a href="contact.html">联系我们</a></li>
			</ul>
		</div>
		<!-- 轮播图片区 -->
		<div class="pic">
			<img width="1000px" height="300px" src="images/image01.png"
				alt="苏州枭航精密钣金有限公司" />
		</div>
		<!-- 内容区 -->
		<div class="content">
			<div class="left-side">
				<h3 class="box-title">新闻动态/News</h3>
				<ul>
					<li class="news-item"><a href="newsInfo.php?id=1">钣金加工的广泛应用</a></li>
					<li class="news-item"><a href="newsInfo.php?id=2">苏州钣金工艺</a></li>
					<li class="news-item"><a href="newsInfo.php?id=3">钣金加工技术发展趋势——智能化</a></li>
				</ul>
			</div>
			<div class="right-side">
				<h3 class="box-title">新闻详情/News Content</h3>
			<?php 
				$id = $_REQUEST["id"];
				if (!$id){
					return;
				}
				$conn = mysql_connect("qdm123557659.my3w.com","qdm123557659","ycl123456") or die("数据库连接失败！".mysql_error());
				mysql_select_db("qdm123557659_db",$conn);
				mysql_query("SET NAMES UTF8");
				$sql = "select name,content,date from news where id=".$id;
				$res = mysql_query($sql,$conn);
				$row = mysql_fetch_row($res);
				echo '<h2 class="news-title">'.$row[0].'</h2>'.'<div class="news-time">'.$row[2].'</div>'.'<div class="news-content">'.$row[1].'</div>';
				//释放资源
				mysql_free_result($res);
				//关闭连接
				mysql_close($conn);
			?>
			</div>
		</div>
	</div>
	<!-- 页脚区 -->
	<div class="footer">
		<p>CopyRight©2015 苏州枭航精密钣金有限公司 版权所有</p>
		<p>地址：苏州市吴中区胥口镇藏胥路1193号 邮编：215164 服务热线：18550105227</p>
		<p>技术支持：chenglong yang</p>
	</div>
</body>
</html>
