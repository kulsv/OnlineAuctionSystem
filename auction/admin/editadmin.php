<? session_start();
if(!isset($_SESSION['so_cuserId'])) 
{
header("Location:index.php");
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Website</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>
<script type="text/javascript">
function send()
{
window.location = "home.php"

}


function validate(thisform)
{
var valid=true;
if (document.firstform.txtepwd.value == "")
{
alert ("Please enter your existing password");
valid=false;
}
else if (document.firstform.txtcpwd.value == "")
{
alert ("Please enter your new password");
valid=false;
}


return valid;
}</script>

<body>
<table width="987" border="1" align="center">
  <tr>
    <td width="977" bgcolor="#F2E7E1"><? include("index.html"); ?>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2E7E1"><table width="544" border="0" align="center" >
      <tr >
        <td height="28" align="center"><form action="editcheckadmin.php" name="firstform" id="firstform">
            <table width="286" border="0" style="border-style:solid">
              <tr>
                <td colspan="2" align="left" bgcolor="#E4EDEC"><span class="style2"><strong>Login</strong></span></td>
              </tr>
              <tr>
                <td bgcolor="#E4EDEC"><strong>Username</strong></td>
                <td bgcolor="#E4EDEC"><input type="text" name="txtuid" id="txtuid" disabled="disabled" value="admin" /></td>
              </tr>
              <tr>
                <td bgcolor="#E4EDEC"><strong>Existing Password</strong></td>
                <td bgcolor="#E4EDEC"><input type="password" name="txtepwd" id="txtepwd" /></td>
              </tr>
              <tr>
                <td bgcolor="#E4EDEC"><strong>New Password</strong></td>
                <td bgcolor="#E4EDEC"><input type="password" name="txtcpwd" id="txtcpwd" /></td>
              </tr>
              <tr>
                <td bgcolor="#E4EDEC">&nbsp;</td>
                <td align="left" bgcolor="#E4EDEC"><input type="submit" value="Login" onclick="return validate();" /></td>
              </tr>
              <tr>
                <td bgcolor="#E4EDEC">&nbsp;</td>
                <td align="left" bgcolor="#E4EDEC"><? $stat=$_REQUEST['flag'];
	if($stat=="FAILED")
	{
	echo "Username doesnot exists";
	}
	if($stat=="PFAILED")
	{
	echo "Invalid Password";
	}
	if($stat=="SUCCESS")
	{
	echo "Password changed";
	}
	?></td>
              </tr>
            </table>
        </form></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
