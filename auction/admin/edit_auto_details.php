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
    
    <script type="text/javascript">
/*else if (parseInt(document.firstform.txtzip.value)!=document.firstform.txtzip.value)
	{
		alert ("Zipcode must be a number");
		valid=false;
	}*/
	
function validate9999(thisform)
{
var valid=true;

	if (document.form3.txtstatus.value == "A")
	    {
	  if (document.form3.access1.value == "")
	     {
		alert ("Please select Access ");
		document.form3.access1.focus();
		valid=false;
		 }
		 if (document.form3.timestamp.value == "")
	{
		alert ("Please select Date for auction ");
		document.form3.timestamp.focus();
		valid=false;
	}
	   }
	
	
	return valid;
	}
	</script>
    
    
    
    
    
    
    

<style type="text/css">
<!--
.style1 {color: #333333}
.style2 {color: #FF0000}
-->
</style>
<script type="text/javascript" src="adddetails.js" ></script>
<script type="text/javascript" src="adddetails2.js" ></script>
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
	 // echo "categ".$row['category'];
	  $sqlcat = "SELECT * FROM categories WHERE id = '".$row['category']."'";
	$rscat=mysql_query($sqlcat) or die(mysql_error());
	$r=mysql_fetch_array($rscat)or die(mysql_error());
	  
	  
	  $cat=$r['catname'];
	  
	 // echo "caatttt".$cat;
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
$usertype=$row['usertype'];
	  
	  
	  
	  
	  
	  
	  
	  
	
?>
          <table width="705" border="1" align="center" cellpadding="2" cellspacing="2">
            <tr>
              <input type="hidden" name="auto_id" value="<?php echo $id; ?>" />
              <input type="hidden" name="userid" value="<?php echo $userid; ?>" />
              <td colspan="4" bgcolor="#F2E7E1"><?  include("index.html"); ?>&nbsp;</td>
            </tr>
            <tr>
              <td width="188" bgcolor="#E4EDEC"><div align="right">Year</div></td>
              <td width="149" bgcolor="#E4EDEC"><div align="left">
                <select name="txt_auto_year">
                  <?php	
		$currYear = date('Y');
		for($year=1940;$year<=$currYear;$year++)
		{
		  if($year == $ayear)
		  {	echo "<option value='$year' selected='selected'>$year</option>";}
		  else
		  {	echo "<option value='$year'>$year</option>";}
		}
?>
                </select>
              </div></td>
              <td width="125" bgcolor="#E4EDEC"><div align="right"></div></td>
              <td width="207" bgcolor="#E4EDEC"><div align="left"></div></td>
            </tr>
            <tr>
              <td width="188" bgcolor="#E4EDEC"><div align="right">Category</div></td>
              <td bgcolor="#E4EDEC"><select name="cat" id="cat" onchange="subcategory(this.value);">
            <?  $query3="select * from categories  where catname='".$cat."'";
	$result2=mysql_query($query3);
	$row2=mysql_fetch_array($result2);
	?>
                <option value="<? echo $row2['id'];?>"><? echo $row2['catname'];?></option>
                <?php
	$query3="select * from categories order by catname";
	$result2=mysql_query($query3);
	
	// Check Error
	if (!$result2)
	{ exit("Error in SQL: ". mysql_error());}
	
	while($row2=mysql_fetch_array($result2))
	{
	            $cid=$row2['id'];
				$cname=$row2['catname'];
				//echo "cid".$cid;
				//echo "cname".$cname;
		echo "<option value=$cid>$cname</option>";
	}
	?>
              </select></td>
              <td width="125" bgcolor="#E4EDEC">&nbsp;</td>
              <td width="207" bgcolor="#E4EDEC">&nbsp;</td>
            </tr>
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Make</div></td>
              <td bgcolor="#E4EDEC"><div id="state_div">
                         <? /* $query3="select * from subcat  where subname='".$make."'";
	$result2=mysql_query($query3);
	$row2=mysql_fetch_array($result2);
	*/?>   <input type="hidden" name="flag"  id="flag" value="1" />
                 <select name="txt_auto_make" id="txt_auto_make" class="new1">
                 
            <option value="<? echo $make ;?>"><? echo $make ;?></option>
          </select>
                <!--<input type="text" name="txt_auto_make" id="txt_auto_make" value="/**/" />-->
              </div></td>
              <td bgcolor="#E4EDEC"><div align="right">Model</div></td>
              <td bgcolor="#E4EDEC">  <div id="model_div"><input type="text" name="txt_auto_model" class="new1" value="<? echo $model ;?>"/></div> </td>
            </tr>
           
            <!-- <tr>
    <td>Facility</td>
    <td><input type="text" name="txt_auto_facility" value="<?php //echo $facility; ?>" /></td>
  </tr>-->
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">State</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <select name="state" id="state"  class="new1" onchange="change()" >
                  <option value="<? echo $state; ?>"><? echo $state; ?></option>
                  <option value="Alabama">Alabama</option>
                  <option value="Alaska">Alaska</option>
                  <option value="Arizona">Arizona</option>
                  <option value="Arkansas">Arkansas</option>
                  <option value="California">California</option>
                  <option value="Colorado">Colorado</option>
                  <option value="Connecticut">Connecticut</option>
                  <option value="Delaware">Delaware</option>
                  <option value="District of Columbia">District of Columbia</option>
                  <option value="Florida">Florida</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Hawaii">Hawaii</option>
                  <option value="Idaho">Idaho</option>
                  <option value="Illinois">Illinois</option>
                  <option value="Indiana">Indiana</option>
                  <option value="Iowa">Iowa</option>
                  <option value="Kansas">Kansas</option>
                  <option value="Kentucky">Kentucky</option>
                  <option value="Louisiana">Louisiana</option>
                  <option value="Maine">Maine</option>
                  <option value="Maryland">Maryland</option>
                  <option value="Massachusetts">Massachusetts</option>
                  <option value="Michigan">Michigan</option>
                  <option value="Minnesota">Minnesota</option>
                  <option value="Mississippi">Mississippi</option>
                  <option value="Missouri">Missouri</option>
                  <option value="Montana">Montana</option>
                  <option value="Nebraska">Nebraska</option>
                  <option value="Nevada">Nevada</option>
                  <option value="New Hampshire">New Hampshire</option>
                  <option value="New Jersey">New Jersey</option>
                  <option value="New Mexico">New Mexico</option>
                  <option value="New York">New York</option>
                  <option value="North Carolina">North Carolina</option>
                  <option value="North Dakota">North Dakota</option>
                  <option value="Ohio">Ohio</option>
                  <option value="Oklahoma">Oklahoma</option>
                  <option value="Oregon">Oregon</option>
                  <option value="Pennsylvania">Pennsylvania</option>
                  <option value="Rhode Island">Rhode Island</option>
                  <option value="South Carolina">South Carolina</option>
                  <option value="South Dakota">South Dakota</option>
                  <option value="Tennessee">Tennessee</option>
                  <option value="Texas">Texas</option>
                  <option value="Utah">Utah</option>
                  <option value="Vermont">Vermont</option>
                  <option value="Virginia">Virginia</option>
                  <option value="Washington">Washington</option>
                  <option value="West Virginia">West Virginia</option>
                  <option value="Wisconsin">Wisconsin</option>
                  <option value="Wyoming">Wyoming</option>
                </select>
              </div></td>
              <td bgcolor="#E4EDEC"><div align="right">City</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="city"  class="new1" value="<? echo $city; ?>"/>
              </div></td>
            </tr>
           
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Sale Date</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="timestamp" value="<? echo $saledate;?>" />
                <script language="JavaScript" type="text/javascript">
	new tcal ({
		// form name
		'formname': 'form3',
		// input name
		'controlname': 'timestamp'
	});

	              </script>
                &nbsp;</div></td>
              <td bgcolor="#E4EDEC"><div align="right"></div></td>
              <td bgcolor="#E4EDEC"><div align="left"></div></td>
            </tr>
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Odometer</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="txt_auto_odometer" value="<?php echo $odometer; ?>" />
              </div></td>
              <td bgcolor="#E4EDEC"><div align="right"></div></td>
              <td bgcolor="#E4EDEC"><div align="left"></div></td>
            </tr>
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Title</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="txt_auto_title" value="<?php echo $title; ?>" />
              </div></td>
              <td bgcolor="#E4EDEC"><div align="right"></div></td>
              <td bgcolor="#E4EDEC"><div align="left"></div></td>
            </tr>
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Damage Type</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
         <? $query3="select distinct type from tbl_damage order by type";
	           $result2=mysql_query($query3);?>
             <select name="damage" id="damage" class="new1">
              <option value="<? echo $damage;?>"><? echo $damage;?></option>
            <? while($row2=mysql_fetch_array($result2))
 { ?>
			 
              
               <option value="<? echo $row2['type']; ?>" ><? echo $row2['type']; ?></option>
               
             <? } ?>
             </select>
         </div></td>
              <td bgcolor="#E4EDEC"><div align="right"></div></td>
              <td bgcolor="#E4EDEC"><div align="left"></div></td>
            </tr>
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Primary Damage</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="pdamage" id="pdamage" class="new1" value="<?php echo $pdamage; ?>" />              
              </div></td>
              <td bgcolor="#E4EDEC"><div align="right">Secondary Damage</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="sdamage" id="sdamage" class="new1" value="<?php echo $sdamage; ?>" />
              </div></td>
            </tr>
           
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Actual Value</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="avalue" id="avalue" class="new1" value="<?php echo $avalue; ?>"/>              
              </div></td>
              <td bgcolor="#E4EDEC"><div align="right">Asking Price</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="txt_auto_minbid" value="<?php echo $minbid; ?>" />
              </div></td>
            </tr>
           
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Repair Cost</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="rcost" id="rcost" class="new1" value="<?php echo $rcost; ?>"/>              
              </div></td>
              <td bgcolor="#E4EDEC"><div align="right"></div></td>
              <td bgcolor="#E4EDEC"><div align="left"></div></td>
            </tr>
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">VIN</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="vin" id="vin" class="new1" value="<?php echo $vin; ?>"/>              
              </div></td>
              <td bgcolor="#E4EDEC"><div align="right"></div></td>
              <td bgcolor="#E4EDEC"><div align="left"></div></td>
            </tr>
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Body Style</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="bstyle" id="bstyle" class="new1" value="<?php echo $bstyle; ?>"/>              
              </div></td>
              <td bgcolor="#E4EDEC"><div align="right">Color</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="color" id="color" class="new1" value="<?php echo $color; ?>"/>
              </div></td>
            </tr>
            
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Engine</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="engine" id="engine" class="new1" value="<?php echo $engine; ?>"/>              
              </div></td>
              <td bgcolor="#E4EDEC"><div align="right">Drive</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="drive" id="drive" class="new1" value="<?php echo $drive; ?>"/>
              </div></td>
            </tr>
            
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Cylinders</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="cylinder" id="cylinder" class="new1" value="<?php echo $cylinder; ?>"/>              
              </div></td>
              <td bgcolor="#E4EDEC"><div align="right">Fuel</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="fuel" id="fuel" class="new1" value="<?php echo $fuel; ?>"/>
              </div></td>
            </tr>
            
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Keys</div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                <input type="text" name="keys" id="keys" class="new1" value="<?php echo $keys; ?>"/>              
              </div></td>
              <td bgcolor="#E4EDEC"><div align="right"></div></td>
              <td bgcolor="#E4EDEC"><div align="left"></div></td>
            </tr>
            <?php /*?><tr>
    <td>Stock No</td>
    <td><input type="text" name="txt_auto_productid" value="<?php echo $productid; ?>" /></td>
  </tr><?php */?>
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Upload Image</div></td>
              <td colspan="3" bgcolor="#E4EDEC"><? echo $image1; ?><br />
                  <br />
                  <input type="hidden" name="h1" id="ifile1" value="<?php  echo $image1; ?>" />
                  <input type="file" name="ifile1" /></td>
            </tr>
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Upload Image</div></td>
              <td colspan="3" bgcolor="#E4EDEC"><? echo $image2; ?><br />
                  <br />
                  <input type="hidden" name="h2" id="ifile2" value="<?php echo $image2; ?>" />
                  <input type="file" name="ifile2" value="<?php echo $image2; ?>" /></td>
            </tr>
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Upload Image</div></td>
              <td colspan="3" bgcolor="#E4EDEC"><? echo $image3; ?><br />
                  <br />
                  <input type="hidden" name="h3" id="ifile3" value="<?php echo $image3; ?>" />
                  <input type="file" name="ifile3" value="<?php echo $image3; ?>" /></td>
            </tr>
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Upload Image</div></td>
              <td colspan="3" bgcolor="#E4EDEC"><? echo $image4; ?><br />
                  <br />
                  <input type="hidden" name="h4" id="ifile4" value="<?php echo $image4; ?>" />
                  <input type="file" name="ifile4" value="<?php echo $image4; ?>" /></td>
            </tr>
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Upload Image</div></td>
              <td colspan="3" bgcolor="#E4EDEC"><? echo $image5; ?><br />
                  <br />
                  <input type="hidden" name="h5" id="ifile5" value="<?php echo $image5; ?>" />
                  <input type="file" name="ifile5" value="<?php echo $image5; ?>" /></td>
            </tr>
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Upload Video</div></td>
              <td colspan="3" bgcolor="#E4EDEC"><? echo $video; ?><br />
                  <br />
                  <input type="hidden" name="vfile" id="vfile" value="<?php echo $video; ?>" />
                  <input type="file" name="vfile"/></td>
            </tr>
            <tr>
              <td bgcolor="#E4EDEC"><div align="right">Status</div></td>
              <td colspan="3" bgcolor="#E4EDEC"><select name="txtstatus" id="txtstatus" class="co"  >
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
              </select></td>
            </tr>
            <tr>
              <td height="32" bgcolor="#E4EDEC"><div align="right">Access</div></td>
              <td colspan="3" bgcolor="#E4EDEC">
              
              <? if($usertype=="JUNKYARD"){ ?>
              <select name="access1" id="access1" class="co"  >
                <option value="JUNKYARD" selected="selected">JUNKYARD</option>
                <option value="DEALER SHIP">DEALER SHIP</option>
                <option value="PUBLIC">PUBLIC</option>
               </select><? } ?>
                <? if($usertype=="DEALER SHIP"){ ?>
              <select name="access1" id="access1" class="co"  >
                <option value="JUNKYARD" >JUNKYARD</option>
                <option value="DEALER SHIP" selected="selected">DEALER SHIP</option>
                <option value="PUBLIC">PUBLIC</option>
                </select>
               <? } ?>
               
                <? if($usertype=="PUBLIC"){ ?>
              <select name="access1" id="access1" class="co"  >
                <option value="JUNKYARD" >JUNKYARD</option>
                <option value="DEALER SHIP" >DEALER SHIP</option>
                <option value="PUBLIC" selected="selected">PUBLIC</option>
                </select>
               <? } ?>  
               
               <? if($usertype==""){ ?>
              <select name="access1" id="access1" class="co"  >
               <option value=""  selected="selected"></option>
                <option value="JUNKYARD" >JUNKYARD</option>
                <option value="DEALER SHIP" >DEALER SHIP</option>
                <option value="PUBLIC" >PUBLIC</option>
                </select>
               <? } ?>
               
                             </td>
            </tr>
            <tr>
              <?php
mysql_close($link);
}
?>
              <td><input type="submit" name="submit" value="Update" onclick="return validate9999();" /></td>
            </tr>
        </table>
     </td>
    </tr>
  </table>
</form>
</body>
</html>
