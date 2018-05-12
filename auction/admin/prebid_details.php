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
	$qu="select stockno,auto_id from tbl_automobile_details";
						   $re=mysql_query($qu);
						   while($re1=mysql_fetch_array($re))
						   {
						   $stockno=$re1['stockno'];
						    $auto_id=$re1['auto_id'];
						 						   						   
						    ?>
                  <tr bgcolor="#F2E7E1">
                    <td width="126"  "  bgcolor="#F2E7E1"><span class="style3"><a href="prebid_details.php?pid=<? echo $auto_id; ?>"><? echo $stockno; ?></a></span></td>
                  </tr>
                  <?
									
}									?>
                 
              </table></td>
            </tr>
            <tr>
              <td align="left" valign="top" bgcolor="#F2E7E1"><img src="images/menu_bottom.gif" alt="" width="180" height="5" /></td>
            </tr>
            
        </table></td>
       
        <td align="left" valign="top" bgcolor="#ECE9D8"><p>
            <?
								include("conn.php");?>

            <div  style=" border:#000000;  overflow:auto">
              <table border="0" >
                <tr bgcolor="#F2E7E1">
                  <td width="190"  bgcolor="#F2E7E1"><span class="style3">Stockno</span></td>
                  <td width="180"  bgcolor="#F2E7E1"><span class="style3">Year</span> </td>
                  <td width="180"  bgcolor="#F2E7E1"><span class="style3">Make</span></td>
                  <td width="180"  bgcolor="#F2E7E1"><span class="style3">Model</span></td>
                  <td width="149" ><span class="style3">UserId</span></td>
                  <td width="149" ><span class="style3">Date Time</span></td>
                   <td width="149" ><span class="style3">Bid amount</span></td>
                </tr>
                <?		
				//echo $pid;
				
	$query="select stockno,auto_year,auto_make,auto_model,user_id,date_time,bid_amt from tbl_automobile_details , tbl_bid  where auto_id=product_id  and  product_id='". $pid."'";
						   $res=mysql_query($query);
						   while($res1=mysql_fetch_array($res))
						   {
						   $stockno=$res1['stockno'];
						  
						   $auto_year=$res1['auto_year'];
						   $auto_mak=$res1['auto_make'];
						   $auto_model=$res1['auto_model'];
						    $user_id=$res1['user_id'];
						  
						   $date_time=$res1['date_time'];
						   $bid_amt=$res1['bid_amt'];
						  
						  
						// 
						   
						   ?>
                <tr bgcolor="#E4EDEC">
                  <td><span class="style3"><? echo $stockno; ?></span></td>
                  <td><span class="style3"><? echo $auto_year; ?></span></td>
                  <td><span class="style3"><? echo $auto_mak; ?></span></td>
                  <td><span class="style3"><? echo $auto_model; ?></span></td>
                  <td><span class="style3"><? echo $user_id; ?></span></td>
                  <td><span class="style3"><? echo $date_time; ?></span></td>
                    <td><span class="style3"><? echo $bid_amt; ?></span></td>
                </tr>
                <?

  
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