<?php
require "../common/medoo.php";
$database=new medoo();
//current page
$page=1;
if(isset($_GET['page'])){
	$page=$_GET['page'];
}
//total page
$totalLine=$database->count("article");
$totalPage=ceil($totalLine/10);
//page start
$pageStart=10*($page-1);
//get data
$articles=$database->select(
	"article",
	array("id","title","date","url"),
	array(
		"ORDER"=>"id DESC",
		"LIMIT"=>array($pageStart,10)
	)
);
?>