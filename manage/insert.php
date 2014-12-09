<?php
include "../tools/connector.php";
$connector=new Connector;
$connector->connect();

//insert
$sql="insert into record(year,month,day,countup,zeroone,cricket,rating) ".
"values ($_POST[year],$_POST[month],$_POST[day],$_POST[countup],$_POST[zeroone],".
"$_POST[cricket],$_POST[rating])";
$connector->query($sql);
//return
echo "<script language='JavaScript'>";
echo "location.href = 'index.php';";
echo "</script>";

$connector->disconnect();
?>