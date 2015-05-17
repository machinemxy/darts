<?php
require "../common/medoo.php";
if($_POST['password']=="1234"){
	$database=new medoo();
	$database->update(
		"match",
		array(
			"score"=>$_POST['score'],
			"result"=>$_POST['result'],
			"opponent"=>$_POST['opponent'],
			"date"=>$_POST['date'],
			"league_id"=>$_POST['league']
		),
		array("id"=>$_POST['id'])
	);
}
header("Location:index.php");
?>