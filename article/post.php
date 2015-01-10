<?php
include "../tools/connector.php";
$connector=new Connector;
$connector->connect();

$article_id=$_POST['article_id'];
$email=mysql_real_escape_string($_POST['email']);
$nickname="anonymous";
if(!empty($_POST['nickname'])){
	$nickname=mysql_real_escape_string($_POST['nickname']);
}
$comment="no comment";
if(!empty($_POST['comment'])){
	$comment=mysql_real_escape_string($_POST['comment']);
}

$sql="insert into comment(article_id,nickname,email,comment) values ".
"('$article_id','$nickname','$email','$comment')";
$connector->query($sql);
//return
echo "<script language='JavaScript'>";
echo "location.href = '$_POST[page_id].php';";
echo "</script>";
//echo $article_id."<br/>".$email."<br/>".$nickname."<br/>".$comment;
$connector->disconnect();
?>