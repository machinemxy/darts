<?php
require "../common/medoo.php";
if($_POST['password']=="1234"){
	$database=new medoo();
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