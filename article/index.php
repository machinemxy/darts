<?php require "../common/header.php"; ?>
<?php require "article_proccess.php"; ?>
</head>
<body>
	<div data-role="page">
		<div data-role="header">
			<h1>小马飞镖</h1>
			<div data-role="navbar">
				<ul>
					<li><a href="../home/index.php" rel="external">数据</a></li>
					<li><a href="#" class="ui-btn-active">日记</a></li>
				</ul>
			</div>
		</div>
		<div data-role="content">
			<ul data-role="listview">
<?php foreach($articles as $article){ ?>
				<li>
					<a href="<?php echo $article['url']; ?>" rel="external">
						<h1><?php echo $article["title"]; ?></h1>
						<p><?php echo $article["date"]; ?></p></li>
					</a>
				</li>
<?php } ?>
			</ul>
		</div>
<?php require "../common/footer.php"; ?>