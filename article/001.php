<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/common.css" />
	<title>Cecil Ma's Darts Website</title>
</head>
<body>
<h1>How I started playing darts(1)</h1>
<p>
	As far as I remember, the first time I played darts when I am a senior middle school student. At that time, I put the board on my board and laid it on the wall. I didn't know the standard height and distance the board should be but just put it there and shooted it for fun.
</p>
<p>
	In a summer holiday, the local community held a darts contest for young students. I participated in it with two of my friends as a team. The rule was simple. The board was just like an archery target. When you shooted at the bull, you got 10 points. The outer the score was lower. We shooted it one by one and at last the score was summed up. We found it seemed that we are the eldest participators. Other teams were grouped up by junior middles school students or even primary school students. Some of them were too short to reach the bull. So although my team was really not good at darts, we got the second prize at last.
</p>
<p>
	As the reward, we got ¥80 in all and I bought a PC game at the game store.
</p>
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
	<input type="hidden" name="article_id" value="1"/>
	<input type="hidden" name="page_id" value="001"/>
	<button type="submit">Commit</button>
	</form>
</fieldset>
<?php
include "../tools/connector.php";
$connector=new Connector;
$connector->connect();

//modify every page
$article_id=1;
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
