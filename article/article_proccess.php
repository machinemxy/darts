<?php
require "../common/medoo.php";
$database=new medoo();
$articles=$database->select(
	"article",
	array("title","date","url"),
	array("ORDER"=>"id DESC")
);
?>