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
<form name="form3" method="post" action="edit_auto_details_complete.php"  enctype="multipart/form-data">
  <table width="890" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="890" align="left" valign="top">
          <?php

	$sql = "SELECT * FROM tbl_automobile_details WHERE auto_id = '".$id ."'";
	$rs=mysql_query($sql);
		
	// Check Error
	if (!$rs)
	{ exit("Error in SQL: ". mysql_error());}

	while($row=mysql_fetch_array($rs))
	{
	  $id=$row['auto_id'];
	  $userid=$row['userId'];
	  $ayear=$row['auto_year'];
	  $make=$row['auto_make'];
	  $model=$row['auto_model'];
	  //$facility=$row['auto_facility'];
	  $saledate=$row['auto_saledate'];
		$state=$row['state'];
		$city=$row['city'];
		$y = substr($saledate, 0,4);
		$m = substr($saledate, 4,2);
		$d = substr($saledate, 6);
	  
	  $odometer=$row['auto_odometer'];
	  $title=$row['auto_title'];
	  $damage=$row['auto_damage'];
	  $minbid=$row['auto_minbid'];
	  $image1=$row['auto_image1'];
	  $image2=$row['auto_image2'];
	  $image3=$row['auto_image3'];
	  $image4=$row['auto_image4'];
	  $image5=$row['auto_image5'];
	  $video=$row['auto_video'];
	  $productid=$row['auto_productid'];
	  $status=$row['status'];
	  
$pdamage=$row['primarydamage'];
$sdamage=$row['secondarydamage'];
$avalue=$row['actualvalue'];
$rcost=$row['repaircost'];
$vin=$row['vin'];
$bstyle=$row['bodystyle'];
$color=$row['color'];
$engine=$row['engine'];
$drive=$row['drive'];
$cylinder=$row['cylinder'];
$fuel=$row['fuel'];
$keys=$row['product_key'];
	  
	  
	  
	  
	  
	  
	  
	  
	
?>
          <table width="648" border="1" align="center" cellpadding="2" cellspacing="2">
            <tr>
              <input type="hidden" name="auto_id" readonly="readonly" value="<?php echo $id; ?>" />
              <input type="hidden" name="userid" value="<?php echo $userid; ?>" />
              <td colspan="4" bgcolor="#F2E7E1"><? include("index.html"); ?>&nbsp;</td>
            </tr>
            <tr>
              <td width="188" bgcolor="#E4EDEC"><div align="right">Year</div></td>
              <td width="149" bgcolor="#E4EDEC"><div align="left">
              
                 <input type="text" name="autor_id" readonly="readonly" value="<?php echo $ayear; ?>" />
              </div></td>
              <td width="125" bgcolor="#E4EDEC"><div align="right"></div></td>
              <td width="150" bgcolor="#E4EDEC"><div align="left"></div></td>
            </tr>
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Make</div></td>
              <td bgcolor="#E4EDEC"><input type="text" readonly="readonly" value="<? echo $make;?>"/></td>
              <td bgcolor="#E4EDEC"><div align="right">City</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="city"  class="new1" value="<? echo $city; ?>" readonly="readonly" />
              </div></td>
            </tr>
           
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Sale Date</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="timestamp" value="<? echo $saledate;?>" readonly="readonly" />
                <!--<script language="JavaScript" type="text/javascript">
	new tcal ({
		// form name
		'formname': 'form3',
		// input name
		'controlname': 'timestamp'
	});

	              </script>-->
                &nbsp;</div></td>
              <td bgcolor="#E4EDEC"><div align="right"></div></td>
              <td bgcolor="#E4EDEC"><div align="left"></div></td>
            </tr>
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Odometer</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="txt_auto_odometer" value="<?php echo $odometer; ?>" readonly="readonly" />
              </div></td>
              <td bgcolor="#E4EDEC"><div align="right"></div></td>
              <td bgcolor="#E4EDEC"><div align="left"></div></td>
            </tr>
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Title</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="txt_auto_title" value="<?php echo $title; ?>"  readonly="readonly"/>
              </div></td>
              <td bgcolor="#E4EDEC"><div align="right"></div></td>
              <td bgcolor="#E4EDEC"><div align="left"></div></td>
            </tr>
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Damage Type</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" value="<? echo $damage; ?> " readonly="readonly"/>
              </div></td>
              <td bgcolor="#E4EDEC"><div align="right"></div></td>
              <td bgcolor="#E4EDEC"><div align="left"></div></td>
            </tr>
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Primary Damage</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="pdamage" id="pdamage" class="new1" value="<?php echo $pdamage; ?>"  readonly="readonly"/>              
              </div></td>
              <td bgcolor="#E4EDEC"><div align="right">Secondary Damage</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="sdamage" id="sdamage" class="new1" value="<?php echo $sdamage; ?>"  readonly="readonly"/>
              </div></td>
            </tr>
           
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Actual Value</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="avalue" id="avalue" class="new1" value="<?php echo $avalue; ?>" readonly="readonly"/>              
              </div></td>
              <td bgcolor="#E4EDEC"><div align="right">Minimum Bid</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="txt_auto_minbid" value="<?php echo $minbid; ?>" readonly="readonly"/>
              </div></td>
            </tr>
           
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Repair Cost</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="rcost" id="rcost" class="new1" value="<?php echo $rcost; ?>" readonly="readonly" />              
              </div></td>
              <td bgcolor="#E4EDEC"><div align="right"></div></td>
              <td bgcolor="#E4EDEC"><div align="left"></div></td>
            </tr>
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">VIN</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="vin" id="vin" class="new1" value="<?php echo $vin; ?>" readonly="readonly" />              
              </div></td>
              <td bgcolor="#E4EDEC"><div align="right"></div></td>
              <td bgcolor="#E4EDEC"><div align="left"></div></td>
            </tr>
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Body Style</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="bstyle" id="bstyle" class="new1" value="<?php echo $bstyle; ?>" readonly="readonly" />              
              </div></td>
              <td bgcolor="#E4EDEC"><div align="right">Color</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="color" id="color" class="new1" value="<?php echo $color; ?>" readonly="readonly" />
              </div></td>
            </tr>
            
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Engine</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="engine" id="engine" class="new1" value="<?php echo $engine; ?>" readonly="readonly" />              
              </div></td>
              <td bgcolor="#E4EDEC"><div align="right">Drive</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="drive" id="drive" class="new1" value="<?php echo $drive; ?>" readonly="readonly" />
              </div></td>
            </tr>
            
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Cylinders</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="cylinder" id="cylinder" class="new1" value="<?php echo $cylinder; ?>" readonly="readonly" />              
              </div></td>
              <td bgcolor="#E4EDEC"><div align="right">Fuel</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="fuel" id="fuel" class="new1" value="<?php echo $fuel; ?>" readonly="readonly" />
              </div></td>
            </tr>
            
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Keys</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="keys" id="keys" class="new1" value="<?php echo $keys; ?>" readonly="readonly" />              
              </div></td>
              <td bgcolor="#E4EDEC"><div align="right"></div></td>
              <td bgcolor="#E4EDEC"><div align="left"></div></td>
            </tr>
            <?php /*?><tr>
    <td>Stock No</td>
    <td><input type="text" name="txt_auto_productid" value="<?php echo $productid; ?>" /></td>
  </tr><?php */?>
            <tr>
              <?php
mysql_close($link);
}
?>
             
            </tr>
        </table>
     </td>
    </tr>
  </table>
</form>
</body>
</html>
