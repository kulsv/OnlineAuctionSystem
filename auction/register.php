<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>The Online Auction</title>
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
<style>
#apDiv12s {
	position:absolute;
	left:161px;
	top:-11px;
	width:186px;
	height:63px;
	z-index:7;
	color: #229F9F;
	font-size: 30px;
}
#apDiv13s {
	position:absolute;
	left:236px;
	top:332px;
	width:976px;
	height:550px;
	z-index:8;
}
.form-2 {
    /* Size and position */
    width: 340px;
    margin: 60px auto 30px;
	margin-left:70px;
    padding: 15px;
    position:absolute; 
 
    /* Styles */
    background: f75656;
    border-radius: 4px;
    color: #7e7975;
    box-shadow:
        0 2px 2px rgba(0,0,0,0.2),       
        0 1px 5px rgba(0,0,0,0.2),       
        0 0 0 12px rgba(255,255,255,0.4);
}
.logins{


	cursor: pointer;
    width: 40%;
    height: 32px;
    margin-top: 25px;
	margin-left:105px;
    padding: 0;
    background: #209F9F;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: 0;
    -moz-box-shadow: 0 15px 30px 0 rgba(255,255,255,.1) inset;
    -webkit-box-shadow: 0 15px 30px 0 rgba(255,255,255,.1) inset;
    box-shadow: 0 15px 30px 0 rgba(255,255,255,.1) inset;
    font-family: 'PT Sans', Helvetica, Arial, sans-serif;
    font-size: 16px;
    font-weight: 400;
    color: #fff;
    text-shadow: 0 1px 2px rgba(0,0,0,.1);
    -o-transition: all .2s;
    -moz-transition: all .2s;
    -webkit-transition: all .2s;
    -ms-transition: all .2s;
}

#apDiv22s {
	position:absolute;
	left:420px;
	top:312px;
	width:186px;
	height:63px;
	z-index:7;
	color: #32A3DF;
	font-size: 25px;
}


</style>

<script>
function validateForm()
{
	//document.getElementById('password1').value.match(/^[0-9]{6}/)

var username = document.getElementById('username').value;
if (username==null || username=="")
  {
  alert("Username must be filled out");
  return false;
  }

var address = document.getElementById('address').value;
if (address==null || address=="")
  {
  alert("Address must be filled out");
  return false;
  }

var country = document.getElementById('country').value;
if (country==null || country=="")
  {
  alert("country must be filled out");
  return false;
  }



var contact = document.getElementById('contact').value;
if (document.getElementById('contact').value.match(/^[0-9]{10}/)==null)
  {
  alert("contact must be of 10 digits");
  return false;
  }
  
  var zip = document.getElementById('zip').value;
if (zip==null || zip=="")
  {
  alert("Zip Code must be filled out");
  return false;
  }

if (document.getElementById('zip').value.match(/^[0-9]{6}/)==null)
  {
  alert("zip code must be of 6 char");
  return false;
  }





  var password = document.getElementById('password1').value;
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
</script>

 
</head>

<body>
<div id="splash"><div id="page"><div id="content"><div class="box">

<div id="login">

 <div id="apDiv12s">Registration
 
   <hr />
<hr align="center" noshade="noshade" color="#229F9F"/>
</div>
<div id="apDiv22">

 <form id="form1" name="form1" method="post" action="register.php" class="form-2" onsubmit="return validateForm()">
  <p>&nbsp;</p>
  <table width="314" align="center">
    <tr>
      <td width="306" height="36"><label for="username">
        <div align="left">Username</div>
      </label></td>
    </tr>
    <tr>
      <td height="30">
        <div align="left">
          <input name="username" type="text" id="username" size="40" style="color:#6CC" placeholder="Full name"/>
        </div></td>
    </tr>
    
    
     <tr>
      <td height="28"><label for="email">
        <div align="left">Email Address</div>
      </label></td>
    </tr>
   <tr>
      <td height="30">
        <div align="left">
          <input name="email" type="email" id="email" size="40" style="color:#6CC" placeholder="Valid Email Address"/>
        </div></td>
    </tr> 
    
    <tr>
      <td height="28"><label for="address">
        <div align="left">Address</div>
      </label></td>
    </tr>
   <tr>
      <td height="30">
        <div align="left">
          <input name="address" type="text" id="address" size="40" style="color:#6CC" placeholder="Address"/>
        </div></td>
    </tr> 
    
    <tr>
      <td height="28">
        <div align="left">
          <label for="country">Country:</label>
          <select name="country" id="country">
            <option value="AS">Australia</option>
            <option value="IN">India</option>
     	       <option value="US">United States</option>
                 <option value="GB">England</option>
                   <option value="GR">Germany</option>
                      <option value="SP">Spain</option>
                      </select>
        </div>        
        </td>
    </tr>
    
    <tr>
      <td width="306" height="36"><label for="contact">
        <div align="left">Contact Number</div>
      </label></td>
    </tr>
    <tr>
      <td height="30">
        <div align="left">
          <input name="contact" type="text" id="contact" size="40" style="color:#6CC" placeholder="10 digit mobile number"/>
        </div></td>
    </tr>
    
    <tr>
      <td width="306" height="36"><label for="zip">
        <div align="left">Zip Code</div>
      </label></td>
    </tr>
    <tr>
      <td height="30">
        <div align="left">
          <input name="zip" type="text" id="zip" size="40" />
        </div></td>
    </tr>
    
    
    
    <tr>
      <td height="28"><label for="password">
        <div align="left">Password</div>
      </label></td>
    </tr>
    <tr>
      <td height="28">
        <div align="left">
          <input name="password" type="password" id="password1" size="40" style="color:#6CC" placeholder="min 5 max 25"/>
        </div></td>
    </tr>
    
    <tr>
      <td height="28"><label for="confirmpassword">
        <div align="left">Confirm Password</div>
      </label></td>
    </tr>
    <tr>
      <td height="28">
        <div align="left">
          <input name="confirmpassword" type="password" id="confirmpassword" size="40" style="color:#6CC"/>
        </div></td>
    </tr>
     <tr>
      <td height="28">
        <div align="left">
          Please read the <a href="policy.php">Terms and Conditions</a>
        </div></td>
    </tr>
	
    <tr>
      <td>
        <div align="left">
          <input type="submit" name="submit" value="submit" class="logins"/>
        </div></td>
    </tr>
  </table>
</form>
</div>


<?php


	
	
if(isset($_POST['submit']))
{
	require 'connection.inc.php';
	
	//$userid = $_POST['userid'];
	$pass = $_POST['password'];
	$uname = $_POST['username'];
	$address = $_POST['address'];
	$country = $_POST['country'];
	$zip = $_POST['zip'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	
	//$useridencrypt = encrypt($userid);
	$passencrypt = encrypt($pass);
	//$unameencrypt = encrypt($uname);
	//$addressencrypt = encrypt($address);
	//$countryencrypt = encrypt($country);
	//$zipencrypt = encrypt($zip);
	//$contactencrypt = encrypt($contact);
	$emailencrypt = base64_encode($email);
	
	$result =  mysql_query("select * from sign_in where email='$emailencrypt'");
					$count=mysql_num_rows($result);
					if($count==1)
					{
						echo "User ID already exists";
						
					}
					else
					{
					$sql = "INSERT INTO sign_in (User_id,password,uname,address,country,zip,contact,email) VALUES('',HEX('$passencrypt'),'$uname','$address','$country','$zip','$contact','$emailencrypt')";
	
					if (!mysql_query($sql,$con))
  					{
 						 die('Error: ' . mysql_error());
 				 	}
						echo "<script>
						alert(''You have successfully registered..Please login to continue');
						
						</script>";
					}
					mysql_close($con);
				}
	
	




function encrypt($txt)
	{
		$salt="alphaCen";
        return trim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $salt, $txt, MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND))));
	}


?>
</div></div>
</div></div></div>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

</body>
<?php include 'footer.php'; ?>
</html>