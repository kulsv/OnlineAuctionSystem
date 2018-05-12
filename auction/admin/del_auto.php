<?php $id=$_REQUEST['id'];
include("conn.php");
$query="DELETE FROM tbl_automobile_details WHERE auto_id ='".$id."'";
mysql_query($query);
mysql_close($link);
header("Location: auction_details.php");
?>

