<?php
require "../common/medoo.php";
$database=new medoo();
//current page
$page=1;
if(isset($_GET['page'])){
	$page=$_GET['page'];
}
//total page
$totalLine=$database->count("record");
$totalPage=ceil($totalLine/10);
//page start
$pageStart=10*($page-1);
//get data
$datas=$database->select(
	"record",
	array("id","year","month","day","countup","cricket","zeroone","rating"),
	array(
		"ORDER"=>array("year DESC","month DESC","day DESC"),
		"LIMIT"=>array($pageStart,10)
	)
);
?>