<?php require "select_league_proccess.php"; ?>
<?php require "../common/header.php"; ?>
</head>
<body>
<div data-role="page">
<div data-role="header">
<a href="index.php" rel="external" data-icon="arrow-l" data-iconpos="notext"></a>
<h1>小马飞镖</h1>
</div>
<div data-role="content">
	<form method="post" action="insert_proccess.php">
	<div data-role="fieldcontain">
		<label for="score">比分</label>
		<input type="text" name="score" id="score"/>
		<label for="result">胜负</label>
		<input type="text" name="result" id="result"/>
		<label for="opponent">对手</label>
		<input type="text" name="opponent" id="opponent"/>
		<label for="date">日期</label>
		<input type="text" name="date" id="date"/>
		<label for="league">联赛</label>
		<select name="league" id="league"/>
<?php
foreach($leagues as $league){
	echo "<option value='".$league['id']."'>".$league['name']."</option>";
}
?>
		</select>
		<label for="password">管理密码</label>
		<input type="password" name="password" id="password"/>
	</div>
	<input type="submit" data-inline="true" value="新增"/>
	</form>
</div>
<?php require "../common/footer.php"; ?>