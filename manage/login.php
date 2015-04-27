<?php require "../common/header.php"; ?>
</head>
<body>
	<div data-role="page">
		<div data-role="header">
			<a href="../home/index.php" rel="external" data-icon="home" data-iconpos="notext"></a>
			<h1>小马飞镖</h1>
		</div>
		<div data-role="content">
			<form method="post" action="login_proccess.php">
			<div data-role="fieldcontain">
				<label for="password">管理密码</label>
				<input type="password" name="password" id="password" />
			</div>
			<input type="submit" data-inline="true" value="提交"/>
			</form>
		</div>
<?php require "../common/footer.php"; ?>