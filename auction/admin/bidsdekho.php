<?php session_start();
if(!isset($_SESSION['so_cuserId'])) 
{
header("Location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>Welcome to Auction Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
<!--
.style1 {color: #333333}
.style4 {color: #333333; font-weight: bold; }
-->
</style>
</head>

<body>

<table width="960" border="0" align="center" >
  <tr bgcolor="#F2E7E1">
    <td height="13" colspan="7" bgcolor="#F2E7E1"><?php include("index.html"); ?>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2E7E1">
    <td width="69" height="13" bgcolor="#F2E7E1"><strong>Product id</strong></td>
    

    <td width="65" bgcolor="#F2E7E1"><span class="style4">Product Name</span></td>
	
 
    <td width="98"><span class="style4">Bid Winner</span></td>
    <td width="58"><span class="style4">Minimum Price</span></td>
    <td width="85"><span class="style4">Final Price</span></td>
	
	      </tr>
  <?php
							include("connection.inc.php");
						 //$id = $_GET['id'];
						// $_SESSION['id'] = $id;
						 
						
							//include("home.php");
							//global $uid;
							//$_GET["uid"];
							//echo $uid;
						   $query="select * from product where date_and_time <= now()";
						   $res=mysql_query($query);
						   while($res1=mysql_fetch_array($res))
						   {
						   $pid=$res1['p_id'];
						   $p_name=$res1['p_name'];
						   $winner=$res1['bid_winner'];
						   $p_price=$res1['p_price'];
						   $final_price=$res1['final_price'];

						   ?>
    <tr bgcolor="#E4EDEC">
    <td bgcolor="#E4EDEC"><?php echo $pid; ?></td>
    <td bgcolor="#E4EDEC"><span class="style1"><?php echo $p_name; ?></span></td>

    <td><span class="style1"><?php echo $winner; ?>
	
    
     
    </span></td>
    <td bgcolor="#E4EDEC"><span class="style1"><?php echo $p_price; ?></span></td>
	<td><span class="style1"><?php echo $final_price; ?>
	
	
	
    <tr>
  <?php
  }
  ?>
</table>
</body>
</html>