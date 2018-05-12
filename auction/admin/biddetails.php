<?php session_start();
if(!isset($_SESSION['so_cuserId'])) 
{
header("Location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to AutoBuyPlus Admin</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
<!--
.style2 {color: #FF0000}
.style3 {color: #000000}
-->
</style>
</head>

<body>
<table width="931" border="1" align="center">
  <tr>
   <td width="921" colspan="6"  bgcolor="#F2E7E1"><? include ("index.html");?></td>
  </tr>
  <tr>
    <td><div  >
      <table width="1005" border="0" >
        <tr bgcolor="#F2E7E1">
          <td width="146"  bgcolor="#F2E7E1"><span class="style3">Make</span></td>
          <td width="155"  bgcolor="#F2E7E1"><span class="style3">Model</span></td>
          <td width="155"  bgcolor="#F2E7E1"><span class="style3">Stockno</span></td>
          <td width="193" ><span class="style3">Date</span></td>
          <td width="408" ><span class="style3">Bid amount</span></td>
        </tr>
        <?		
				include("conn.php");
	$query="select * from tbl_bid order by date_time desc";
						   $res=mysql_query($query);
						   while($res1=mysql_fetch_array($res))
						   {
						   $user_id=$res1['user_id'];
						   $date_time=$res1['date_time'];
						   $product_id=$res1['product_id'];
						   $bid_amt=$res1['bid_amt'];
						  
							$querys="select * from tbl_automobile_details where auto_productid='".$product_id."'";
						    $ress=mysql_query($querys);
						   while($ress1=mysql_fetch_array($ress))
						   {
						   $auto_make=$ress1['auto_make'];
						   $auto_model=$ress1['auto_model'];
						   $stockno=$ress1['stockno'];
						   $auto_id=$ress1['auto_id'];
						   //$auto_make=$ress1['auto_make'];
						// 
						  					   
						   ?>
        <tr bgcolor="#E4EDEC">
          <td><span class="style3"><? echo $auto_make; ?></span></td>
          <td><span class="style3"><? echo $auto_model; ?></span></td>
          <td><span class="style3"><a href="prebid_details.php?pid=<? echo $auto_id; ?>"><? echo $stockno; ?></a></span></td>
          <td><span class="style3"><? echo $date_time; ?></span></td>
          <td><span class="style3"><? echo $bid_amt; ?></span></td>
        </tr>
        <?
  } 
  }
  ?>
      </table>
    </div></td>
  </tr>
</table>
</body>
</html>