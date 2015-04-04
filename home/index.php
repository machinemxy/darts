<?php
require "../common/header.php";
require "../controller/home_controller.php";
?>
</head>
<body>
	<div data-role="page">
		<div data-role="header">
			<h1>小马飞镖</h1>
			<div data-role="navbar">
				<ul>
					<li><a href="#" class="ui-btn-active">数据</a></li>
					<li><a href="#">日记</a></li>
				</ul>
			</div>
		</div>
		<div data-role="content">
			<ul data-role="listview">
				<li data-role="list-divider" style="background-color:#FF8888">01 Game</li>
				<li><a href="#"><?php echo $zeroone; ?></a></li>
				<li data-role="list-divider" style="background-color:#77DDFF">Cricket</li>
				<li><a href="#"><?php echo $cricket; ?></a></li>
				<li data-role="list-divider" style="background-color:#66FF66">Count Up</li>
				<li><a href="#"><?php echo $countup; ?></a></li>
				<li data-role="list-divider" style="background-color:#FFFF77">Rating</li>
				<li><a href="#"><?php echo $rating; ?></a></li>
			</ul>
			<p>数据更新于<?php echo $year."年".$month."月".$day."日"; ?></p>
		</div>
		<div data-role="footer">
			<p>联系方式</p>
			<p>邮箱:machinemxy@126.com</p>
			<p>微信公众号:xiaoma_darts</p>
		</div>
	</div>
</body>
</html>