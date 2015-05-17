<?php require "../common/header.php"; ?>
<?php require "match_proccess.php"; ?>
</head>
<body>
	<div data-role="page">
		<div data-role="header">
			<h1>小马飞镖</h1>
			<a href="insert.php" rel="external" data-icon="plus" data-iconpos="notext" class="ui-btn-right"></a>
			<div data-role="navbar">
				<ul>
					<li><a href="../home/index.php" rel="external">数据</a></li>
					<li><a href="#" class="ui-btn-active">战绩</a></li>
					<li><a href="../article/index.php" rel="external">文章</a></li>
				</ul>
			</div>
		</div>
		<div data-role="content">
			<ul data-role="listview" data-split-icon="delete">
<?php
foreach($matches as $match){
?>
				<li>
					<a href="modify.php?id=<?php echo $match['id']; ?>" rel="external">
						<h3>
<?php
if($match['result']==1){
	echo "<font style='color:red'>胜（".$match['score']."）</font>";
}elseif($match['result']==0){
	echo "<font style='color:blue'>负（".$match['score']."）</font>";
}else{
	echo "平（".$match['score']."）";
}
echo "对阵 ".$match['opponent'];
?>
						</h3>
						<p><?php echo $match['date']." ".$match['name']; ?></p>
					</a>
					<a href="delete.php?id=<?php echo $match['id']; ?>" rel="external"></a>
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
		<a href="#" data-role="button" rel="external" style="color:grey;">上页</a>
<?php
}else{
?>
		<a href="index.php?page=1" data-role="button" rel="external">首页</a>
		<a href="index.php?page=<?php echo $page-1; ?>" data-role="button" rel="external">上页</a>
<?php
}
if($page==$totalPage){
?>
		<a href="#" data-role="button" rel="external" style="color:grey;">下页</a>
		<a href="#" data-role="button" rel="external" style="color:grey;">末页</a>
<?php
}else{
?>
		<a href="index.php?page=<?php echo $page+1; ?>" data-role="button" rel="external">下页</a>
		<a href="index.php?page=<?php echo $totalPage; ?>" data-role="button" rel="external">末页</a>
<?php
}
?>
		</div>
<?php require "../common/footer.php"; ?>