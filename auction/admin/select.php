<?php

require 'connection.inc.php';
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password= $_POST['password'];
$result= mysql_query("select * from useradmin where username='$username' && password='$password'");
	$count=mysql_num_rows($result);

if($count==1)
{
session_start();
$_SESSION['myusername']=$username;
//header("http://localhost/phpmyadmin/");
//echo "<center><br><br><br><br>To enter PhPMyAdmin <a href=http://localhost/phpmyadmin/>Click Here</a>";
//echo "<center><a href=http://localhost/phpmyadmin/>Enter PHPmyadmin</a>" ;
//echo "<center><a href=http://localhost/thedeathnote.esy.es/admin/newadmin.php>Logout</a>";
//echo "<center><br><br>To Logout <a href=http://localhost/thedeathnote.esy.es/admin/newadmin.php>Click Here</a>";
header("Location:index.html?flag=SUCESS");



//header ("logout.php");
}
else
{

echo "wrong username or password";
header("Location: newadmin.php?mode=failed");
//header("LOCATION:newadmin.php");
//echo 'Click here to login again';
}
 
mysql_close($con);
}
