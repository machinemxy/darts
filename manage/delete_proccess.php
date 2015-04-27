<?php
require "../common/verify.php";
require "../common/medoo.php";
$database=new medoo();
$database->delete(
	"record",
	array("id"=>$_GET['id'])
);
header("Location:list.php");
?>