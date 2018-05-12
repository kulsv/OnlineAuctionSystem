<?php
session_start();
include ("connection.inc.php");
$txtepwd=$_REQUEST['txtepwd'];
$txtcpwd=$_REQUEST['txtcpwd'];
$rs = mysql_query("select * from useradmin WHERE username = 'admin'",$link);
/*if(mysql_num_rows($rs) == 0)
{
	header("Location:index.php?flag=FAILED");
	exit();
}
if
{*/
	$row=mysql_fetch_array($rs);
	//$ucd=strtoupper($row['username']);
	$pwd=$row['password'];
	if(strtoupper($txtepwd) <> strtoupper($pwd))
	{
		header("Location:editadmin.php?flag=PFAILED");
		exit();
	}
	else{
	
		$query="UPDATE useradmin set password='".$_POST["txtcpwd"]."' WHERE username='".$_SESSION["admin"]."'";
		mysql_query($query);
		header("Location:editadmin.php?flag=SUCCESS");
		}
	
	//$loggedDt=date("d-m-Y H:i:s");
	//$address=$_SERVER["REMOTE_ADDR"];
	//header("Location:home.php?flag=SUCESS");

?>



