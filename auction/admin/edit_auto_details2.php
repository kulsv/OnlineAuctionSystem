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
<form name="form3" method="post" action="test.php"  enctype="multipart/form-data">
  <table width="890" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="890" align="left" valign="top">
      <?php

	$sql = "SELECT * FROM tbl_automobile_details WHERE auto_id = '".$id ."'";
	$rs=mysql_query($sql);
		
	// Check Error
	
	while($row=mysql_fetch_array($rs))
	{
	  $id=$row['auto_id'];
	  $status=$row['status'];
      $auto_saledate=$row['auto_saledate'];  
	  $usertype=$row['usertype']; 
	  }
	 // echo "status".$status;
	
?>
      <table width="648" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
         
          <td colspan="4" bgcolor="#F2E7E1"><?  include("index.html"); ?>
            &nbsp;</td>
        </tr>
        <!-- <tr>
    <td>Facility</td>
    <td><input type="text" name="txt_auto_facility" value="<?php //echo $facility; ?>" /></td>
  </tr>-->
        <tr>
          <td width="188" bgcolor="#E4EDEC"><div align="right">Sale Date</div></td>
          <td width="149" bgcolor="#E4EDEC"><div align="left">
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
            &nbsp;</div></td>
          <td width="93" bgcolor="#E4EDEC"><div align="right"></div></td>
          <td width="182" bgcolor="#E4EDEC"><div align="left"></div></td>
        </tr>
       
        <tr>
          <td bgcolor="#E4EDEC"><div align="right">Status</div></td>
          <td colspan="3" bgcolor="#E4EDEC"><p>
            <select name="txtstatus" id="txtstatus" class="co"  >
              <? if($status=="P")
	{
	?>
              <option value="P" selected="selected">Pending</option>
              <option value="A">Active</option>
              <?
			}
			else
			{
			?>
              <option value="P" >Pending</option>
              <option value="A" selected="selected">Active</option>
              <?
			}
			?>
              </select>
          </p>            </td>
        </tr>
        <tr>
          <td bgcolor="#E4EDEC"><div align="right">UserType</div></td>
          <td colspan="3" bgcolor="#E4EDEC"><label>
          <? if($usertype=="JUNKYARD")
		  {?>
            <select name="usertype" id="usertype">
              <option value="JUNKYARD" selected="selected">JUNKYARD</option>
              <option value="DEALER SHIP">DEALER SHIP</option>
              <option value="PUBLIC">PUBLIC</option>
            </select>
          <? }?>
          <? if($usertype=="PUBLIC")
		  {?>
            <select name="usertype" id="usertype">
              <option value="JUNKYARD" >JUNKYARD</option>
              <option value="DEALER SHIP">DEALER SHIP</option>
              <option value="PUBLIC" selected="selected">PUBLIC</option>
            </select>
          <? }?>
          <? if($usertype=="DEALER SHIP")
		  {?>
            <select name="usertype" id="usertype">
              <option value="JUNKYARD" >JUNKYARD</option>
              <option value="DEALER SHIP"selected="selected">DEALER SHIP</option>
              <option value="PUBLIC">PUBLIC</option>
            </select>
          <? }?>
          </label></td>
        </tr>
        <tr>
          <td bgcolor="#E4EDEC">&nbsp;</td>
          <td colspan="3" bgcolor="#E4EDEC"><input type="submit" name="submit" value="Update" /></td>
        </tr>
        <tr>
          <td bgcolor="#E4EDEC">&nbsp;</td>
          <td colspan="3" bgcolor="#E4EDEC">&nbsp;</td>
        </tr>
        <tr>
          <?php
mysql_close($link);

?>
        </tr>
      </table></td>
    </tr>
  </table>
</form>
</body>
</html>
