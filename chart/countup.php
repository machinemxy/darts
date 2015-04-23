<?php require "../common/header.php"; ?>
</head>
<body>
	<div data-role="page">
		<div data-role="header">
			<a href="#" data-rel="back" data-icon="arrow-l" data-iconpos="notext"></a>
			<h1>小马飞镖</h1>
		</div>
		<div data-role="content">
			<ul data-role="listview">
				<li data-role="list-divider" style="background-color:#66FF66">Count Up</li>
			</ul>
			<p>最近</p>
			<p><img width="100%" src="../controller/chart_controller.php?spanType=1&gameType=1"/></p>
			<p>每月</p>
			<p><img width="100%" src="../controller/chart_controller.php?spanType=2&gameType=1"/></p>
		</div>
<?php require "../common/footer.php"; ?>