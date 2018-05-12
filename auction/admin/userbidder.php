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
.style6 {
	font-size: 12px;
	color: #FFFFFF;
	font-weight: bold;
}
.style7 {color: #C2D3FC}
-->
</style>
</head>

<body>
<table width="833" border="1" align="center">
  <tr>
 <td width="790" colspan="6"  bgcolor="#F2E7E1"><? include ("index.html");?></td>
  </tr>
  <tr>
    <td height="160" bgcolor="#F2E7E1"><table width="840" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="180" align="left" valign="top"><table width="180" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="left" valign="top" bgcolor="#F2E7E1"><table width="126" border="0" cellspacing="0" cellpadding="0">
                  <tr bgcolor="#F2E7E1">
                    <td width="126"    bgcolor="#F2E7E1"><span class="style3"><u>Product Details</u></span><br /></td>
                  </tr>
                  <tr bgcolor="#F2E7E1">
                    <td height="10" width="126"  "  bgcolor="#F2E7E1"></td>
                  </tr>
                  <?
								   include("conn.php");
								   $pid=$_REQUEST['pid'];
								   ///echo "pid is::".$pid;
	$qu="select distinct lot_no from auction_bidval";
						   $re=mysql_query($qu);
						   while($re1=mysql_fetch_array($re))
						   {
						   $lot_no=$re1['lot_no'];
						  $qus="select * from tbl_automobile_details where stockno='".$lot_no."'";
						    $rs=mysql_query($qus);
						   while($rs1=mysql_fetch_array($rs))
						   {
						   $aid=$rs1['auto_id'];
						   $stockno=$rs1['stockno']; 
						   
						    ?>
                  <tr bgcolor="#F2E7E1">
                    <td width="126"  "  bgcolor="#F2E7E1"><span class="style3"><a href="userbidder.php?pid=<? echo $stockno; ?>"><? echo $stockno; ?></a></span></td>
                  </tr>
                  <?
									}
}									?>
                 
              </table></td>
            </tr>
            <tr>
              <td align="left" valign="top" bgcolor="#F2E7E1"><img src="images/menu_bottom.gif" alt="" width="180" height="5" /></td>
            </tr>
            
        </table></td>
       
        <td align="left" valign="top" bgcolor="#ECE9D8"><p>
            <?
								include("conn.php");
$hi="select * from auction_bidval where lot_no='".$pid."' order by bid_amt desc LIMIT 0,1";
	//echo "query is::".$hi;		
				$resslt=mysql_query($hi);
						   while($resslt12=mysql_fetch_array($resslt))
						   {	
						   $us=$resslt12['user_id'];
						   $am=$resslt12['bid_amt'];
						   	 //echo "user is::".$us; 					
							}	?><span class="style2"><span class="style2">Highest Bidder Is </span>: <? echo $us; ?><span class="style2"> and bid amount is</span> <? echo $am; ?></span></p>
            <div  style=" border:#000000;  overflow:auto">
              <table border="0" >
                <tr bgcolor="#F2E7E1">
                  <td width="190"  bgcolor="#F2E7E1"><span class="style3">User</span></td>
                  <td width="180"  bgcolor="#F2E7E1"><span class="style3">Stock No</span> </td>
                  <td width="180"  bgcolor="#F2E7E1"><span class="style3">Make</span></td>
                  <td width="180"  bgcolor="#F2E7E1"><span class="style3">Model</span></td>
                  <td width="149" ><span class="style3">Date</span></td>
                  <td width="149" ><span class="style3">Bid amount</span></td>
                </tr>
                <?		
				
	$query="select * from auction_bidval where lot_no='".$pid."' order by bid_amt desc ";
						   $res=mysql_query($query);
						   while($res1=mysql_fetch_array($res))
						   {
						   $lot_no=$res1['lot_no'];
						   $user_id=$res1['user_id'];
						   $bid_amt=$res1['bid_amt'];
						   $date_time=$res1['date_time'];
						  
							$querys="select * from tbl_automobile_details where stockno='".$lot_no."'";
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
                  <td><span class="style3"><? echo $stockno; ?></span></td>
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
          </div></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>