<?php session_start();
if(!isset($_SESSION['so_cuserId'])) 
{ header("Location:index.php");}
include("conn.php");

$id = $_REQUEST['id'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Admin</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
<script language="JavaScript" src="calendar_us.js"></script>
	<link rel="stylesheet" href="calendar.css">

<style type="text/css">
<!--
.style1 {color: #333333}
.style2 {color: #FF0000}
-->
</style>
</head>

<body>
<form name="form3" method="post" action="admin_winners.php"  enctype="multipart/form-data">
  <table width="890" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="890" align="left" valign="top">
      <?php
  
	
		
	// Check Error
	

	
?>
      <table width="648" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
         
          <td colspan="3" bgcolor="#F2E7E1"><? include("index.html"); ?>
            &nbsp;</td>
        </tr>
        <!-- <tr>
    <td>Facility</td>
    <td><input type="text" name="txt_auto_facility" value="<?php //echo $facility; ?>" /></td>
  </tr>-->
        <tr>
          <td width="213" height="68" bgcolor="#E4EDEC"><div align="right">Sale Date</div></td>
          <td width="252" bgcolor="#E4EDEC"><div align="left">
           <input type="hidden" name="id" id="id"  value="<? echo $id; ?>" />
              <input type="text" name="timestamp" id="timestamp"  value="<? echo $auto_saledate; ?>" />
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
          </div>            </td>
          <td width="163" bgcolor="#E4EDEC"><div align="right"></div>            <div align="left">
              <label></label>
              </div></td>
          </tr>
        <tr>
          <td colspan="3" bgcolor="#E4EDEC"><table width="605" border="1" align="center">
            <tr>
              <td width="77">Lot No</td>
              <td width="77">UserId</td>
              <td width="77">Bid Amount</td>
              <td width="77">Sale Date</td>
              <td width="102">Access</td>
              
            </tr>
            <? 
	  
	 //$sql = "SELECT max(bid_amt),lot_no,auto_saledate ,user_id,usertype  ,auto_id , type_bid  FROM auction_bidval , tbl_automobile_details where auto_saledate = '".$_REQUEST[ 'timestamp']."' and lot_no=stockno and user_id='admin' group by lot_no";
	 $sql = "SELECT max(bid_amt),lot_no,auto_saledate ,user_id,usertype  ,auto_id , type_bid  FROM auction_bidval , tbl_automobile_details where auto_saledate = '".$_REQUEST[ 'timestamp']."' and lot_no=stockno group by lot_no";
	$rs=mysql_query($sql);
	
	while($row=mysql_fetch_array($rs))
	         {
			 if($row['user_id']=='admin')
			 {
			
	?>
         <tr>
              <td width="77"><a href="display_auto.php?id=<? echo $row['auto_id']; ?>"><? echo $row['lot_no']; ?></a> </td>
              <td width="77"><? echo  $row['user_id']; ?></td>
              <td width="77"><? echo  $row[0]; ?></td>
              <td width="77"><? echo  $row[ 'auto_saledate']; ?></td>
              <td width="102"><? echo  $row['usertype']; ?></td>
              
        </tr>
	<?  }}
	  ?>
          </table></td>
          </tr>
      </table></td>
    </tr>
  </table>
</form>
</body>
</html>
