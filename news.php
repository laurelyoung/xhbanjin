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
				<p>
					地&nbsp;&nbsp;&nbsp;址：苏州市吴中区胥口镇藏胥路1193号<br />
					邮&nbsp;&nbsp;&nbsp;编：215164 <br /> 联系人：杨先生 <br />
					手&nbsp;&nbsp;&nbsp;机：18550105227 <br /> 邮&nbsp;&nbsp;&nbsp;箱：<a
						href="mailto:yang15906132104@126.com">yang15906132104@126.com</a><br />
					网&nbsp;&nbsp;&nbsp;址：<a href="http://www.xhbanjin.com/">http://www.xhbanjin.com/</a>
				</p>
			</div>
			<div class="right-side">
				<h3 class="box-title">新闻详情/News Content</h3>
			<?php
				$conn = mysql_connect("qdm123557659.my3w.com","qdm123557659","ycl123456") or die("数据库连接失败！".mysql_error());
				mysql_select_db("qdm123557659_db",$conn);
				mysql_query("SET NAMES UTF8");
				$sql = "select id,name,date from news";
				$res = mysql_query($sql,$conn);
				echo "<ul>";
				while($row = mysql_fetch_row($res)){
					echo '<li class="news-item"><a href="newsInfo.php?id='.$row[0].'">'.$row[1].'</a><span class="news-date">'.$row[2].'</span></li>';
				}
				echo "</ul>";
				//释放资源
				mysql_free_result($res);
				//关闭连接
				mysql_close($conn);
			?>
			</div>
		</div>
	</div>

	<?php
	require_once('includes/footer.php');
	?>
</body>
</html>
