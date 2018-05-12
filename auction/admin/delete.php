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
.style1 {color: #333333}
.style5 {font-size: 14px}
.style6 {color: #FF0000}
-->
</style>
</head>
<script type="text/javascript">
function send()
{
window.location = "home.php"

}</script>

<body>
<table width="736" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="180" align="left" valign="top">&nbsp;</td>
    <td width="10" align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top"><form action="deletetask.php" method="post" name="deleteform" id="deleteform">
      <table width="544" border="0" >
        <tr bgcolor="#F2E7E1">
          <td height="83" align="center"><p class="style1"><? include ("index.html") ?>&nbsp;</p></td>
        </tr>
        <tr bgcolor="#F2E7E1">
          <td height="83" align="center"><? $id=$_REQUEST['user_id'];
	 include("connection.inc.php");
						   $query="select * from sign_in where user_id='".$id."'";
						   $res=mysql_query($query);
						   while($res1=mysql_fetch_array($res))
						   {
						   $id=$res1['user_id'];
						   $name=$res1['uname'];
						   //$type=$res1['type'];
						   $status=$res1['status'];
						   }
						   ?>
            <p class="style1"><span class="style5">Do you want to delete the user&nbsp;<? echo $name; ?></span></p>
            <p class="style1"><br />
                <input type="submit" value="  Yes  " />
                <input type="button" value="  No  " onclick="send()" />
                <input type="hidden" name="id" value="<? echo $id; ?>" />
            </p></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>
