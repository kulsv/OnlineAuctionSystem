<?php session_start();
if(!isset($_SESSION['so_cuserId'])) 
{
include 'index.html';
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
.style3 {color: #FEE9CD; font-size: 16px;}
.style4 {color: #FF0000}
-->
</style>
</head>

<body>
<?php
						include("connection.inc.php");

						$id = $_GET['id1'];
						 $_SESSION['id1'] = $id;
						 
						
							//include("home.php");
							//global $uid;
							//$_GET["uid"];
							//echo $uid;
						   $query="select * from product where p_id=".$id;
						   $res=mysql_query($query);
						   while($res1=mysql_fetch_array($res))
						   {
						   $pid=$res1['p_id'];
						   $name=$res1['p_name'];
						   $price=$res1['p_price'];
						   }
						   
						   
?>					   
						
<form action="setdatetime.php" method="post" name="editform" id="editform">
<br><br>
          <table width="713" height="206" border="0" align="center" cellspacing="1">
            
            <tr>
              
              <td width="115" align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">Product ID</span></td>
              <td width="591" bgcolor="#E4EDEC"><span class="style1"><?php echo $pid; ?></span></td>
            </tr>
            <tr>
              <td width="115" align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">Product Name</span></td>
              <td width="591" bgcolor="#E4EDEC"><span class="style1"><?php echo $name; ?></span></td>
            </tr>
            <tr>
              <td width="115" align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">Minimum Price</span></td>
              <td width="591" bgcolor="#E4EDEC"><span class="style1"><?php echo $price; ?></span></td>
            </tr>
            <tr>
              <td width="115" align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">Set Date</span></td>
              <td width="591" bgcolor="#E4EDEC"><span class="style1"><input type="date" name="biddate" id="biddate" >
			  </tr>
			  <tr>
			   <td width="115" align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">Set Time</span></td>
              <td width="591" bgcolor="#E4EDEC"><span class="style1"><input type="time" name="bidtime" id="bidtime" ></tr>

</span></td>
            </tr>
			<tr>
              <td height="35" colspan="2" align="center" valign="middle" bgcolor="#F2E7E1"><span class="style1">
                <input type="submit" name="submit" value="Save" />
              </span></td>
            </tr>
     
     </table>     
</form>
</body>
</html>
