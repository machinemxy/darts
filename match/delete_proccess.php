<?php
require "../common/medoo.php";
if($_POST['password']=="1234"){
	$database=new medoo();
	$database->delete(
		"match",
		array("id"=>$_POST['id'])
	);
}
header("Location:index.php");
?>