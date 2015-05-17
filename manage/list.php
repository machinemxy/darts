<?php require "../common/verify.php"; ?>
<?php require "list_proccess.php"; ?>
<?php require "../common/header.php"; ?>
</head>
<body>
<div data-role="page">
<div data-role="header">
<a href="../home/index.php" rel="external" data-icon="home" data-iconpos="notext"></a>
<h1>小马飞镖</h1>
<a href="insert.php" rel="external" data-icon="plus" data-iconpos="notext"></a>
</div>
<div data-role="content">
	<ul data-role="listview" data-split-icon="delete">
<?php
foreach($datas as $data){
?>
		<li>
			<a href="modify.php?id=<?php echo $data['id']; ?>" rel="external">
				<h3>
					<?php echo $data['year']."/".$data['month']."/".$data['day']; ?>
				</h3>
				<p>
					zero one:<?php echo $data['zeroone']; ?>&nbsp
					cricket:<?php echo $data['cricket']; ?><br/>
					count up:<?php echo $data['countup']; ?>&nbsp
					rating:<?php echo $data['rating']; ?><br/>
				</p>
			</a>
			<a href="delete_proccess.php?id=<?php echo $data['id']; ?>" rel="external"></a>
		</li>
<?php
}
?>
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
		<a href="list.php?page=1" data-role="button" rel="external">首页</a>
		<a href="list.php?page=<?php echo $page-1; ?>" data-role="button" rel="external">上页</a>
<?php
}
if($page==$totalPage){
?>
		<a href="#" data-role="button" rel="external" style="color:grey;">下页</a>
		<a href="#" data-role="button" rel="external" style="color:grey;">末页</a>
<?php
}else{
?>
		<a href="list.php?page=<?php echo $page+1; ?>" data-role="button" rel="external">下页</a>
		<a href="list.php?page=<?php echo $totalPage; ?>" data-role="button" rel="external">末页</a>
<?php
}
?>
	</div>
</div>
<?php require "../common/footer.php"; ?>