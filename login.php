<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("multi");

if(isset($_REQUEST["submit"]))
{
	  $user=$_REQUEST["use_eml"];
	  $pass=$_REQUEST["use_pas"];
	  $query=mysql_query("select * from info where email='$user' && password='$pass'");
	  $rowcount=mysql_num_rows($query);
	  if($rowcount==true)
	  {
		    $_SESSION["use_eml"]=$user;
		   header('location:welcome.php');
	  }
	  else
	  {
		   echo "<center>your username and password is wrong</center>";
	  }
}

?>



<form method="post">
<table border="1" align="center">
<tr>
<td>Username</td>
<td><input type="text" name="user"></td>

</tr>
<tr>
<td>Password</td>
<td><input type="text" name="pass"></td>

</tr>

<tr>
<td colspan="2" align="center"><input type="submit" value="Login" name="submit"></td>
</tr>


</table>
</form>