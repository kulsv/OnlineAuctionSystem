<? include("conn.php");

$id = $_REQUEST['id'];
$timestamp= $_REQUEST['timestamp'];
$t= $_REQUEST['usertype']; 
//echo $t;
//echo $utype;

$q="select stockno from tbl_automobile_details where  auto_id = '".$id."' ";
$rs=mysql_query($q);
$row=mysql_fetch_array($rs);
//echo $row['stockno'];
$qry="DELETE  FROM auction_bidval where lot_no= '".$row['stockno']."' ";
mysql_query($qry);
$qry3="DELETE  FROM tbl_bid where product_id= '".$id."' ";
mysql_query($qry3);

$qry1="UPDATE tbl_automobile_details SET auto_saledate  = '".$timestamp."', bid_status = '0' ,usertype='".$t."'  where auto_id = '".$id."' ";
if(mysql_query($qry1))
{
header("Location:resetauction.php");
}
?>