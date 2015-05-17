<?php
require "../common/medoo.php";
$database=new medoo();
//current page
$page=1;
if(isset($_GET['page'])){
	$page=$_GET['page'];
}
//total page
$totalLine=$database->count("match");
$totalPage=ceil($totalLine/10);
//page start
$pageStart=10*($page-1);
//get data
$matches=$database->select(
	"match",
	array("[>]league"=>array("league_id"=>"id")),
	array("match.id","match.score","match.result","match.opponent","match.date","league.name"),
	array(
		"ORDER"=>"match.date DESC",
		"LIMIT"=>array($pageStart,10)
	)
);
?>