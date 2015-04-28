<?php
require "../common/medoo.php";
$database=new medoo();
if($_POST['password']=="1234"){
	$database->insert(
		"article",
		array(
			"title"=>$_POST['title'],
			"date"=>$_POST['date'],
			"url"=>$_POST['url']
		)
	);
}
header("Location:index.php");
?>