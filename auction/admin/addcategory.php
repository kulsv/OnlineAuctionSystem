<?php session_start();
if(!isset($_SESSION['so_cuserId'])) 
{ header("Location:index.php");}
include("conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Admin</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<table width="200" border="1" align="center">
  <tr>
    <td bgcolor="#F2E7E1"><div align="center">
      <? include("index.html"); ?>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#F2E7E1"></div>
      </p>
      <?php
include("conn.php");
$q="select * from categories order by id";
$res=mysql_query($q);
?>
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
      <form action="catadd.php" method="post" name="form1" id="form1" onsubmit="return validate (this);">
        <table width="934" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="934" align="left" valign="top" bgcolor="#F2E7E1"><p>
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
              </p>
                </div>
                <div  style=" border:#000000;  overflow:auto;">
                <table width="340" border="1" align="center" cellpadding="2" cellspacing="2">
                  <tr>
                    <td colspan="2" bgcolor="#E4EDEC"><strong>Add Category </strong></td>
                  </tr>
                  <tr>
                    <td width="43%" height="55" bgcolor="#E4EDEC"><strong>Select Category:</strong></td>
                    <td width="57%" bgcolor="#E4EDEC"><label>
                      <div align="center">
                        <!-- <select name="selectcoun" id="selectcoun" onchange="prvtmsg()">-->
                        <select name="selectcoun" id="selectcoun" onchange="subcategory(this.value);">
                          <option value="Cat">Select Category</option>
                          <!--<option value="9">Automobile</option>-->
                          <?
		while($row=mysql_fetch_array($res))
	   		{
			    $cid=$row['id'];
				$cname=$row['catname'];
				//echo "catid is::".$catid;	
			echo "<option value=$cid>$cname </option>";
		    }  ?>
                        </select>
                      </div>
                    </label></td>
                  </tr>
                  <tr>
                    <td width="30%" height="55" bgcolor="#E4EDEC"><strong>Sub Category:</strong></td>
                    <td width="70%" bgcolor="#E4EDEC"><div align="center">
                      <input type="text" name="cat" id="cat" />
                    </div></td>
                  </tr>
                  <tr>
                    <td height="35" bgcolor="#E4EDEC">&nbsp;</td>
                    <td bgcolor="#E4EDEC"><label>
                      <div align="center">
                        <input type="submit" name="Submit"  value="Add" />
                      </div>
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
