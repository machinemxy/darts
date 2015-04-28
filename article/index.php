<?php require "../common/header.php"; ?>
<?php require "article_proccess.php"; ?>
</head>
<body>
	<div data-role="page">
		<div data-role="header">
			<h1>小马飞镖</h1>
			<a href="insert.php" rel="external" data-icon="plus" data-iconpos="notext" class="ui-btn-right"></a>
			<div data-role="navbar">
				<ul>
					<li><a href="../home/index.php" rel="external">数据</a></li>
					<li><a href="#" class="ui-btn-active">日记</a></li>
				</ul>
			</div>
		</div>
		<div data-role="content">
			<ul data-role="listview" data-split-icon="delete">
<?php foreach($articles as $article){ ?>
				<li>
					<a href="<?php echo $article['url']; ?>" rel="external">
						<h1><?php echo $article["title"]; ?></h1>
						<p><?php echo $article["date"]; ?></p>
					</a>
					<a href="delete_comfirm.php?id=<?php echo $article['id']; ?>" rel="external"></a>
				</li>
<?php } ?>
			</ul>
<?php
	echo "<p>".$page."/".$totalPage."</p>";
?>
	<div data-role="controlgroup" data-type="horizontal">
<?php
if($page==1){
?>
		<a href="#" data-role="button" rel="external" style="color:grey;">首页</a>
		<a href="#" data-role="button" rel="external" style="color:grey;">上一页</a>
<?php
}else{
?>
		<a href="index.php?page=1" data-role="button" rel="external">首页</a>
		<a href="index.php?page=<?php echo $page-1; ?>" data-role="button" rel="external">上一页</a>
<?php
}
if($page==$totalPage){
?>
		<a href="#" data-role="button" rel="external" style="color:grey;">下一页</a>
		<a href="#" data-role="button" rel="external" style="color:grey;">末页</a>
<?php
}else{
?>
		<a href="index.php?page=<?php echo $page+1; ?>" data-role="button" rel="external">下一页</a>
		<a href="index.php?page=<?php echo $totalPage; ?>" data-role="button" rel="external">末页</a>
<?php
}
?>
		</div>
<?php require "../common/footer.php"; ?>