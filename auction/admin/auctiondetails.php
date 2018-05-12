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
<script language="JavaScript" src="calendar_us.js"></script>
	<link rel="stylesheet" href="calendar.css">

<style type="text/css">
<!--
.style3 {color: #000000}
.style5 {color: #000000; font-weight: bold; }
-->
</style>
</head>

<body><form name="form3" method="post" action="auctiondetails.php"  enctype="multipart/form-data">
<table width="838" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="10" align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">
      <table border="0" >
        <tr bgcolor="#F2E7E1">
          <td colspan="6"  bgcolor="#F2E7E1"><? include ("index.html");?></td>
        </tr>
        <tr bgcolor="#F2E7E1">
          <td colspan="6"  bgcolor="#F2E7E1">
          
            <div align="center">
              <input type="hidden" name="id" id="id"  value="<? echo $id; ?>" />
              <input type="text" name="timestamp" id="timestamp"  value="<? $_REQUEST[ 'timestamp']; ?>" />
              <script language="JavaScript" type="text/javascript">
	new tcal ({
		// form name
		'formname': 'form3',
		// input name
		'controlname': 'timestamp'
	});

	              </script>
              &nbsp;
              <input type="submit" name="button" id="button" value="Submit" />
            </div></td>
        </tr>
        <tr bgcolor="#F2E7E1">
          <td width="124"  bgcolor="#F2E7E1"><span class="style5">User</span></td>
          <td width="123"  bgcolor="#F2E7E1"><span class="style5">Stock No</span></td>
          <td width="121"  bgcolor="#F2E7E1"><span class="style5">Make</span></td>
          <td width="123"  bgcolor="#F2E7E1"><span class="style5">Model</span></td>
          <td width="100" ><span class="style5">Date</span></td>
          <td width="263" ><span class="style5">Bid amount</span></td>
        </tr>
        <?		
				include("conn.php");
	$query="select * from auction_bidval order by date_time desc";
						   $res=mysql_query($query);
						   while($res1=mysql_fetch_array($res))
						   {
						   $lot_no=$res1['lot_no'];
						   $user_id=$res1['user_id'];
						   $bid_amt=$res1['bid_amt'];
						   $date_time=$res1['date_time'];
						   //echo "lotno".$lot_no;
						  if($_REQUEST[ 'timestamp']!=""){
			$querys="select * from tbl_automobile_details where stockno='".$lot_no."' and  auto_saledate = '".$_REQUEST[ 'timestamp']."'";}
			else
			$querys="select * from tbl_automobile_details where stockno='".$lot_no."' ";
			
			//echo "query is::".$querys;
			
						    $ress=mysql_query($querys);
						   while($ress1=mysql_fetch_array($ress))
						   {
						   $stockno=$ress1['stockno'];
						   $auto_model=$ress1['auto_model'];
						   $auto_make=$ress1['auto_make'];
						// 
						  					   
						   ?>
        <tr bgcolor="#E4EDEC">
          <td><span class="style3"><? echo $user_id; ?></span></td>
          <td><span class="style3"><a href="userbidder.php?pid=<? echo $stockno; ?>"><? echo $stockno; ?></a></span></td>
          <td><span class="style3"><? echo $auto_make; ?></span></td>
          <td><span class="style3"><? echo $auto_model; ?></span></td>
          <td><span class="style3"><? echo $date_time; ?></span></td>
          <td><span class="style3"><? echo $bid_amt; ?></span></td>
        </tr>
        <?
  } 
}
  ?>
      </table>
    </td>
  </tr>
</table></form>
</body>
</html>