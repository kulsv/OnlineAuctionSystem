<html>
<style type="text/css">
#apDiv1 {
	position:absolute;
	left:337px;
	top:172px;
	width:598px;
	height:491px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:548px;
	top:474px;
	width:120px;
	height:26px;
	z-index:2;
}
</style>
<script>
function FormValidate(){/*
	
var accno = document.getElementById('acc_no').value;
if (accname==null || accname=="")
  {
  alert("accno must be filled out");
  return false;
  }


var accname = document.getElementById('acc_name').value;
if (accname==null || accname=="")
  {
  alert("accname must be filled out");
  return false;
  }

var cardno = document.getElementById('card_number').value;
if (cardno==null || cardno=="")
  {
  alert("Address must be filled out");
  return false;
  }

var accbal = document.getElementById('acc_balance').value;
if (accbal==null || accbal=="")
  {
  alert("accbal must be filled out");
  return false;
  }
  
  var zip = document.getElementById('zip').value;
if (zip==null || zip=="")
  {
  alert("Zip Code must be filled out");
  return false;
  }
  var password = document.getElementById('password').value;
if (password==null || password=="")
  {
  alert("password must be filled out");
  return false;
  }
  var confirmpassword = document.getElementById('confirmpassword').value;
if (confirmpassword==null || confirmpassword=="")
  {
  alert("confirmpassword must be filled out");
  return false;
  }
if(confirmpassword!=password)
{
	alert("password and confirm password does not match..!!!");
	 return false;
}
}
*/






</script>




<body>
<div id="apDiv1">
<form action="bank.php" method="post" onSubmit="return FormValidate()">
Account Number: &nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="acc_no" id="acc_no" maxlength="30" size="50px" ><br/>

Account Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="acc_name" id="acc_name" size="50px" style="color:#FF0000;"><br/>

Card Number: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="card_number" id="card_number" maxlength="16" size="50px" style="color:#FF0000;"><br/>

Account Balance: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="acc_balance" id="acc_balance" maxlength="16" size="50px" style="color:#FF0000;"><br/>

Card Type: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="card_type" id="card_type" maxlength="16" size="50px" style="color:#FF0000;"><br/>

Pincode: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="pincode" id="pincode" maxlength="4" size="50px" style="color:#FF0000;"><br/>

Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" name="password" id="password" maxlength="25" size="50px" style="color:#FF0000;"><br/>

confirm password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" name="confirm_password" id="confirm_password" maxlength="25" size="50px" style="color:#FF0000;"><br/>

Card Validity: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="date" name="card_validity" id="card_validity" ><br/>

Currency: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="currency" id="currency" maxlength="16" size="50px" style="color:#FF0000;"><br/><br/><br/>
<input type="submit" name="submit" id="submit">
<br/>
</form>


</div><div id="apDiv2">
<?php 
require 'connection.inc.php';
if(isset($_POST['submit']))
 {
	 
	$acc_no = $_POST['acc_no'];
    $acc_name = $_POST['acc_name'];
    $card_number = $_POST['card_number'];
	$acc_balance =	$_POST['acc_balance'];
	$card_type = $_POST['card_type'];
    $pincode =	$_POST['pincode'];
	$password =$_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	$card_validity=$_POST['card_validity'];
	$currency = $_POST['currency'];
	}


$query = "INSERT INTO `auction`.`bank` (
`acc_no` ,
`acc_name` ,
`card_number` ,
`acc_balance` ,
`card_type` ,
`pincode` ,
`password` ,
`card_validity` ,
`currency`
)
VALUES (
'$acc_no',  '$acc_name',  '$card_number',  '$acc_balance',  '$card_type',  '$pincode',  '$password',  '$card_validity',  '$currency'
)";

$result = mysql_query($query);
if (false){
  					{
 						 die('Error: ' . mysql_error());
 				 	}
						echo "1 record added";
					
					mysql_close($con);
				}
?>

</div>
</body>
</html>
<