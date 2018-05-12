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
.style1 {color: #333333}
.style3 {color: #FEE9CD; font-size: 16px;}
.style4 {color: #000000}
-->
</style>
</head>

<body>
<table width="841" border="0" align="center" >
  <tr bgcolor="#F2E7E1">
    <td width="2" height="28" rowspan="2"><span class="style1"></span></td>
    <td colspan="9" bgcolor="#F2E7E1"><span class="style3">
      <? include("index.html"); ?>
    </span></td>
  </tr>
  <tr bgcolor="#F2E7E1">
    <td width="145"><span class="style1">User</span></td>
    <td width="156"><span class="style1">Automobile Make</span></td>
    <td width="64"><span class="style1">Model</span></td>
    <td width="74"><span class="style1">Year</span></td>
    <td width="76"><span class="style1">Minimum Bid</span></td>
    <td width="77"><span class="style4">Sale Date</span></td>
    <td width="89"><span class="style1">Status</span></td>
    <td width="60"><span class="style4">Type</span></td>
     <td width="49">&nbsp;</td>
    <td width="60"><span class="style1">Options</span><span class="style1"></span></td>
  </tr>
  <?php
	       include("conn.php");
		   
		   $query="SELECT * FROM tbl_automobile_details where category='12' ORDER BY auto_id DESC";
		   $rs=mysql_query($query);
		   while($row=mysql_fetch_array($rs))
		   {
		   $userId=$row['userId'];
		   $id=$row['auto_id'];
		   $year=$row['auto_year'];
		   $make=$row['auto_make'];
		   $model=$row['auto_model'];
		   $minbid=$row['auto_minbid'];
		   $status=$row['status'];
		    $usertype=$row['usertype'];
		   

		   $saledate=$row['auto_saledate'];
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
    <td bgcolor="#E4EDEC"><span class="style1"><?php echo $userId; ?></span></td>
    <td bgcolor="#E4EDEC"><span class="style1"><?php echo $make; ?></span></td>
    <td><span class="style1"><?php echo $model; ?></span></td>
    <td><span class="style1"><?php echo $year; ?></span></td>
    <td><span class="style1"><?php echo $minbid; ?></span></td>
  <td><? echo $saledate;?></td>
    <td><span class="style1"><?php echo $status; ?></span></td>
    
   <td><span class="style1"><?php echo $usertype; ?></span></td>
    <?  $bidstatus=$row['bid_status'];
   if($bidstatus=='0')
   { ?>
    <td bgcolor="#009933">&nbsp;</td>
    
    <? }
	else
	{
	 ?>
     <td bgcolor="#FF0000">&nbsp;</td>
     <? } ?>
    <td><span class="style1"><a href="edit_auto_details.php?id=<?php echo $id; ?>">Edit</a>&nbsp;&nbsp; <a href="javascript:confirm_delete(<?php echo $id; ?>);">Delete</a></span></td>
  </tr>
  <?php
  }
  ?>
</table>
</body>
</html>