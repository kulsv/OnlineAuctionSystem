<? session_start();
if(!isset($_SESSION['so_cuserId'])) 
{
header("Location:index.php");
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Website</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
<!--
.style1 {color: #333333}
.style3 {
	color: #009900;
	font-weight: bold;
}
.style4 {
	color: #FF0000;
	font-weight: bold;
}
.style6 {color: #333333; font-weight: bold; }
-->
</style>
</head>

<body>

  <table width="831" border="0" align="center" >
    <tr bgcolor="#F2E7E1">
      <td width="5" height="28" rowspan="2"><span class="style1"></span></td>
      <td colspan="9"  bgcolor="#F2E7E1"><? include("index.html"); ?>&nbsp;</td>
    </tr>
    <tr bgcolor="#F2E7E1">
      <td width="77"  bgcolor="#F2E7E1"><span class="style6">Stock</span></td>
      <td width="45" ><span class="style6">Year</span></td>
      <td width="86" ><span class="style6">Title</span></td>
      <td width="54" ><span class="style6">Make</span></td>
      <td width="56" ><span class="style6">Mode</span><span class="style1">l</span></td>
      <td width="56" class="style6" >Max Bid</td>
      <td width="57" class="style6" >Asking Price</td>
      <td width="207" class="style6" >Status</td>
      <td width="146" class="style6" >Reset to auction</td>
    </tr>
    <?
  include("conn.php");
						   $query="select * from tbl_automobile_details where status='A' and bid_status=1";
						   $res=mysql_query($query);
						   while($res1=mysql_fetch_array($res))
						   {
						   $id=$res1['auto_id'];
						   $stock=$res1['stockno'];
						   $year=$res1['auto_year'];
						   $title=$res1['auto_title'];
						   $make=$res1['auto_make'];
						   $model=$res1['auto_model'];
						   $minbid=$res1['auto_minbid'];
						   //echo $stock;
				 $queryt="select max(bid_amt) as high from auction_bidval where lot_no='".$stock."' ";
						 //echo $queryt;
						  $rest=mysql_query($queryt);
						  $restt=mysql_fetch_array($rest);
						 $auval= $restt['high'];
						 
						 
					 $queryt="select user_id  from auction_bidval where lot_no='".$stock."' and bid_amt='". $auval."' ";
						 //echo $queryt;
						  $rest=mysql_query($queryt);
						  $restt=mysql_fetch_array($rest);
						 
						 $userid= $restt['user_id'];	 
						 //echo $userid;
						 
						  $queryt="select id  from cuser where userName='".$userid."'  ";
						 //echo $queryt;
						  $rest=mysql_query($queryt);
						  $restt=mysql_fetch_array($rest);
						 
						 $u_id= $restt['id'];	 
						 //echo $u_id;
						 
						 
						 
						
						 
						   ?>
    <tr bgcolor="#E4EDEC">
	<? if($auval<$minbid) { ?>
      <td><span class="style1"></span></td>
      <td bgcolor="#E4EDEC"><span class="style1"><a href="display_auto.php?id=<? echo $id; ?>"><? echo $stock; ?></a></span></td>
      <td><span class="style1"><? echo $year; ?></span></td>
      <td><span class="style1"><? echo $title; ?></span></td>
      <td><span class="style1"><? echo $make; ?></span></td>
      <td><span class="style1"><? echo $model; ?></span></td>
      <td><? echo  $auval;?></td>
      <td><? echo $minbid; ?></td>
      <td>
    
     <p class="style4">NotApproved<a href="contact_details.php?id=<? echo $id; ?>&own=<? echo  $auval;?>">Contact Owner</a></p>
     
     
        </td>
      <td><span class="style1"><a href="edit_auto_details2.php?id=<? echo $id; ?>">Reset</a></span></td> <? } ?>   
    </tr>
    <? 
  }
  ?>
  </table>

</body>
</html>
