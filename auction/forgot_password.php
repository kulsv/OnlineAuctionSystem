<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>The Online Auction</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script type="text/javascript">
</script>
<script type="text/javascript">


function validate(thisform)
{
alert ("An email containing your new password has been sent to you!");
}


</script>

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
<body>
<table width="900"  align="center">
  <tr>
    <td width="977" ><? include("index.html"); ?>&nbsp;</td>
  </tr>
  <tr>
    <td ><table width="544" border="0" align="center" >
      <tr >
        <td height="28" align="center"><form action="forgot_password.php" name="firstform" id="firstform">
            <table width="386" border="0" align="center" style="border-style:solid">
              <tr>
                <td colspan="2" align="left" ><span class="style2"><strong>Change your password:</strong></span></td>
              </tr>
			  <br>
              <tr>
                <td ><strong>Enter your Email-ID:</strong></td>
                <td ><input type="email" name="txtuid" id="txtuid"  /></td>
              </tr>
			  <td align="center" ><input type="submit" value="submit" onclick="return validate();" /></td>
              
                <td >&nbsp;</td>
                 <td align="center"</td>
              </tr>
            </table>
        </form></td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>

