<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("multi");
if($_SESSION["user"]==true)
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
$query1=mysql_query("select * from info where email='$user'");
$row1=mysql_fetch_array($query1);
$id=$row1["id"];
$query=mysql_query("select * from info where user_id=$id");
$rowcount=mysql_num_rows($query);
?>
<table border="1">
<tr>
<td>Title</td>
<td>Content</td>
</tr>
<?php
for($i=1;$i<=$rowcount;$i++)
{
	  $row=mysql_fetch_array($query);
	  
?>
<tr>
<td><?php echo $row["title"] ?></td>
<td><?php echo $row["content"] ?></td>

</tr>

<?php
}
?>
</table>