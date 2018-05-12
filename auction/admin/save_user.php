<?php session_start(); 
include("conn.php");
	$cname=$_POST['text_cname'];
	$ccode=$_POST['text_code'];
	$fname=$_POST['text_fname'];
	$lname=$_POST['text_lname'];
	$street=$_POST['text_street'];
	$city=$_POST['text_city'];
	$state=$_POST['text_state'];
	$post=$_POST['text_post'];
	$country=$_POST['text_country'];
	$phone=$_POST['text_ph'];
	$extension=$_POST['text_extn'];
	$fax=$_POST['text_fax'];
	$email=$_POST['text_email'];
$sql=mysql_query("insert into owners(Customer_ID,Company_Code,Company_Name,Contact_First_Name,Contact_Last_Name,Billing_Street_Number,Billing_City,Billing_State_Province,Billing_Postal_Code,Billing_Country_Region,Phone_Number,Extension,Fax_Number,Email_Address)values(NULL,'$ccode','$cname','$fname','$lname','$street','$city','$state','$post','$country','$phone','$extension','$fax','$email')")or die(mysql_error());
header("Location: home.php");
?>

