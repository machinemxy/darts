<?php
require "../common/verify.php";
require "../common/medoo.php";
$database=new medoo();
$data=$database->insert(
	"record",
	array(
		"year"=>$_POST['year'],
		"month"=>$_POST['month'],
		"day"=>$_POST['day'],
		"zeroone"=>$_POST['zeroone'],
		"cricket"=>$_POST['cricket'],
		"countup"=>$_POST['countup'],
		"rating"=>$_POST['rating']
	)
);
header("Location:list.php");
?>