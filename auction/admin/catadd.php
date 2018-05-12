<?php session_start();

include("conn.php");
if(isset($_POST['Submit']))
{
$Id=$_REQUEST['selectcoun'];
//echo "Id is::".$Id;
$subname=$_POST['cat'];
//echo "catname is::".$subname;
$q="insert into subcat(catid,subname,instance) values('".$Id."','".$subname."',sysdate()) ";
if(mysql_query($q,$link))
{

header("Location:addcategory.php?status=success");
}
else
{
header("Location:addcategory.php?status=notsend");
}

}
?>