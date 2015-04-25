<?php
session_start();
if($_SESSION['verified']==false){
	header("Location:error.php");
}
?>