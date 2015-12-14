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
				<h3 class="box-title">联系方式</h3>
				<p>
					地&nbsp;&nbsp;&nbsp;址：苏州市吴中区胥口镇藏胥路1193号<br />
					邮&nbsp;&nbsp;&nbsp;编：215164 <br /> 联系人：杨先生 <br />
					手&nbsp;&nbsp;&nbsp;机：18550105227 <br /> 邮&nbsp;&nbsp;&nbsp;箱：<a
						href="mailto:yang15906132104@126.com">yang15906132104@126.com</a><br />
					网&nbsp;&nbsp;&nbsp;址：<a href="http://www.xhbanjin.com/">http://www.xhbanjin.com/</a>
				</p>
			</div>
			<div class="right-side">
				<h3 class="box-title">产品详情/Product Detail</h3>
				<div class="product-big">
					<?php 
						$pic = $_REQUEST["pic"];
						$name = $_REQUEST["name"];
						if (!$pic){
							return ;
						}
						if (!$name){
							return ;
						}
						echo '<div class="product-title">'.$name.'</div>';
						echo '<img width="400px" src="images/product/'.$pic.'" alt="" />';
					?>
				</div>
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
