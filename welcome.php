<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("multi");
if($_SESSION["use_eml"]==true)
{
echo "welcome"." ".$_SESSION["use_eml"];
}
else
{
	 header('location:login.php');
}

?>
<a href="logout.php">Logout</a>

<?php
$user=$_SESSION["use_eml"];
$query=mysql_query("select * from info where email='$user'");
$row=mysql_fetch_array($query);
$id=$row["id"];
if(isset($_REQUEST["submit"]))
{
	  $title=$_REQUEST["title"];
	  $content=$_REQUEST["content"];
	  mysql_query("insert into post(title,content,user_id)value('$title','$content','$id')");
}
?>

<form method="post">

<table border="1">

<tr>
<td>Title</td>
<td><input type="text" name="title"></td>
</tr>
<tr>
<td>Content</td>
<td><textarea name="content"></textarea></td>
</tr>
<tr>
<td><input type="submit" name="submit"></td>
</tr>


</table>

</form>


<a href="post.php">View Post</a>

