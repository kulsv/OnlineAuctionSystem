<html>
<body>
<form action="insert.php" method="post">
User id: 
<input type="text" name="userid" size="12" /> <br /><br />
Password:
<input type="password" name="passid" size="12" /> <br /><br />
Name: 
<input type="text" name="username" size="50" /> <br /><br />
Address:  
<input type="text" name="address" value="" size="50" /> <br /><br />
Country:
<select name="country">  
<option value="AF">Australia</option>  
<option value="AL">Canada</option>  
<option value="DZ">India</option>  
<option value="AS">Russia</option>  
<option value="AD">USA</option>  
</select>  <br /><br />
ZIP Code:
<input type="text" name="zip" /> <br /><br />
Contact:
<input type="text" name="contact" /><br /><br />
Email:
<input type="email" name="email" size="50" /><br /><br />
<input type="submit" name="submit" value="Submit" /><br />
</form>


<?php

if(isset($_POST['submit']))
{
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die("can't connect:" . mysql_error());
	}

	mysql_select_db("register",$con);
	
	$sql = "INSERT INTO sign_in (User_id,password,uname,address,country,zip,contact,email) VALUES('$_POST[userid]','$_POST[passid]','$_POST[username]','$_POST[address]','$_POST[country]','$_POST[zip]','$_POST[contact]','$_POST[email]')";
	
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

	
	mysql_close($con);
}
?>
</body>
</html>			