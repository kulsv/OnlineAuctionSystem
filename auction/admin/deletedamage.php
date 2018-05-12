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
.style1 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>
<script>
function validate222()
{//alert("hi");
var valid=true;
 if (document.form1.damage.value.replace(RegExp("^[ ]+", "g"), "") == "")
{
alert ("Please select damage type ");
document.form1.damage.focus();
valid=false;
} else if (document.form1.new1.value.replace(RegExp("^[ ]+", "g"), "") == "")
		{ alert ("Enter new damage type ");

		document.form1.new1.focus();
		//emailID.value="";
		//document.getElementById("email").focus();
		//alert("invalid emailId");
		valid=false;
		}
		return valid;
	}
</script>
<body>
<?
$type=$_POST['damage'];
$f= $_REQUEST['f'];
//echo "dasda".$type;
include("conn.php");
//$type=$_POST['type'];
//echo $type;
 $query="select * from tbl_damage";
						   $res=mysql_query($query);
						   
?>
  <label></label>
  <table width="842" border="1" align="center">
    <tr>
      <td width="399" bgcolor="#F2E7E1"><? include("index.html");?>&nbsp;</td>
    </tr>
    <tr>
      <td height="182" bgcolor="#E4EDEC"><form id="form1" name="form1" method="post" action="delete_damage.php" onsubmit="return validate222();">
        <label></label>
        <div align="center">
          <p>&nbsp;</p>
          <? if($f=='s')
 {?>
                <span class="style1">Damage Type editted Succesfully</span></p>
<? }?>

          <p>
            <label></label>
            <label></label>
          </p>
          <table width="338" border="1">
            <tr>
              <td width="164">Select DamageType</td>
              <td width="158" bgcolor="#F2E7E1"><select name="damage" size="1" id="damage">
                <option value="<? echo $type;?>" selected="selected" id ="type1"><? echo $type;?></option>
                <? while($res1=mysql_fetch_array($res))
			
			
			{?>
                <option id ="type1" value="<? echo $res1['id'];?>"><? echo $res1['type'];?></option>
                <? } ?>
              </select></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td bgcolor="#F2E7E1"><input type="submit" name="button2" onclick="validate222();" id="button2" value="Delete" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td bgcolor="#F2E7E1">&nbsp;</td>
            </tr>
          </table>
          <p>&nbsp;</p>
        </div>
      </form>
      
        
      <p>&nbsp;</p></td>
    </tr>
  </table>
</body>
</html>