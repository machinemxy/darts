<?php require "select_match_proccess.php"; ?>
<?php require "../common/header.php"; ?>
</head>
<body>
<div data-role="page">
<div data-role="header">
<a href="index.php" rel="external" data-icon="arrow-l" data-iconpos="notext"></a>
<h1>小马飞镖</h1>
</div>
<div data-role="content">
	<form method="post" action="modify_proccess.php">
	<input type="hidden" name="id" id="id" value="<?php echo $match['id']; ?>"/>
	<div data-role="fieldcontain">
		<label for="score">比分</label>
		<input type="text" name="score" id="score" value="<?php echo $match['score']; ?>"/>
		<label for="result">胜负</label>
		<input type="text" name="result" id="result" value="<?php echo $match['result']; ?>"/>
		<label for="opponent">对手</label>
		<input type="text" name="opponent" id="opponent" value="<?php echo $match['opponent']; ?>"/>
		<label for="date">日期</label>
		<input type="text" name="date" id="date" value="<?php echo $match['date']; ?>"/>
		<label for="league">联赛</label>
		<select name="league" id="league"/>
<?php
foreach($leagues as $league){
	if($league['id']==$match['league_id']){
		echo "<option value='".$league['id']."' selected>".$league['name']."</option>";
	}else{
		echo "<option value='".$league['id']."'>".$league['name']."</option>";
	}
}
?>
		</select>
		<label for="password">管理密码</label>
		<input type="password" name="password" id="password"/>
	</div>
	<input type="submit" data-inline="true" value="更改"/>
	</form>
</div>
<?php require "../common/footer.php"; ?>