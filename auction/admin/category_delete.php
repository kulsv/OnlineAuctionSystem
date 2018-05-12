<?
//echo $_REQUEST['upd'];echo $_REQUEST['txt_auto_make'];
include("conn.php");



//echo "new".$_REQUEST['upd'];echo "make".$_REQUEST['txt_auto_make'];
//$qry1 = "UPDATE subcat SET subname  = '".$_REQUEST['upd']."' where subname = '".$_REQUEST['txt_auto_make']."' ";

$query1="delete from subcat where subname  = '".$_REQUEST['upd']."' ";

if(mysql_query($query1))
{
header("Location:delete_category.php?f=s");

}
else
{
header("Location:delete_category.php?f=f");

}
?>