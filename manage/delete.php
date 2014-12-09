<?php
include "../tools/connector.php";
$connector=new Connector;
$connector->connect();

//delete
$sql="delete from record where id=$_GET[id]";
$connector->query($sql);
//return
echo "<script language='JavaScript'>";
echo "location.href = 'index.php?page=$_GET[page]';";
echo "</script>";

$connector->disconnect();
?>