<?
//echo $_REQUEST['upd'];echo $_REQUEST['txt_auto_make'];
include("conn.php");

echo $_REQUEST['txt_auto_make'];
echo $_REQUEST['txt_auto_model'];
$qry1="insert into tbl_automobile_make(uid,auto_make) values ('".$_REQUEST['txt_auto_make']."','".$_REQUEST['txt_auto_model']."')" or die("errrorr");
if(mysql_query($qry1))
{
header("Location:add_model.php?f=s");
}
else
{
header("Location:add_model.php?f=f");
}
/*$qry1 = "UPDATE tbl_automobile_make SET auto_make  = '".$_REQUEST['newmodel']."' where auto_id = '".$_REQUEST['txt_auto_model']."' ";
if(mysql_query($qry1))
{
header("Location:edit_model.php?f=s");

}
*/
/*if(($_REQUEST['txt_auto_make']!="")&&($_REQUEST['upd']!=""))
{
//echo "new".$_REQUEST['upd'];echo "make".$_REQUEST['txt_auto_make'];
$qry1 = "UPDATE subcat SET subname  = '".$_REQUEST['upd']."' where subname = '".$_REQUEST['txt_auto_make']."' ";
if(mysql_query($qry1))
{
header("Location:edit_category.php?f=s");

}
}*/
?>