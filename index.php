<?php session_start(); ?>
<html>
<head>
	<meta charset="utf-8"> 
	<link rel="stylesheet" type="text/css" href="css/common.css" />
	<title>Cecil Ma's Darts Website</title>
</head>
<?php
/*
include "../tools/connector.php";
$connector=new Connector;
$connector->connect();



$connector->disconnect();
*/
?>
<body>
	<h1>Cecil Ma's Darts Website</h1>
	<fieldset>
		<legend>Cecil Ma's real-time rating</legend>
		<table border="1">
			<tr>
				<th width="25%">count-up</th>
				<th width="25%">01</th>
				<th width="25%">cricket</th>
				<th width="25%">rating</th>
			<tr>
				<td align="center">500</td>
				<td align="center">80</td>
				<td align="center">3</td>
				<td align="center">9</td>
			<tr>
		</table>
	</fieldset>
</body>
</html>
