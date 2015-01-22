<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/common.css" />
	<title>Cecil Ma's Darts Website</title>
</head>
<body>
<h1>Darts in Japan(1)</h1>
<p>
	After graduation, I worked as a programmer in a Japanese company for 1 year and then being sent to Osaka, Japan for 1 year to build a new system.
</p>
<p>
	At the beginning, I used to go to bating center to play baseball for leisure. However its price was not low and 20 balls overed quickly. Once I went downstairs for toilet, I found the soft darts bar. It charged less than bating center and once paid you can play it as long as you like in a day. Soon my major amusement became darts.
</p>
<p>
	At first I borrow darts from the shop and soon I bought a brass darts, a membership card so as to record my data. It really attracts me because the darts machine can record my performance automatically and I can view it at any time by mobile phone. I can also challenge the other players all around the world online. It is much more interesting than throwing it at home before.
</p>
<p>The first darts I bought in Japan:</p>
<img src="../img/fjd.png" width="50%"/>
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
	<input type="hidden" name="article_id" value="3"/>
	<input type="hidden" name="page_id" value="003"/>
	<button type="submit">Commit</button>
	</form>
</fieldset>
<?php
include "../tools/connector.php";
$connector=new Connector;
$connector->connect();

//modify every page
$article_id=3;
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
