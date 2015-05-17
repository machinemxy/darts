<?php
require "../common/medoo.php";
$database=new medoo();
$match=$database->get(
	"match",
	array("id","score","result","opponent","date","league_id"),
	array("id"=>$_GET['id'])
);
$leagues=$database->select(
	"league",
	array("id","name")
);
?>