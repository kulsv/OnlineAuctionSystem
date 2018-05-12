<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loseparts</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="save_user.php">
<?php
/*include("conn.php");
$cid=$_GET['id'];
$ret=mysql_query("Select * from Customers where Customer_ID='$cid'") or die("Cannot fetch customer details");
if($recs=mysql_fetch_array($ret))
{
echo "<input type=hidden name=hdc id=hdc value=$cid>";
	$name=$recs['Company_Name'];
	$code=$recs['Company_Code'];
	$login=$recs['Login'];
	$pass=$recs['Password'];
	$access=$recs['Access'];
	$suspend=$recs['text_sus'];
	$fname=$recs['Contact_First_Name'];
	$lname=$recs['Contact_Last_Name'];
	$street=$recs['Billing_Street_Number'];
	$city=$recs['Billing_City'];
	$state=$recs['Billing_State_Province'];
	$post=$recs['Billing_Postal_Code'];
	$country=$recs['Billing_Country_Region'];
	$phone=$recs['Phone_Number'];
	$extension=$recs['Extension'];
	$fax=$recs['Fax_Number'];
	$email=$recs['Email_Address'];
	$desc=$recs['Notes'];
	$service=$recs['Service'];
	
}*/
?>
<div align="center">
  <table width="615" border="0">
    <tr>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td width="145"><div align="left"><strong>Company Name: </strong></div></td>
      <td width="154"><label>
        <div align="left">
          <input type="text" name="text_cname" id="text_cname" />
          </div>
      </label></td>
      <td width="129"><div align="left"><strong>Company Code:</strong></div></td>
      <td width="135"><label>
        <div align="left">
          <input type="text" name="text_code" id="text_code" />
          </div>
      </label></td>
    </tr>
    <tr>
      <td><div align="left"><strong>Contact First Name:</strong></div></td>
      <td><label>
        <div align="left">
          <input type="text" name="text_fname" id="text_fname" />
          </div>
      </label></td>
      <td><div align="left"><strong>Contact Last Name</strong></div></td>
      <td><label>
        <div align="left">
          <input type="text" name="text_lname" id="text_lname"/>
          </div>
      </label></td>
    </tr>
    <tr>
      <td colspan="4"><div align="left"><strong>Billing Address</strong></div></td>
    </tr>
    <tr>
      <td><div align="left"><strong>Street Number</strong></div></td>
      <td><label>
        <div align="left">
          <input type="text" name="text_street" id="text_street"/>
          </div>
      </label></td>
      <td><div align="left"><strong>City </strong></div></td>
      <td><label>
        <div align="left">
          <input type="text" name="text_city" id="text_city" />
          </div>
      </label></td>
    </tr>
    <tr>
      <td><div align="left"><strong>State /Province</strong></div></td>
      <td><label>
        <div align="left">
          <input type="text" name="text_state" id="text_state"/>
          </div>
      </label></td>
      <td><div align="left"><strong>Postal Code/Index</strong></div></td>
      <td><label>
        <div align="left">
          <input type="text" name="text_post" id="text_post" />
          </div>
      </label></td>
    </tr>
    <tr>
      <td><div align="left"><strong>Country</strong></div></td>
      <td><label>
        <div align="left">
          <input type="text" name="text_country" id="text_country" />
          </div>
      </label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="left"><strong>Phone Number </strong></div></td>
      <td><label>
        <div align="left">
          <input type="text" name="text_ph" id="text_ph" />
          </div>
      </label></td>
      <td><div align="left"><strong>Extension</strong></div></td>
      <td><label>
        <div align="left">
          <input type="text" name="text_ext" id="text_ext" />
          </div>
      </label></td>
    </tr>
    <tr>
      <td><div align="left"><strong>Fax Number </strong></div></td>
      <td><label>
        <div align="left">
          <input type="text" name="text_fax" id="text_fax" />
          </div>
      </label></td>
      <td><div align="left"><strong>Email</strong></div></td>
      <td><label>
        <div align="left">
          <input type="text" name="text_email" id="text_email" />
          </div>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="add" id="add" value="Add Customer"  />
      </label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  </div>
</form>
</body>
</html>
