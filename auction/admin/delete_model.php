<?php session_start();
if(!isset($_SESSION['so_cuserId'])) 
{ header("Location:index.php");}
include("conn.php");
//echo $_REQUEST['upd'];echo $_REQUEST['sub'];



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Admin</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
<!--
.new1 {width:12em;
}
.style2 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
<script>
function validate9999(thisform)
{
var valid=true;
if (document.form1.cat.value == "category")
	{
		alert ("Please select category ");
		document.form1.cat.focus();
		valid=false;
	}
else if (document.form1.txt_auto_make.value == "sub")
	{
		alert ("Please select make ");
		document.form1.txt_auto_make.focus();
		valid=false;
	}

	return valid;
}


</script>
</head>

<body>
<table width="1099" border="1" align="center">
  <tr>
    <td width="1039" bgcolor="#F2E7E1"><div align="center">
      <? include("index.html"); ?>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#F2E7E1"></div>
      </p>
      <?php
include("conn.php");
$id= $_REQUEST['cat'];
$f= $_REQUEST['f'];

$q="select * from categories order by id";
$res=mysql_query($q);
?>
<script type="text/javascript" src="details.js" ></script>
<script type="text/javascript" src="details2.js" ></script>

      <script language="JavaScript" type="text/javascript">
function validate()
{
if(document.form1.selectcoun.value == "Cat")

{

alert("You must select the category");

document.form1.selectcoun.focus();

valid=false;

return valid;

}

else if(document.form1.cat.value == "")

{

alert("Sub Category name must be entered.");

document.form1.cat.focus();

valid=false;

return valid;

}

}
      </script>
      <form action="model_delete.php" method="post" name="form1" id="form1" onsubmit="return validate (this);">
        <table width="934" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="934" align="left" valign="top" bgcolor="#F2E7E1"><p align="center">
                <?php $sa=$_REQUEST['status'];
if($sa=="success")
	{
	echo "<p align='center'  style='color: #CCCCCC'>Inserted.</p>";
	}
	else if($sa=="notsend")
	{
	echo "<p align='center'  style='color: #CCCCCC'>Not Inserted.</p>";
	}

 ?>
 <? if($f=='s')
 {?>
                <span class="style2">Category Deleted Succesfully</span></p>
<? }?>
</div>
                <div  style=" border:#000000;  overflow:auto;">
                <table width="433" border="1" align="center" cellpadding="2" cellspacing="2">
                  <tr>
                    <td colspan="2" bgcolor="#E4EDEC"><strong>Delete Category </strong></td>
                  </tr>
                  <tr>
                    <td width="43%" height="55" bgcolor="#E4EDEC"><strong>Select Category:</strong></td>
                     <td><div align="left">
                       <select name="cat" id="cat" class="new1" onchange="subcategory(this.value);">
               <option value="category">Choose Category</option>
               <?php
	$query3="select * from categories";
	$result2=mysql_query($query3);
	
	// Check Error
	if (!$result2)
	{ exit("Error in SQL: ". mysql_error());}
	
	while($row2=mysql_fetch_array($result2))
	{
	            $cid=$row2['id'];
				$cname=$row2['catname'];
				//echo "cid".$cid;
				//echo "cname".$cname;
		echo "<option value=$cid>$cname</option>";
	}
	?>
             </select></div></td>
                  </tr>
                  <tr>
                    <td width="30%" height="26" bgcolor="#E4EDEC"><strong>Select Make:</strong></td>
                    <td><div id="state_div">
             <div align="left">
               <select name="txt_auto_make" id="txt_auto_make" class="new1">
                 <option value="sub">Select</option>
               </select>
             </div>
         </div></td>
                  </tr>
                  <tr>
                    <td width="30%" height="27" rowspan="2" bgcolor="#E4EDEC">Enter New Model:</td>
                    <td><label>
                    
                    <div id="model_div">
             <div align="left">
              <!-- <select name="txt_auto_model" id="txt_auto_model" class="new1">
                 <option value="sub">Select</option>
               </select>-->
               
               
                <input type="text"  name="txt_auto_model" class="new1" id="txt_auto_model"  />
             </div>
                    </label></td>
                  </tr>
                  <tr>
                    <td><input type="submit" name="Submit" onclick="return validate9999();"  value="Delete" /></td>
                  </tr>
                  <tr>
                    <td height="35" bgcolor="#E4EDEC">&nbsp;</td>
                    <td bgcolor="#E4EDEC"><label>
                      <div align="center"></div>
                    </label></td>
                  </tr>
            </table></td>
          </tr>
        </table>
    </form></td>
  </tr>
</table>
</body>
</html>
