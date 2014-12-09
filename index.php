<html>
<head>
	<meta charset="utf-8"> 
	<link rel="stylesheet" type="text/css" href="css/common.css" />
	<title>Cecil Ma's Darts Website</title>
</head>
<?php
include "tools/connector.php";
$connector=new Connector;
$connector->connect();

$countup=0;
$zeroone=0;
$cricket=0;
$rating=0;

$connector->query("select count(*) from record");
list($count_record)=mysql_fetch_row($connector->result);
if($count_record>0){
	$connector->query("select countup,zeroone,cricket,rating from record order by year desc,month desc,day desc limit 0,1");
	list($countup,$zeroone,$cricket,$rating)=mysql_fetch_row($connector->result);
}

$connector->disconnect();
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
				<td align="center"><?php echo $countup; ?></td>
				<td align="center"><?php echo $zeroone; ?></td>
				<td align="center"><?php echo $cricket; ?></td>
				<td align="center"><?php echo $rating; ?></td>
			<tr>
		</table>
	</fieldset>
</body>
</html>
