<?php session_start(); ?>
<html>
<head>
	<meta charset="utf-8"> 
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
