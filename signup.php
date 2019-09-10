<?php 
$Use_nam=$_POST['use_nam'];
$Use_eml=$_POST['use_eml'];
$Use_mob=$_POST['use_mob'];
$Use_pas=$_POST['use_pas'];
$Use_rep_pas=$_POST['use_rep_pas'];
if($Use_pas==$Use_rep_pas)
{
$ip="localhost";
$user="root";
$password="";
$dbname="multi";
$path=mysqli_connect($ip,$user,$password,$dbname);
$insert="INSERT INTO info SET name='$Use_nam', email='$Use_eml', mobile='$Use_mob', password='$Use_pas'";
$path->query($insert);
echo "Signup Successful";
}
else
	echo "Password Mismatched";
?>