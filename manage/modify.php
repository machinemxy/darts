<?php require "../common/verify.php"; ?>
<?php require "modify_proccess.php"; ?>
<?php require "../common/header.php"; ?>
</head>
<body>
<div data-role="page">
<div data-role="header">
<a href="list.php" rel="external" data-icon="arrow-l" data-iconpos="notext"></a>
<h1>小马飞镖</h1>
</div>
<div data-role="content">
	<form method="post" action="modify_proccess2.php">
	<input type="hidden" name="id" id="id" value="<?php echo $data['id']; ?>"/>
	<div data-role="fieldcontain">
		<label for="year">年</label>
		<input type="text" name="year" id="year" value="<?php echo $data['year']; ?>"/>
		<label for="month">月</label>
		<input type="text" name="month" id="month" value="<?php echo $data['month']; ?>"/>
		<label for="day">日</label>
		<input type="text" name="day" id="day" value="<?php echo $data['day']; ?>"/>
		<label for="zeroone">01</label>
		<input type="text" name="zeroone" id="zeroone" value="<?php echo $data['zeroone']; ?>"/>
		<label for="cricket">cricket</label>
		<input type="text" name="cricket" id="cricket" value="<?php echo $data['cricket']; ?>"/>
		<label for="countup">count up</label>
		<input type="text" name="countup" id="countup" value="<?php echo $data['countup']; ?>"/>
		<label for="rating">rating</label>
		<input type="text" name="rating" id="rating" value="<?php echo $data['rating']; ?>"/>
	</div>
	<input type="submit" data-inline="true" value="更改"/>
	</form>
</div>
<?php require "../common/footer.php"; ?>