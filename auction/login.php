<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php  
if(empty($_SESSION))//if the session not yet started
 session_start();
if(!isset($_SESSION['myusername'])){
		include 'header.php';
	}
	else{
		include'header_session.php';
	}

?>
<script src="validx.js"></script> 
</head>

<body>
<div id="splash"><div id="page"><div id="content"><div class="box">
<div id="login">
<!--<form action="index.php" method="post">
Name*          : <input type="text" name="name" id="name"><br>
Mobile*        : <input type="text" name="mobile" id="mobile"><br>   
Country*       : <input type="text" name="country" id="country"><br>
Address*       : <input type="text" name="address" id="address"><br>
Access* : 
<label for="access"></label>
<select name="access" id="access">
  <option value="user">user</option>
  <option value="organization">organization</option>
</select><br />
E-mail*           :
<input type="text" name="email"><br>
password         : <input type="password" name="password" /><br />
confirm password :<input type="password" name="password" /><br />

<input type="submit" onclick="index.html">
</form>-->
<form name='registration' onSubmit="return formValidation();" action="login.php" method="post">  

Name: &nbsp;&nbsp;
<input type="text" name="username" size="50" /> <br /><br />
Address:&nbsp;&nbsp;  
<input type="text" name="address" value="" size="50" /> <br /><br />
Country:&nbsp;&nbsp;
<select name="country">  
<option value="AF">Australia</option>  
<option value="AL">Canada</option>  
<option value="DZ">India</option>  
<option value="AS">Russia</option>  
<option value="AD">USA</option>  
</select>  <br /><br />
ZIP Code:&nbsp;&nbsp;
<input type="text" name="zip" /> <br /><br />
Contact:&nbsp;&nbsp;
<input type="text" name="contact" /><br /><br />
Email:&nbsp;&nbsp;
<input type="email" name="email" size="50" /><br /><br />
Password:&nbsp;&nbsp;
<input type="password" name="passid" size="12" /> <br /><br />
<input type="submit" name="submit" value="Submit" /><br />

</form>

<?php
if(isset($_POST['submit']))
{
	require 'connection.inc.php';
	
	$sql = "INSERT INTO sign_in (password,uname,address,country,zip,contact,email) VALUES('$_POST[passid]','$_POST[username]','$_POST[address]','$_POST[country]','$_POST[zip]','$_POST[contact]','$_POST[email]')";
	
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

	
	mysql_close($con);
}
?>

</div></div>
</div></div></div>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

</body>
<?php include 'footer.php'; ?>
</html>