<?php
require "../common/medoo.php";
$database=new medoo();
$data=$database->get(
	"record",
	array("id","year","month","day","zeroone","cricket","countup","rating"),
	array("id"=>$_GET['id'])
);
?>