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
.style2 {
	color: #FF0000;
	font-size: 16px;
}

.style5 {
	color: #FF0000;
	font-size: 20px;font-weight: bold;
}


.style3 {font-size: 16px}
-->
</style>


<script type="text/javascript">
/*else if (document.firstform.txtcpwd.value.replace(RegExp("^[ ]+", "g"), "") == "")
{
alert ("Please re-enter password");
document.firstform.txtcpwd.focus();
valid=false;
}
else if (document.firstform.txtpwd.value != document.firstform.txtcpwd.value)
{
alert ("Passwords are not identical");
document.firstform.txtcpwd.focus();
valid=false;
}*/
/*
else if(document.getElementById("first").style.visibility == "visible")
{

//alert ("first");
//document.getElementById("txtstate2").value == "";
//document.getElementById("txtstate2").style.visibility == "hidden";

var val1=document.getElementById("txtstate1").value;
//alert (val1);
if (val1=="")
{
alert("Select your state");
valid=false;
}


}

else if(document.getElementById("second").style.visibility == "visible")
{
//alert ("second");
//document.getElementById("txtstate1").value == "";
//document.getElementById("txtstate1").style.visibility == "hidden";

var val=document.getElementById("txtstate2").value;
//alert (val);
if (document.getElementById("txtstate2").value=="")
{
alert("Enter your state");
valid=false;
}

}
*/


function send()
{
window.location = "index.php"

}
function validate222(thisform)
{
var valid=true;
 if (document.firstform.txtuid.value.replace(RegExp("^[ ]+", "g"), "") == "")
{
alert ("Please enter Email Id");
document.firstform.txtuid.focus();
valid=false;
}
else if (!echeck(document.firstform.txtuid.value))
		{
		//emailID.value="";
		//document.getElementById("email").focus();
		//alert("invalid emailId");
		valid=false;
		}
else if (document.firstform.txtpwd.value.replace(RegExp("^[ ]+", "g"), "") == "")
{
alert ("Please enter password");
document.firstform.txtpwd.focus();
valid=false;
}

else if (document.firstform.cname.value.replace(RegExp("^[ ]+", "g"), "") == "")
{
alert ("Please enter company name");
document.firstform.cname.focus();
valid=false;
}

else if (document.firstform.ccode.value.replace(RegExp("^[ ]+", "g"), "") == "")
{
alert ("Please enter company code");
document.firstform.ccode.focus();
valid=false;
}

else if (document.firstform.cfname.value.replace(RegExp("^[ ]+", "g"), "") == "")
{
alert ("Please enter the name");
document.firstform.cfname.focus();
valid=false;
}
else if (document.firstform.clname.value.replace(RegExp("^[ ]+", "g"), "") == "")
{
alert ("Please enter the last name");
document.firstform.clname.focus();
valid=false;
}
else if (document.firstform.address1.value.replace(RegExp("^[ ]+", "g"), "") == "")
{
alert ("Please enter the address");
document.firstform.address1.focus();
valid=false;
}
else if (document.firstform.address2.value.replace(RegExp("^[ ]+", "g"), "") == "")
{
alert ("Please enter the address");
document.firstform.address2.focus();
valid=false;
}
else if (document.firstform.txtcountry.value == "")
	{
		alert ("Select your country");
		document.firstform.txtcountry.focus();
		valid=false;
	}
	else if (document.firstform.city.value.replace(RegExp("^[ ]+", "g"), "") == "")
{
alert ("Please enter the city");
document.firstform.city.focus();
valid=false;
}

else if (document.firstform.stno.value.replace(RegExp("^[ ]+", "g"), "") == "")
{
alert ("Please enter the street number");
document.firstform.stno.focus();
valid=false;
}

	else if (document.firstform.txtzip.value.replace(RegExp("^[ ]+", "g"), "") == "")
	{
		alert ("Enter your zipcode");
		document.firstform.txtzip.focus();
		valid=false;
	}
	else if (parseInt(document.firstform.txtzip.value)!=document.firstform.txtzip.value)
	{
		alert ("Zipcode must be a number");
		valid=false;
	}
	else if (parseInt(document.firstform.phno.value)!=document.firstform.phno.value)
	{
		alert ("Phone number must be a number");
		valid=false;
	}
	
	else if (document.firstform.phno.value.replace(RegExp("^[ ]+", "g"), "").length != 10  )
{

alert ("Your Phone must contains atleast 10 digits.");
document.firstform.phno.focus();
valid=false ;
}

	
	
	else if (document.firstform.ext.value.replace(RegExp("^[ ]+", "g"), "") == "")
	{
		alert ("Enter your extension");
		document.firstform.ext.focus();
		valid=false;
	}
	else if (parseInt(document.firstform.ext.value)!=document.firstform.ext.value)
	{
		alert ("Extension must be a number");
		valid=false;
	}
	else if (document.firstform.ch.checked == false)
{
alert ("Kindly agree with Terms & Conditions");

valid=false;
}
	
else if (document.firstform.security_code.value == "")
{
alert ("Enter verification code");
valid=false;
}
else if (document.getElementById("main1").style.visibility=="visible")
{
 if (document.firstform.chkagree.checked == false)
{
alert ("Kindly agree with Terms & Conditions");
valid=false;
}
}
return valid;
}

function hideImg()
{
//alert("hi");
 
 document.getElementById("main1").style.visibility = "hidden";
 //document.getElementById("sub").style.visibility = "hidden";
 
}
function showImg()
{
//alert("hi");
 
 document.getElementById("main1").style.visibility = "visible";
 //document.getElementById("sub").style.visibility = "hidden";
 
}

function valmail()
{
	var emailID=document.getElementById("email").value;
	
	//if ((emailID==null)||(emailID=="")){
		//alert("Please Enter your Email ID");
		//document.getElementById("email").focus();
		//return false;
	//}
	if (!echeck(emailID))
	{
		emailID.value="";
		document.getElementById("email").focus();
		return false;
	}
	
 }
 function echeck(str) 
{

		var at="@";
		var dot=".";
		var lat=str.indexOf(at);
		var lstr=str.length;
		var ldot=str.indexOf(dot);
		if (str.indexOf(at)==-1)
		{
		   alert("Invalid E-mail ID");
		   return false;
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID");
		   return false;
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID");
		    return false;
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID");
		    return false;
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID");
		    return false;
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID");
		    return false;
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID");
		    return false;
		 }

 		 return true;					
}

function change()
{
//alert("hi");
 
 if(document.getElementById("txtcountry").value == "United States")
 {
 //alert("US");
   document.getElementById("state").style.visibility = "visible";
  document.getElementById("state1").style.visibility = "visible";
   document.getElementById("txtstate1").style.visibility = "visible";
 document.getElementById("txtstate2").style.visibility = "hidden";
 document.getElementById("second").style.visibility = "hidden";
 document.getElementById("txtstate1").style.visibility = "visible";
 document.getElementById("first").style.visibility = "visible";
  document.getElementById("sta").value = 1;

 }
 else if(document.getElementById("txtcountry").value != "United States")
 {
 //alert("NOT US");
 document.getElementById("state").style.visibility = "hidden";
  document.getElementById("state1").style.visibility = "hidden";
  document.getElementById("txtstate1").style.visibility = "hidden";
 document.getElementById("first").style.visibility = "hidden";
 document.getElementById("txtstate2").style.visibility = "visible";
 document.getElementById("second").style.visibility = "visible";
 document.getElementById("tro").value = 2;
 
 }
 
}
function goto_pay()
  {
  var id=document.getElementById("cla").value;
    alert("ID="+id);
	/*if(document.getElementById("cla").value=="D")
	{
          document.firstform.action="validater.php";
   //document.firstform.submit();    
	}  
    else if(document.getElementById("cla").value=="P")
	{
          document.firstform.action="reg.php";
   		//document.firstform.submit();    
	}    
 
   */
	
 }

</script>
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script type="text/javascript" language="javascript">
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>

<script language=javascript>
function validate(chk){
  if (chk.checked == 1)
    alert("Thank You");
  else
    alert("You didn't check it! Let me check it for you.")
    chk.checked = 1; 
}
</script>
<script type="text/javascript">
function FormValidate()
{ 
  if (document.firstform.phno.value.replace(RegExp("^[ ]+", "g"), "").length != 10  )
{

alert ("Your Phone must contains atleast 10 digits.");
document.firstform.phno.focus();

valid=false ;
}
	else if (parseInt(document.firstform.phno.value)!=document.firstform.phno.value)
	{
		alert ("Phone number must be a number");
		document.firstform.phno.focus();
		valid=false;
	}
	
}
</script>


</head>

<body >
<table width="736" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top">
        <?
						  $id=$_REQUEST['id'];
						 
                           include("conn.php");
						   $query="select * from cuser where id='".$id."'";
						   $res=mysql_query($query);
						   while($res1=mysql_fetch_array($res))
						   {
						   $id=$res1['id'];
						   $name=$res1['userName'];
						   $pword=$res1['password'];
						   $access=$res1['access'];
						   $cname=$res1['company_name'];
						   $ccode=$res1['company_code'];
						   $cfname=$res1['cfname'];
						   $clname=$res1['clname'];
						   $type=$res1['type'];
						   $status=$res1['status'];
						   $address1=$res1['address1'];
						   $address2=$res1['address2'];
						   $country=$res1['country'];
						   $state=$res1['state'];
						   $city=$res1['city'];
						   $strno=$res1['strno'];
						   $zip=$res1['zip'];
						   $phno=$res1['phno'];
						   $ext=$res1['ext'];
				    	   $fax=$res1['fax'];
								 
						   }
						   ?><div align="center">
                           <? include("index.html"); ?></div>
        <form action="update_user.php" method="post" name="firstform" id="firstform" onsubmit="return validate222();">
          <table width="521" border="0" align="center">
            <tr>
              <td colspan="4" bgcolor="#E4EDEC"><? if($_REQUEST['stat']=="P")
	{
	?>
                <div align="center"><span class="login style1" >Registration successfull. Your account will be activated soon</span>
                      <?
    }
	?>
                      <span class="login style1">
                      <? $status=$_REQUEST['flag'];
	if($status=="FAILED")
	{
	echo "Email Id already exists";
	}
	if($status=="VFAILED")
	{
	echo "Incorrect verification code";
	}
	?>
                  </span> </div></td>
            </tr>
            <tr>
              <td width="131" height="21" bgcolor="#E4EDEC">&nbsp;</td>
              <td colspan="2" bgcolor="#E4EDEC"><label><div align="center" class="style9">
                <p class="style5">Winner Bid:<? echo $_REQUEST['bid'] ?>$ </p>
                <p class="style5">&nbsp;</p>
              </div></label>                <div align="left"></div></td>
              <td width="144" bgcolor="#E4EDEC"><div align="left">
                  <input type="hidden" name="ccode"  id="ccode" class="new1" value="0"/>
                  <input type="hidden" name="cid"  id="cid" class="new1" value="<? echo $id; ?>"/>
              </div></td>
            </tr>
            <tr>
              <td height="26" bgcolor="#E4EDEC"><div align="left"><span class="style4">UserName</span></div></td>
              <td width="144" bgcolor="#E4EDEC"><div align="left">
                  <input type="text" name="txtuid" class="new1" readonly="readonly" value="<? echo $name; ?>" />
              </div></td>
              <td width="110" bgcolor="#E4EDEC">&nbsp;</td>
              <td bgcolor="#E4EDEC">&nbsp;</td>
            </tr>
            <tr>
              <td height="30" bgcolor="#E4EDEC"><div align="left"><span class="style4">Password</span></div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <input type="text" class="new1" name="txtpwd" readonly="readonly" value="<? echo $pword; ?>"/>
              </div></td>
              <td bgcolor="#E4EDEC"><div align="left"><span class="style4">Access</span></div></td>
              <td bgcolor="#E4EDEC"><div align="left">
               <input type="text" class="access" name="access" readonly="readonly" value="<? echo $access; ?>"/>
                 
              </div></td>
            </tr>
            <tr>
              <td height="32" bgcolor="#E4EDEC"><div align="left"><span class="style4">Company Name</span> </div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <input type="text" name="cname" id="cname" class="new1" readonly="readonly" value="<? echo $cname; ?>"/>
              </div></td>
              <td bgcolor="#E4EDEC">&nbsp;</td>
              <td bgcolor="#E4EDEC">&nbsp;</td>
            </tr>
            <tr>
              <td bgcolor="#E4EDEC"><div align="left"><span class="style4"> First Name </span></div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <input name="cfname" type="text" class="new1" readonly="readonly" value="<? echo $cfname; ?>" />
              </div></td>
              <td bgcolor="#E4EDEC"><div align="left"><span class="style4">Last Name </span></div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <input name="clname" type="text" class="new1" readonly="readonly" value="<? echo $clname; ?>" />
              </div></td>
            </tr>
            <tr>
              <td height="21" bgcolor="#E4EDEC"><div align="left"><span class="style3">Address </span></div></td>
              <td bgcolor="#E4EDEC"><div align="left"></div></td>
              <td bgcolor="#E4EDEC"><div align="left"><span class="style4"></span></div></td>
              <td bgcolor="#E4EDEC"><div align="left"></div></td>
            </tr>
            <tr>
              <td height="24" bgcolor="#E4EDEC"><div align="left"><span class="style4">Address1</span></div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <input name="address1" type="text"  class="address1" readonly="readonly" style="width:135px;" value="<? echo $address1; ?>" />
              </div></td>
              <td bgcolor="#E4EDEC">&nbsp;</td>
              <td bgcolor="#E4EDEC">&nbsp;</td>
            </tr>
            <tr>
              <td height="24" bgcolor="#E4EDEC"><div align="left"><span class="style4">Address2</span></div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <input name="address2" type="text"  class="new1" readonly="readonly" value="<? echo $address2; ?>"/>
              </div></td>
              <td bgcolor="#E4EDEC">&nbsp;</td>
              <td bgcolor="#E4EDEC">&nbsp;</td>
            </tr>
            <tr>
              <td height="27" bgcolor="#E4EDEC"><div align="left"><span class="style4">Country</span></div></td>
              <td bgcolor="#E4EDEC"><div id="con" align="left">
                  <input name="country" type="text"  class="new1" readonly="readonly" value="<? echo $country; ?>"/>
              </div></td>
              <td bgcolor="#E4EDEC"><div id="state1" align="left"><span class="style4">State/Province</span></div></td>
              <td bgcolor="#E4EDEC"><div id="state" style="visibility:visible"  align="left">
              
              
                   <input name="address2" type="text"  class="new1" readonly="readonly" value="<? echo $state; ?>"/>
              </div></td>
            </tr>
            <tr>
              <td height="24" bgcolor="#E4EDEC"><div align="left"><span class="style4">City</span></div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <input name="city" type="text"  class="new1" readonly="readonly" value="<? echo $city; ?>"/>
              </div></td>
              <td bgcolor="#E4EDEC"><div align="left"><span class="style4">Street Number </span></div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <input name="stno" type="text" class="new1" readonly="readonly" value="<? echo $strno; ?>"/>
              </div></td>
            </tr>
            <tr>
              <td height="24" bgcolor="#E4EDEC"><div align="left"><span class="style4">Zip Code </span></div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <input class="new1" type="text" name="txtzip" readonly="readonly" id="txtzip" value="<? echo $zip; ?>" />
              </div></td>
              <td bgcolor="#E4EDEC"><div align="left"><span class="style4"></span></div></td>
              <td bgcolor="#E4EDEC"><div align="left"></div></td>
            </tr>
            <tr>
              <td height="36" bgcolor="#E4EDEC"><div align="left">
                  <p><span class="style4">Phone Number</span></p>
              </div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <input name="phno" type="text" class="new1" readonly="readonly" onchange="return FormValidate()" value="<? echo $phno; ?>"/>
              </div></td>
              <td bgcolor="#E4EDEC"><div align="left"></div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <input type="hidden" name="ext" class="new1" readonly="readonly" value="0"/>
              </div></td>
            </tr>
            <tr>
              <td height="24" bgcolor="#E4EDEC"><div align="left"><span class="style4">Fax Number </span></div></td>
              <td bgcolor="#E4EDEC"><div align="left">
                  <input name="fax" type="text" class="new1" readonly="readonly" value="<? echo $fax; ?>"/>
              </div></td>
              <td bgcolor="#E4EDEC">&nbsp;</td>
              <td bgcolor="#E4EDEC">&nbsp;</td>
            </tr>
            <tr>
              <td height="37" valign="top" bgcolor="#E4EDEC"><div align="left"><span class="style4"></span></div></td>
              <td colspan="3" valign="top" bgcolor="#E4EDEC"><div align="left" style="visibility:hidden">
                  <textarea name="notes" cols="0" rows="0" style="visibility:hidden" ></textarea>
              </div></td>
            </tr>
            <tr>
              <td height="45" colspan="4" bgcolor="#E4EDEC"><label>
              <div align="center">&nbsp;&nbsp;<span class="style2">&nbsp;
              </label>
              </span>              </td>
            </tr>
          </table>
        </form></td>
  </tr>
</table>
</td>
</tr>
</table>
</body>
</html>