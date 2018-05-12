<?php session_start();
if(!isset($_SESSION['so_cuserId'])) 
{
header("Location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>Welcome to AutoBuyPlus Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>

  <label></label>
  <table width="1003" border="1" align="center">
    <tr>
      <td width="941" bgcolor="#F2E7E1"><? include("index.html");?>&nbsp;</td>
    </tr>
    <tr>
      <td height="182" bgcolor="#E4EDEC"><form id="form1" name="form1" method="post" action="insertdamage.php">
        <label></label>
        <div align="center"><strong>Enter Damage Type</strong>
          <input type="text" name="type" id="type" />
          <input type="submit" name="button" id="button" value="Submit" />
        </div>
      </form></td>
    </tr>
  </table>
</body>
</html>