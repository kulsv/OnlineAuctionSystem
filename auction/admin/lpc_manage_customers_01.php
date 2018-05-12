<?php
session_start();

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loseparts</title>
</head>
<?php 
include("rsp_menu_adm_03.php"); ?>
<body style="background-image:url(../images/bg_01.jpg)">
<?php
include("conn.php");
		$pageNum = 1;
		$rowsPerPage = 10;
		if (isset($_GET['alp']))
		{
			$key=$_GET['alp'];
			//echo "lallu".$key;
		}
		  else $key=a;
	/*	if(isset($_GET['page']))
        {
        $pageNum = $_GET['page'];
         }
 		$offset = ($pageNum - 1) * $rowsPerPage;
		$sql=mysql_query("select Customer_ID,Access,Company_Code,Company_Name,Billing_City,Phone_Number,Extension,Fax_Number,Email_Address,Notes,Suspend from Customers LIMIT $offset, $rowsPerPage") or die (mysql_error());*/
   $sql=mysql_query("select Customer_ID,Access,Company_Code,Company_Name,Billing_City,Phone_Number,Extension,Fax_Number,Email_Address,Notes,Suspend from Customers where Company_Name like '$key%' ORDER BY Company_Name") or die (mysql_error());;		
/*  $result = mysql_query("SELECT COUNT(Customer_ID) AS numrows FROM  Customers") or die(mysql_error());
  $row = mysql_fetch_array($result, MYSQL_ASSOC);
  $numrows = $row['numrows'];
  $maxPage = ceil($numrows/$rowsPerPage);*/
  $i=1;
  $count=0;
  ?>
<form id="form1" name="form1" method="post" action="delete_user.php">
<table border="1" >
<tr bgcolor="#00FF99">
<th>#</th>
<th> </th>
<th>ACCESS</th>
<th>COMPANY CODE</th>
<th>COMPANY NAME</th>
<th>BILLING CITY</th>
<th>PHONE NUMBER</th>
<th>EXTENSION</th>
<th>FAX NUMBER</th>
<th>EMAIL </th>
<th>NOTES</th>
<th>SUSPEND</th>
</tr>
<?php 
$clr=true;
while ($row = mysql_fetch_assoc($sql))
{
	$count=$count+1;
  $id=$row['Customer_ID'];
  $access=$row['Access'];
  $code=$row['Company_Code'];
  $name=$row['Company_Name'];
  $city=$row['Billing_City'];
  $ph=$row['Phone_Number'];
  $extn=$row['Extension'];
  $fax=$row['Fax_Number'];
  $email=$row['Email_Address'];
  $notes=$row['Notes'];
  $sus=$row['Suspend'];
  
   if($clr)
      echo("<tr bgcolor=\"#DDDDDD\">");
	else
	  echo("<tr bgcolor=\"#EEEEEE\">");
  echo "<td>" .$i . "</td>";
  echo "<td><input type=checkbox name=chk[] value=$id</td>";
  echo "<td>" . $access . "</td>";
  echo "<td>" . $code ."</td>";
  echo "<td>" . '<a href="lpc_add_customer.php?id='.$id.'">'.$name.'</a>' ."</td>";
 // echo "<td>" . '<a href="delete.php?user='.$user.'">delete</a>'."</td>";
  echo "<td>" . $city."</td>";
  echo "<td>" . $ph ."</td>";
  echo "<td>" . $extn ."</td>";	
  echo "<td>" . $fax ."</td>";	
  echo "<td>" . $email ."</td>";	
  echo "<td>" . $notes ."</td>";	
  echo "<td>" . $sus ."</td>";	
  echo "<tr>";
  $clr=!$clr;
  $i++;
	
}
?>
</table>
 <div align="center">
  <input type="submit" name="del" id="del" value="Delete item" />
  
   <?php 
  /* echo "<br/>";
	$self = $_SERVER['PHP_SELF'];
$nav = '';
for($page = 1; $page <= $maxPage; $page++)
{
if ($page == $pageNum)
{
$nav .= " $page "; // no need to create a link to current page
}
else
{
$nav .= " <a href=\"$self?page=$page\">$page</a> ";
}
}
// creating previous and next link
// plus the link to go straight to
// the first and last page
if ($pageNum > 1)
{
$page = $pageNum - 1;
$prev = " <a href=\"$self?page=$page\">[Prev]</a> ";
$first = " <a href=\"$self?page=1\">[First Page]</a> ";
}
else
{
$prev = '&nbsp;'; // we're on page one, don't print previous link
$first = '&nbsp;'; // nor the first page link
}
if ($pageNum < $maxPage)
{
$page = $pageNum + 1;
$next = " <a href=\"$self?page=$page\">[Next]</a> ";
$last = " <a href=\"$self?page=$maxPage\">[Last Page]</a> ";
}
else
{
$next = '&nbsp;'; // we're on the last page, don't print next link
$last = '&nbsp;'; // nor the last page link
}*/
$alp = array(1=>'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
for($j=1;$j<27;$j++)
{
$a=$alp[$j];
echo "<a href=\"$self?alp=$a\">$a&nbsp;</a>";
}
?>
 <label>
  <input type="submit" name="sus" id="sus" value="Suspend" />
  </label>
</div>


  <div align="center">
    <label>
    <input type="submit" name="act" id="act" value="Activate" />
    </label>
<?php /*
echo "<br/>&nbsp;&nbsp;".$next . "&nbsp;&nbsp;" . $prev. "&nbsp;&nbsp;"  ;
echo $first . "&nbsp;&nbsp;" . $last;
echo "<br/>";
	
	*/?>
  </div>
</form>
</body>
</html>
