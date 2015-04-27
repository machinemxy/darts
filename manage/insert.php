<?php require "../common/verify.php"; ?>
<?php require "../common/header.php"; ?>
</head>
<body>
<div data-role="page">
<div data-role="header">
<a href="list.php" rel="external" data-icon="arrow-l" data-iconpos="notext"></a>
<h1>小马飞镖</h1>
</div>
<div data-role="content">
	<form method="post" action="insert_proccess.php">
	<div data-role="fieldcontain">
		<label for="year">年</label>
		<input type="text" name="year" id="year"/>
		<label for="month">月</label>
		<input type="text" name="month" id="month"/>
		<label for="day">日</label>
		<input type="text" name="day" id="day"/>
		<label for="zeroone">01</label>
		<input type="text" name="zeroone" id="zeroone"/>
		<label for="cricket">cricket</label>
		<input type="text" name="cricket" id="cricket"/>
		<label for="countup">count up</label>
		<input type="text" name="countup" id="countup"/>
		<label for="rating">rating</label>
		<input type="text" name="rating" id="rating"/>
	</div>
	<input type="submit" data-inline="true" value="新增"/>
	</form>
</div>
<?php require "../common/footer.php"; ?>