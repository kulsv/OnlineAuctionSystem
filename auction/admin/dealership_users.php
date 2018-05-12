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
<style type="text/css">
<!--
.style1 {color: #333333}
.style4 {color: #333333; font-weight: bold; }
-->
</style>
</head>

<body>
<table width="742" border="0" align="center" >
  <tr bgcolor="#F2E7E1">
   <!-- <td width="11" height="13"><span class="style1"></span></td>
-->    <td colspan="6" bgcolor="#F2E7E1"><? include("index.html"); ?>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2E7E1">
    <!--<td height="13">&nbsp;</td>-->
    <td width="72" bgcolor="#F2E7E1"><span class="style4">Name</span></td>
    <td width="112" bgcolor="#F2E7E1" class="style4">Company Name</td>
    <td width="95"><span class="style4">Type</span></td>
    <td width="134"><span class="style4">Time</span></td>
    <td width="81"><span class="style4">Staus</span></td>
    <td width="207"><span class="style4">Options</span><span class="style4"></span></td>
  </tr>
  <?php
	       include("conn.php");
						   $query="select * from cuser where access='DEALER SHIP' order by company_name asc";
						   $res=mysql_query($query);
						   while($res1=mysql_fetch_array($res))
						   {
						   $id=$res1['id'];
						   $name=$res1['userName'];
						   	$access=$res1['access'];
						   $companyname=$res1['company_name'];
						   $status=$res1['status'];
						    $time=$res1['timstamp'];
						   ?>
  <tr bgcolor="#E4EDEC">
    <!--<td><span class="style1"></span></td>-->
    <td bgcolor="#E4EDEC"><span class="style1"><?php echo $name; ?></span></td>
    <td bgcolor="#E4EDEC"><span class="style1"><?php echo $companyname; ?></span></td>
     <td><span class="style1"><?php echo $access; ?>
     
    </span></td>
    <td bgcolor="#E4EDEC"><span class="style1"><?php echo $time; ?></span></td>
    <td><span class="style1">
      <?php  if($status=="A")
	{
	echo "Active";
	}
	else if($status=="P")
	{
	echo "Pending";
	}
	else
	{
	echo "Suspended";
	} ?>
    </span></td>
    <td><span class="style1"><a href="edit.php?id=<?php echo $id; ?>">Edit Status</a>&nbsp;&nbsp; <a href="delete.php?id=<?php echo $id; ?>">Delete </a>&nbsp;&nbsp;<a href="view.php?id=<?php echo $id; ?>">View</a>&nbsp;&nbsp;</span></td>
  </tr>
  <?php
  }
  ?>
</table>
</body>
</html>