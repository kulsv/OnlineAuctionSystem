<?
session_start();
if(!isset($_SESSION['so_cuserId'])) 
{
header("Location:index.php");
}
$id=$_GET['id'];
include("conn.php");
mysql_query("update tbl_automobile_details set bid_status=0 where auto_id='$id'") or die("Cannot reset auction status");
header("Location:resetauction.php");
?>
