<?php
require "../common/medoo.php";
$database=new medoo();
$leagues=$database->select(
	"league",
	array("id","name")
);
?>