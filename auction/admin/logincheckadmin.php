<?php
session_start();
include ("conn.php");
$txtuid=$_REQUEST['txtuid'];
$txtpwd=$_REQUEST['txtpwd'];
$rs = mysql_query("select * from useradmin where userName = '$txtuid'",$link);
if(mysql_num_rows($rs) == 0)
{
	header("Location:index.php?flag=FAILED");
	exit();
}
else
{
	$row=mysql_fetch_array($rs);
	$ucd=strtoupper($row['userName']);
	$pwd=$row['password'];
	if(strtoupper($txtpwd) <> strtoupper($pwd))
	{
		header("Location:index.php?flag=PFAILED");
		exit();
	}
	else{
	
		$_SESSION['so_cuserId']=strtolower($txtuid);
		}
	
	//$loggedDt=date("d-m-Y H:i:s");
	//$address=$_SERVER["REMOTE_ADDR"];
	header("Location:index.html?flag=SUCESS");
}
?>



