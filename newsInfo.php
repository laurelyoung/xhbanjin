<?php
require_once('includes/header.php');
?>

<body>
	<div class="container">
		<?php
		require_once('includes/top.php');
		?>

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

	<!-- 页面底部区域 START -->
	<?php
	require_once('includes/footer.php');
	?>
	<!-- 页面底部区域 END -->
</body>
</html>
