<? include("conn.php");?>
<? //echo $_GET['bid'];
 $qry1 = "UPDATE tbl_automobile_details SET auto_minbid = '".$_GET['bid']."'  WHERE auto_id = '".$_GET['auto_id']."'";
//echo $qry1;

mysql_query($qry1);
header("Location:notapproved_bid.php");
?>
