<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/common.css" />
	<title>Cecil Ma's Darts Website</title>
</head>
<body>
<h1>How I started playing darts(2)</h1>
<p>
	It was a cold day.
</p>
<p>
	I was in grade 3 of university. We just finished our final examinations but I still stay in the campus because I took part in a logistics competition with some of my schoolmates. We must work out an essay together in some days. Because it was chilly outside, we closed ourselves in the dormitory and typing on the laptop except having lunch and dinner.
</p>
<p>
	I found the life is too boring so I bought a cheap darts board in the mart. We finally got some amusement when not typing. (But earlier we also played some flash games instead) Soon I realized that the darts in the set were so light that its trail was nearly random. In order to get more fun, I spent ¥25(around 4 dollars) to bought a set of better darts online. Although it was very cheap indeed, however, it symbolized that from then on, I regarded darts as a sports rather than kids' amusement.
</p>
<p>My first darts:</p>
<img src="../img/first_darts.png" width="50%"/>
<fieldset>
	<legend>Write down your comment</legend>
	<form name="form1" action="post.php" method="post">
	<table>
		<tr>
			<td>Nickname</td>
			<td>
				<input type="text" name="nickname" maxlength="15" required/>
			</td>
			<td style="color:red">*</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>
				<input type="text" name="email" maxlength="30"/>
			</td>
			<td style="color:grey">
				Your Email won't be public. It just provide a way for the author to reply you.
			</td>
		</tr>
		<tr>
			<td valign="top">Comment</td>
			<td>
				<textarea name="comment" rows="5" cols="30" required></textarea>
			</td>
			<td style="color:red" valign="top">*</td>
		</tr>
	</table>
	<!-- modify every page -->
	<input type="hidden" name="article_id" value="2"/>
	<input type="hidden" name="page_id" value="002"/>
	<button type="submit">Commit</button>
	</form>
</fieldset>
<?php
include "../tools/connector.php";
$connector=new Connector;
$connector->connect();

//modify every page
$article_id=2;
$connector->query("select nickname,comment from comment where article_id=$article_id");
while(list($nickname,$comment)=mysql_fetch_row($connector->result)){
?>
<p><?php echo $nickname; ?>:<br/><?php echo $comment; ?></p>
<?php
}
$connector->disconnect();
?>
<a href="../index.php">Back</a>
</body>
</html>
