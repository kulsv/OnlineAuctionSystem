<?
//echo $_REQUEST['upd'];echo $_REQUEST['txt_auto_make'];
include("conn.php");

if(($_REQUEST['txt_auto_make']!="")&&($_REQUEST['upd']!=""))
{
//echo "new".$_REQUEST['upd'];echo "make".$_REQUEST['txt_auto_make'];
$qry1 = "UPDATE subcat SET subname  = '".$_REQUEST['upd']."' where subname = '".$_REQUEST['txt_auto_make']."' ";
if(mysql_query($qry1))
{
header("Location:edit_category.php?f=s");

}
}
?>