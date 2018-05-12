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
.style3 {color: #FEE9CD; font-size: 16px;}
.style4 {color: #FF0000}
-->
</style>
</head>

<body>
<?
						  $id=$_REQUEST['id'];
						 
  include("conn.php");
						   $query="select * from cuser where id='".$id."'";
						   $res=mysql_query($query);
						   while($res1=mysql_fetch_array($res))
						   {
						   $id=$res1['id'];
						   $name=$res1['userName'];
						   $pass=$res1['password'];
						   $type=$res1['type'];
						   $status=$res1['status'];
						   $country=$res1['country'];
						   $state=$res1['state'];
						   $zip=$res1['zip'];
						   }
						   ?>
<form action="edittask.php" method="post" name="editform" id="editform">
          <table width="713" height="206" border="0" align="center" cellspacing="1">
            <tr>
              <td colspan="3" align="center" class="style3"><? include("index.html"); ?>                &nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
              
              <td width="115" align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">Name</span></td>
              <td width="591" bgcolor="#E4EDEC"><span class="style1"><? echo $name; ?></span></td>
            </tr>
            <tr>
              <td width="115" align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">Country</span></td>
              <td width="591" bgcolor="#E4EDEC"><span class="style1"><? echo $country; ?></span></td>
            </tr>
            <tr>
              <td width="115" align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">State</span></td>
              <td width="591" bgcolor="#E4EDEC"><span class="style1"><? echo $state; ?></span></td>
            </tr>
            <tr>
              <td width="115" align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">Zip</span></td>
              <td width="591" bgcolor="#E4EDEC"><span class="style1"><? echo $zip; ?></span></td>
            </tr>
            <tr>
              <td align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">Type</span></td>
              <td bgcolor="#E4EDEC"><span class="style1">
                <? if($type=="D")
	{
	echo "Dealer";
	}
	else
	{
	echo "Public";
	} ?>
              </span></td>
            </tr>
            <tr>
              <td align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">Status</span></td>
              <td bgcolor="#E4EDEC"><span class="style1">
                <select name="txtstatus" id="txtstatus" class="co"  >
                  <? if($status=="P")
	{
	?>
                  <option value="P" selected="selected">Pending</option>
                  <option value="A">Active</option>
                   <option value="S">Suspend</option>
                  <?
			}
			else if($status=="A")
			{
			?>
                  <option value="P" >Pending</option>
                  <option value="A" selected="selected">Active</option>
                  <option value="S">Suspend</option>
                  <?
			}
			else
			{
			?>
                  <option value="P" >Pending</option>
                  <option value="A" >Active</option>
                  <option value="S" selected="selected" >Suspend</option>
                  <?
			
			}
			?>
                </select>
              </span></td>
            </tr>
            <tr>
              <td height="35" colspan="2" align="center" valign="middle" bgcolor="#F2E7E1"><span class="style1">
                <input type="submit" value="Save" />
                <input type="hidden" name="id" value="<? echo $id; ?>" />
                <input type="hidden" name="email" id="email" value="<? echo $name; ?>" />
                 <input type="hidden" name="pass" id="pass" value="<? echo $pass; ?>" />
              </span></td>
            </tr>
          </table>
</form></td>
 
</body>
</html>
