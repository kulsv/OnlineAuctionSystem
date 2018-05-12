<html>
<style type="text/css">
#apDiv61 {
	position:absolute;
	left:450px;
	top:141px;
	width:366px;
	height:46px;
	z-index:1;
	text-align:center #3CF;
	color:#23A0A0;
	font-style:normal !important
	font:"MS Serif", "New York", serif;
}
#apDiv62 {
	position:absolute;
	left:331px;
	top:195px;
	width:531px;
	height:264px;
	z-index:2;
}
#apDiv63 {
	position:absolute;
	left:534px;
	top:463px;
	width:259px;
	height:101px;
	z-index:3;
}
</style>

<div id="apDiv61">HAVING TROUBLE WITH QUICK LOGIN?????</div>
<div id="apDiv62">
<table width="400" height="264" align="center" bordercolor="#23A0A0" background="images/online-auction-masthead-short.jpg">
 <tr bordercolor="#FFFFFF">
      <td width="306" height="36"><form method="post" action="select_from_db.php">
  <p style="color:#FFFFFF">Email:</p></td>
    </tr>
    <tr>
    <td width="306" height="14">
    <input type="email" name="email" size="40 12" style="border-color:#00FF00;" /><br/></td>
    </tr>
    <tr>
      <td width="306" height="30">
       <p style="color:#FFFFFF">Password:</p>
       </td></tr>
       
       <tr>
      <td width="306" height="30">
  <input type="password" name="password" size="40"  style="border-color:#00FF00;"/>
       </td></tr>
         
         <tr>
      <td style="left:200px;" width="36" height="30">
    <input type="submit" name="submit" value="submit" class="le" style=;"/>
       </td></tr>
  
  
  
  
  
  </form>
  </table>
</div>
<div id="apDiv63"> <a href="forgot_password.php">Forget Password?</a> </div>
</html>

<?php

require 'connection.inc.php';
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$pass= $_POST['password'];
$emailencrypt2 = base64_encode($email);
$passencrypt2 = encrypt($pass); 
$result= mysql_query("select * from sign_in where email = '$emailencrypt2' && password =HEX('$passencrypt2')");
$count=mysql_num_rows($result);


if($count==1)
{
session_start();
$_SESSION['myusername']=$email;
header("location:profile.php");
}
else
{
	echo '
	<script>
	alert("Wrong username or password");
	</script>';
	//header("LOCATION:index.php");
	
}
 
mysql_close($con);
}



function encrypt($txt)
	{
		$salt="alphaCen";
        return trim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $salt, $txt, MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND))));
	}


