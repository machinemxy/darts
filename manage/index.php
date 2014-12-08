<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/common.css" />
	<title>Cecil Ma's Darts Website</title>
	<script language="javascript">
		function load(){
			document.getElementById("year").focus();
		}
	</script>
</head>
<?php
include "../tools/connector.php";
$connector=new Connector;
$connector->connect();
//get page
$page=$_GET['page'];
if(empty($page)){
	$page=1;
}
$start=20*($page-1);
$end=20*$page-1;
//get total page
$connector->query("select count(*) from record");
list($count_record)=mysql_fetch_row($connector->result);
$total_page=ceil($count_record/20);
?>
<body onload="load();">
<form name="form1" action="update.php" method="post">
	<table border="1">
		<tr>
			<th width="12.5%">year</th>
			<th width="12.5%">month</th>
			<th width="12.5%">day</th>
			<th width="12.5%">count-up</th>
			<th width="12.5%">01</th>
			<th width="12.5%">cricket</th>
			<th width="12.5%">rating</th>
			<th width="12.5%">operation</th>
		</tr>
<?php
//lists
$connector->query("select * from record order by year desc,month desc,day desc limit $start,$end");
$gyo=0;
while(list($id,$year,$month,$day,$countup,$zeroone,$cricket,$rating)=mysql_fetch_row($connector->result)){
	$gyo++;
	$gyono=$gyo<10?"0".$gyo:$gyo;
?>
		<tr>
			<td align="right"><?php echo $year; ?></td>
			<td align="right"><?php echo $month; ?></td>
			<td align="right"><?php echo $day; ?></td>
			<td align="right"><?php echo $countup; ?></td>
			<td align="right"><?php echo $zeroone; ?></td>
			<td align="right"><?php echo $cricekt; ?></td>
			<td align="right"><?php echo $rating; ?></td>
			<td align="middle">
				<a href="delete.php?id=<?php echo $id; ?>&page=<?php echo $page; ?>">delete</a>
			</td>
		</tr>
<?php
}
$connector->disconnect();
?>
	</table>
	<br/>
	page:<?php echo $page."/".$total_page; ?>
	<br/>
<?php
if($page>1){
?>
	<a href="index.php?page=1">first</a>
	<a href="index.php?page=<?php echo $page-1; ?>">previous</a>
<?php
}
if($page<$total_page){
?>
	<a href="index.php?page=<?php echo $page+1; ?>">next</a>
	<a href="index.php?page=<?php echo $total_page; ?>">final</a>
<?php
}
?>
	<br/>
	<fieldset>
		<legend>insert</legend>
		<table border="1">
			<tr>
				<th >year</th>
				<th >month</th>
				<th >day</th>
				<th >count-up</th>
				<th >01</th>
				<th >cricket</th>
				<th >rating</th>
			</tr>
			<tr>
				<td><input id="year"/></td>
				<td><input id="month"/></td>
				<td><input id="day"/></td>
				<td><input id="countup"/></td>
				<td><input id="zeroone"/></td>
				<td><input id="cricket"/></td>
				<td><input id="rating"/></td>
			</td>
		</table>
		<br/>
		<input type="submit"/>
	</fieldset>
</form>
</body>
</html>
