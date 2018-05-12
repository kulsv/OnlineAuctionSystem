
<?php session_start();
if(!isset($_SESSION['so_cuserId'])) 
{
include 'index.html';}
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
						 $id = $_GET['id'];
						 $_SESSION['id'] = $id;
						 
						
							//include("home.php");
							//global $uid;
							//$_GET["uid"];
							//echo $uid;
						   $query="select * from sign_in where user_id=".$id;
						   $res=mysql_query($query);
						   while($res1=mysql_fetch_array($res))
						   {
						   $uid=$res1['user_id'];
						   $name=$res1['uname'];
						   $address=$res1['address'];
						   $country=$res1['country'];
						   $zip=$res1['zip'];
						   $contact=$res1['contact'];
						    $email=$res1['email'];
							$status=$res1['status'];
							
						   }
						   ?>
<form action="status_change.php" method="post" name="editform" id="editform">
<BR><BR>
          <table width="713" height="206" border="0" align="center" cellspacing="1">
            <tr>
              
              <td width="115" align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">Name</span></td>
              <td width="591" bgcolor="#E4EDEC"><span class="style1"><?php echo $name; ?></span></td>
            </tr>
            <tr>
              <td width="115" align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">Country</span></td>
              <td width="591" bgcolor="#E4EDEC"><span class="style1"><?php echo $country; ?></span></td>
            </tr>
            <tr>
              <td width="115" align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">Contact</span></td>
              <td width="591" bgcolor="#E4EDEC"><span class="style1"><?php echo $contact; ?></span></td>
            </tr>
            <tr>
              <td width="115" align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">Zip</span></td>
              <td width="591" bgcolor="#E4EDEC"><span class="style1"><?php echo $zip; ?></span></td>
            </tr>
           
            <tr>
              <td align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">Status</span></td>
              <td bgcolor="#E4EDEC"><span class="style1">
                <select name="txtstatus" id="txtstatus" class="co"  >
              
				<option value="P" >Pending</option>
                <option value="A" >Active</option>
                <option value="S">Suspend</option>
                  </select>  <br /><br />

			
               
              </span></td>
            </tr>
            <tr>
              <td height="35" colspan="2" align="center" valign="middle" bgcolor="#F2E7E1"><span class="style1">
                <input type="submit" name="submit" value="Save" />
                <input type="hidden" name="id" value="<? echo $id; ?>" />
                <input type="hidden" name="email" id="email" value="<? echo $name; ?>" />
                 <input type="hidden" name="pass" id="pass" value="<? echo $pass; ?>" />
              </span></td>
            </tr>
          </table>
</form></td>

 
</body>
</html>
