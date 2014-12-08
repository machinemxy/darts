<?php session_start(); ?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/common.css" />
	<title>Cecil Ma's Darts Website</title>
</head>
<?php
include "../tools/connector.php";
$connector=new Connector;
$connector->connect();



$connector->disconnect();
?>
<body>

</body>
</html>
