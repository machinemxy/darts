<?php require "../common/header.php"; ?>
</head>
<body>
	<div data-role="page">
		<div data-role="header">
			<a href="index.php" rel="external" data-icon="arrow-l" data-iconpos="notext"></a>
			<h1>小马飞镖</h1>
		</div>
		<div data-role="content">
			<form method="post" action="delete_proccess.php">
			<input type="hidden" id="id" name="id" value="<?php echo $_GET['id']; ?>"/>
			<div data-role="fieldcontain">
				<label for="password">管理密码</label>
				<input type="password" name="password" id="password" />
			</div>
			<input type="submit" data-inline="true" value="删除"/>
			</form>
		</div>
<?php require "../common/footer.php"; ?>