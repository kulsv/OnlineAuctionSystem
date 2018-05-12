<?php session_start();
if(!isset($_SESSION['so_cuserId'])) 
{
include 'index.html';}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to AutoBuyPlus Admin</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
<!--
.style1 {color: #333333}
.style2 {color: #FF0000}
.style3 {color: #FEE9CD; font-size: 16px;}
-->
</style>
</head>

<body>
<table width="841" border="0" align="center" >
  <tr>
              <td colspan="3" class="style3"><?php if(isset($_SESSION['so_cuserId'])){include("index.html");} ?>                &nbsp;&nbsp;&nbsp;</td>
            </tr>
			</table>
<table width="841" border="0" align="center" >
  <tr bgcolor="#F2E7E1">
    <td width="2" height="28" rowspan="2"><span class="style1"></span></td>
    <td colspan="8" bgcolor="#F2E7E1"><span class="style3">
      <? include("index.html"); ?>
    </span></td>
  </tr>
  <tr bgcolor="#F2E7E1">
    <td width="100"><span class="style1"><B>Product ID</span></td>
    <td width="300"><span class="style1"><B>Product Name</span></td>
    <td width="64"><span class="style1"><B>Price</span></td>
    <td width="74"><span class="style1"><B>Seller ID</span></td>
    <td width="89"><span class="style1"><B>Status</span></td>
    <td width="189"><span class="style1"><B>Auction Timing</span></td>
    
    
	 
    </tr>
  <?php
	       include("connection.inc.php");
		   
		   $query="SELECT * FROM product WHERE status='pending'";
		   $rs=mysql_query($query);
		   while($row=mysql_fetch_array($rs))
		   {
		   global $id;
		   $id=$row['p_id'];
		   $name=$row['p_name'];
		   $price=$row['p_price'];
		   $userId=$row['seller_id'];
		   $status=$row['status'];
		   $date=$row['date_and_time'];
		   
		   //$saledate=$row['auto_saledate'];
	?>
  <script type="text/javascript">
<!--
function confirm_delete(id)
{
if(confirm("Are you sure you want to delete this entry?"))
  {
    document.location="del_auto.php?id="+id;
  }
}
//-->
</script>
  <tr bgcolor="#E4EDEC">
    <td><span class="style1"></span></td>
    <td bgcolor="#E4EDEC"><span class="style1"><?php echo $id; ?></span></td>
    <td bgcolor="#E4EDEC"><span class="style1"><?php echo $name; ?></span></td>
    <td bgcolor="#E4EDEC"><span class="style1"><?php echo $price; ?></span></td>
    <td bgcolor="#E4EDEC"><span class="style1"><?php echo $userId; ?></span></td>
    <td bgcolor="#E4EDEC"><span class="style1"><?php echo $status; ?></span></td>
   
	  <td bgcolor="#E4EDEC"><span class="style1"><?php echo $date; ?></span></td>
  
	</td>
	 
  </tr>
  
  </tr>
  
  <?php
  }
  ?>
</table>
</body>
</html>