<?php session_start();
include("conn.php");
if(!isset($_SESSION['so_cuserId'])) 
{ header("Location:index.php");}


$id = $_REQUEST['id'];
//echo $id;

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
.style3 {font-weight: bold}
.style4 {color: #000000}
.style7 {
	font-size: 16px;
	color: #000000;
	font-weight: bold;
}
.style9 {color: #000000; font-weight: bold; }
-->
</style>
</head>

<body>
<form name="form3" method="get" action="edit_askprice.php"  enctype="multipart/form-data">
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
        <form action="" method="post">
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
       <? include("conn.php"); ?>
         <?
        // echo "id".$id;
					 $queryt="select userId from tbl_automobile_details where auto_id='".$id."'";
					 
						   $resg=mysql_query($queryt) or die(mysql_error());
						    $resh=mysql_fetch_array($resg) or die('resh');
						  	$uid =$resh['userId']; 
						 
						 // echo "user id".$uid;
						 
						   $query="select * from cuser where userName='".$uid."'";
						   $res=mysql_query($query);
						   while($res1=mysql_fetch_array($res))
						   {
						   $id=$res1['id'];
						   $name=$res1['userName'];
						   $pword=$res1['password'];
						   $access=$res1['access'];
						   $cname=$res1['company_name'];
						   $ccode=$res1['company_code'];
						   $cfname=$res1['cfname'];
						   $clname=$res1['clname'];
						   $type=$res1['type'];
						   $status=$res1['status'];
						   $address1=$res1['address1'];
						   $address2=$res1['address2'];
						   $country=$res1['country'];
						   $state=$res1['state'];
						   $city=$res1['city'];
						   $strno=$res1['strno'];
						   $zip=$res1['zip'];
						   $phno=$res1['phno'];
						   $ext=$res1['ext'];
				    	   $fax=$res1['fax'];
								 
						   }
						   ?>
          <table width="781" border="0" align="center">
            <tr>
              <td colspan="4" bgcolor="#E4EDEC">
                <div align="center"><span class="style7">OWNER  DETAILS                </span>                </div>                </td>
            </tr>
            <tr>
              <td width="117" height="21" bgcolor="#E4EDEC">&nbsp;</td>
              <td width="163" bgcolor="#E4EDEC"><label></label></td>
              <td width="137" bgcolor="#E4EDEC"><div align="left"></div></td>
              <td width="346" bgcolor="#E4EDEC"><div align="left">
                  <input type="hidden" name="ccode"  id="ccode" class="new1" value="0"/>
                  <input type="hidden" name="cid"  id="cid" class="new1" value="<? echo $id; ?>"/>
              </div></td>
            </tr>
            <tr>
              <td height="26" bgcolor="#E4EDEC"><div align="left"><span class="style4">UserName</span></div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <input type="text" name="txtuid" class="new1" value="<? echo $name; ?>" />
              </div></td>
              <td bgcolor="#E4EDEC">&nbsp;</td>
              <td bgcolor="#E4EDEC">&nbsp;</td>
            </tr>
            <tr>
              <td height="30" bgcolor="#E4EDEC"><div align="left"><span class="style4">Password</span></div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <input type="text" class="new1" name="txtpwd" value="<? echo $pword; ?>"/>
              </div></td>
              <td bgcolor="#E4EDEC"><div align="left"><span class="style4">Access</span></div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <select name="access" id="access" class="new1" value="<? echo $access; ?>" >
                    <option value="<? echo $access; ?>"><? echo $access; ?></option>
                    <option value="JUNKYARD">JUNKYARD</option>
                    <option value="DEALER SHIP">DEALER SHIP</option>
                    <option value="DEALER SHIP">PUBLIC</option>
                  </select>
              </div></td>
            </tr>
            <tr>
              <td height="32" bgcolor="#E4EDEC"><div align="left"><span class="style4">Company Name</span> </div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <input type="text" name="cname" id="cname" class="new1" value="<? echo $cname; ?>"/>
              </div></td>
              <td bgcolor="#E4EDEC">&nbsp;</td>
              <td bgcolor="#E4EDEC">&nbsp;</td>
            </tr>
            <tr>
              <td bgcolor="#E4EDEC"><div align="left"><span class="style4"> First Name </span></div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <input name="cfname" type="text" class="new1" value="<? echo $cfname; ?>" />
              </div></td>
              <td bgcolor="#E4EDEC"><div align="left"><span class="style4">Last Name </span></div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <input name="clname" type="text" class="new1" value="<? echo $clname; ?>" />
              </div></td>
            </tr>
            <tr>
              <td height="21" bgcolor="#E4EDEC"><div align="left"><span class="style3">Address </span></div></td>
              <td bgcolor="#E4EDEC"><div align="left"></div></td>
              <td bgcolor="#E4EDEC"><div align="left"><span class="style4"></span></div></td>
              <td bgcolor="#E4EDEC"><div align="left"></div></td>
            </tr>
            <tr>
              <td height="24" bgcolor="#E4EDEC"><div align="left"><span class="style4">Address1</span></div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <input name="address1" type="text"  class="address1" style="width:135px;" value="<? echo $address1; ?>" />
              </div></td>
              <td bgcolor="#E4EDEC">&nbsp;</td>
              <td bgcolor="#E4EDEC">&nbsp;</td>
            </tr>
            <tr>
              <td height="24" bgcolor="#E4EDEC"><div align="left"><span class="style4">Address2</span></div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <input name="address2" type="text"  class="new1" value="<? echo $address2; ?>"/>
              </div></td>
              <td bgcolor="#E4EDEC">&nbsp;</td>
              <td bgcolor="#E4EDEC">&nbsp;</td>
            </tr>
            <tr>
              <td height="27" bgcolor="#E4EDEC"><div align="left"><span class="style4">Country</span></div></td>
              <td bgcolor="#E4EDEC"><div id="con" align="left">
                  <select name="txtcountry" id="txtcountry" class="new1" onchange="change()" style="width:140px;" >
                    <option value="">----- Select -----</option>
                    <option value="DZ" selected="selected"><? echo $country; ?></option>
                    <option value="Angola">Angola</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia And Herzegovina">Bosnia And Herzegovina</option>
                    <option value="Brazil">Brazil</option>
                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Congo">Congo</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Greece">Greece</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Honduras">Honduras</option>
                    <option value="HK">Hong Kong</option>
                    <option value="Hong Kong">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India" >India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran">Iran</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="Luxembourg">Lybian Arab Jamahiriya</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Malta">Malta</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="Antilles">Antilles</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Panama">Panama</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Republic Of Moldova">Republic Of Moldova</option>
                    <option value="Republic of Korea">Republic of Korea</option>
                    <option value="Romania">Romania</option>
                    <option value="Russian Federation">Russian Federation</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serbia And Montenegro">Serbia And Montenegro</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tanzania">Tanzania</option>
                    <option value="Thailand">Thailand</option>
                    <option value="The Former Yugoslav Republic Of Macedonia"> Republic Of Macedonia</option>
                    <option value="Trinidad And Tobago">Trinidad And Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="VietNam">VietNam</option>
                    <option value="Western Sahara">Western Sahara</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                  </select>
              </div></td>
              <td bgcolor="#E4EDEC"><div id="state1" align="left"><span class="style4">State/Province</span></div></td>
              <td bgcolor="#E4EDEC"><div id="state" style="visibility:visible"  align="left">
                  <select name="txtstate1" size="1" class="new1" id="txtstate1" style="width:140px;"   value="<? echo $state; ?>" >
                    <option value="">----- Select -----</option>
                    <option value="Alabama" selected="selected"><? echo $state; ?></option>
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
            </tr>
            <tr>
              <td height="24" bgcolor="#E4EDEC"><div align="left"><span class="style4">City</span></div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <input name="city2" type="text"  class="new1" value="<? echo $city; ?>"/>
              </div></td>
              <td bgcolor="#E4EDEC"><div align="left"><span class="style4">Street Number </span></div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <input name="stno" type="text" class="new1" value="<? echo $strno; ?>"/>
              </div></td>
            </tr>
            <tr>
              <td height="24" bgcolor="#E4EDEC"><div align="left"><span class="style4">Zip Code </span></div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <input class="new1" type="text" name="txtzip" id="txtzip" value="<? echo $zip; ?>" />
              </div></td>
              <td bgcolor="#E4EDEC"><div align="left"><span class="style4"></span></div></td>
              <td bgcolor="#E4EDEC"><div align="left"></div></td>
            </tr>
            <tr>
              <td height="36" bgcolor="#E4EDEC"><div align="left">
                  <p><span class="style4">Phone Number</span></p>
              </div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <input name="phno" type="text" class="new1" onchange="return FormValidate()" value="<? echo $phno; ?>"/>
              </div></td>
              <td bgcolor="#E4EDEC"><div align="left"></div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <input type="hidden" name="ext" class="new1" value="0"/>
              </div></td>
            </tr>
            <tr>
              <td height="24" rowspan="3" bgcolor="#E4EDEC"><div align="left"><span class="style4">Fax Number </span></div></td>
              <td rowspan="3" bgcolor="#E4EDEC"><div align="left">
                  <input name="fax" type="text" class="new1" value="<? echo $fax; ?>"/>
              </div></td>
              <td bgcolor="#E4EDEC"><span class="style9">CURRENT HIGHEST BID</span> :</td>
              <td bgcolor="#E4EDEC"><? echo $_REQUEST['own']; ?>&nbsp;</td>
            </tr>
            <tr>
              <td bgcolor="#E4EDEC"><span class="style9">ASKING PRICE :</span></td>
              <td bgcolor="#E4EDEC">
                <input name="bid" type="hidden" class="new1" id="bid" value="<? echo $_REQUEST['own'];?>"/>
                <input type="text" name="txt_auto_minbid2" value="<?php echo $minbid; ?>" readonly="readonly"/>
                <input type="submit" value="Update" onclick="return validate222();" onkeydown="return validate(chk1);" />
                <input type="button" value="Cancel" onclick="send()" />
             </td>
            </tr>
            <tr>
              <td bgcolor="#E4EDEC">&nbsp;</td>
              <td bgcolor="#E4EDEC">&nbsp;</td>
            </tr>
            <tr>
              <td height="37" valign="top" bgcolor="#E4EDEC"><div align="left"><span class="style4"></span></div></td>
              <td colspan="3" valign="top" bgcolor="#E4EDEC"><div align="left" style="visibility:hidden">
                <textarea name="notes" cols="0" rows="0" style="visibility:hidden" ></textarea>
                  <span class="style9">                </span></div></td>
            </tr>
            <tr>
              <td height="45" colspan="4" bgcolor="#E4EDEC"><label>
                  <div align="center">&nbsp;&nbsp;&nbsp;</label></td>
            </tr>
          </table>
      </td>
    </tr>
  </table>
  
</form>
</body>
</html>
