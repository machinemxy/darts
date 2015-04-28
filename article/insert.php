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
		<label for="title">标题</label>
		<input type="text" name="title" id="title"/>
		<label for="date">时间</label>
		<input type="text" name="date" id="date"/>
		<label for="url">URL</label>
		<input type="text" name="url" id="url"/>
		<label for="password">管理密码</label>
		<input type="password" name="password" id="password"/>
	</div>
	<input type="submit" data-inline="true" value="新增"/>
	</form>
</div>
<?php require "../common/footer.php"; ?>