<? include("conn.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>| Mercedes Benz parts |</title>
<style type="text/css">
<!--
body {
	background-color: #0A0A0A;
}
.style10 {color: #FFFFFF; font-size: 20px; font-family: Calibri;}
.style22 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #999999;
}
.style25 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	color: #CCCCCC;
}
.style28 {color: #999999}
.style36 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #CCCCCC;
}
.style38 {font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #CCCCCC; }
.style40 {font-size: 16px}
.style41 {font-family: Arial, Helvetica, sans-serif}
.style42 {font-size: 16px; font-family: Arial, Helvetica, sans-serif; }
-->
</style>
<script src="search_parts.js" type="text/javascript"></script>
<script src="details.js" type="text/javascript"></script>
<script src="ajax/details.js" type="text/javascript"></script>
<script src="ajax/subcat.js" type="text/javascript"></script>

<script type="text/javascript">
/*else if (parseInt(document.firstform.txtzip.value)!=document.firstform.txtzip.value)
	{
		alert ("Zipcode must be a number");
		valid=false;
	}*/
	
function validate9999(thisform)
{
//alert("hii");
var valid=true;
if (document.form3.fname.value == "")
	{
		alert ("Enter your First Name ");
		document.form3.fname.focus();
		valid=false;
	}
else if (document.form3.addr.value == "")
	{
		alert ("Please enter address ");
		document.form3.addr.focus();
		valid=false;
	}
	else if (document.form3.city.value == "")
	{
		alert ("Please enter city ");
		document.form3.city.focus();
		valid=false;
	}
	else if (document.form3.state.value == "")
	{
		alert ("Please enter state ");
		document.form3.state.focus();
		valid=false;
	}
		else if (document.form3.zip.value == "")
	{
		alert ("Please enter zip ");
		document.form3.zip.focus();
		valid=false;
	}
		else if (document.form3.ph1.value == "")
	{
		alert ("Please enter Phone no ");
		document.form3.ph1.focus();
		valid=false;
	}
		else if (document.form3.ph2.value == "")
	{
		alert ("Please enter Phone no ");
		document.form3.ph2.focus();
		valid=false;
	}
		else if (document.form3.ph3.value == "")
	{
		alert ("Please enter Phone no ");
		document.form3.ph3.focus();
		valid=false;
	}
		else if (document.form3.email.value == "")
	{
		alert ("Please enter Email ");
		document.form3.email.focus();
		valid=false;
	}
		else if (document.form3.yea.value == "")
	{
		alert ("Please enter Year ");
		document.form3.yea.focus();
		valid=false;
	}
		else if (document.form3.Select_Company.value == "--Select--")
	{
		alert ("Please enter Make ");
		document.form3.Select_Company.focus();
		valid=false;
	}
		else if (document.form3.Select_Viechle.value == "--Select--")
	{
		alert ("Please enter Model ");
		document.form3.Select_Viechle.focus();
		valid=false;
	}
		else if (document.form3.bstyle.value == "--Select--")
	{
		alert ("Please enter Model ");
		document.form3.bstyle.focus();
		valid=false;
	}
		else if (document.form3.partsneeded.value == "")
	{
		alert ("Please enter Parts Needed ");
		document.form3.partsneeded.focus();
		valid=false;
	}
	
		return valid;
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
</head>

<body leftmargin="0" topmargin="0" rightmargin="0" onload="MM_preloadImages('images/13_01.gif','images/13_02.gif','images/13_03.gif','images/13_04.gif')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top"><img src="images/12345.jpg" width="113" height="500" /></td>
    <td>
	
	<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="900" height="353">
      <param name="movie" value="flash/header.swf" />
      <param name="quality" value="high" />
      <embed src="flash/header.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="900" height="353"></embed>
    </object></td>
  </tr>
  <tr>
    <td><table width="100%" height="547" border="0" cellpadding="0" cellspacing="0" style="border:solid #333333 1px;">
      <tr>
        <td width="44%" height="39" align="center" valign="middle"   background="images/1.jpg" class="style10" ><div align="left">&nbsp;Parts Request </div></td>
        <td width="500" height="39"   background="images/1.jpg"  ><table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','images/13_01.gif',1)"></a></td>
            <td><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/13_02.gif',1)"></a></td>
            <td><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/13_03.gif',1)"></a></td>
            <td><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/13_04.gif',1)"></a></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="448" colspan="2" align="center" valign="top" bgcolor="#000000" style="border-right:#333333 solid 1px;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><div align="center"><span class="style25">Please fill in the information below as completely as possible. You will   receive price, availability, and shipping information directly from us   ASAP.</span></div></td>
          </tr>
          <tr>
            <td height="263" align="left" valign="top">              <h4 class="style28"><div>
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="51%"><span class="style40">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style41">Please provide contact information:</span></span></td>
                  <td width="49%"><span class="style42">Please provide vehicle &amp; part information:</span></td>
                </tr>
              </table>
            </div><br />
              <br />


<form name="form3" id="form3" method="post" action="insert.php">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="4%">&nbsp;</td>
    <td width="48%"><span class="style36">Name * </span></td>
    <td width="48%"><span class="style36">Year * </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <label>
      <input type="text" name="fname" id="fname" tabindex="1" style="width:190px;" />
        </label>
       </td>
    <td><select name="yea" id="yea" style="width:145px;" tabindex="11">
     <option value="2010" selected="selected">2010</option>
<option value="2009" >2009</option>
<option value="2008" >2008</option>
<option value="2007" >2007</option>
<option value="2006" >2006</option>
<option value="2005" >2005</option>
<option value="2004" >2004</option>
<option value="2003">2003</option>
<option value="2002" >2002</option>
<option value="2001" >2001</option>
<option value="2000" >2000</option>
<option value="1999" >1999</option>
<option value="1998" >1998</option>
<option value="1997" >1997</option>
<option value="1996" >1996</option>
<option value="1995" >1995</option>
<option value="1994" >1994</option>
<option value="1993" >1993</option>
<option value="1992" >1992</option>
<option value="1991" >1991</option>
<option value="1990" >1990</option>
<option value="1989" >1989</option>
<option value="1988" >1988</option>
<option value="1987" >1987</option>
<option value="1986" >1986</option>
<option value="1985" >1985</option>
<option value="1984" >1984</option>
<option value="1983" >1983</option>
<option value="1982" >1982</option>
<option value="1981" >1981</option>
<option value="1980" >1980</option>
<option value="1979" >1979</option>							<option value="1978" >1978</option>
<option value="1977" >1977</option>
<option value="1976" >1976</option>
<option value="1975" >1975</option>
<option value="1974" >1974</option>
<option value="1973" >1973</option>
<option value="1972" >1972</option>
<option value="1971" >1971</option>
<option value="1970" >1970</option>
<option value="1969" >1969</option>
<option value="1968" >1968</option>
<option value="1967" >1967</option>
<option value="1966" >1966</option>
<option value="1965" >1965</option>
<option value="1964" >1964</option>
<option value="1963" >1963</option>
<option value="1962" >1962</option>
<option value="1961" >1961</option>
<option value="1960" >1960</option>
<option value="1959" >1959</option>
<option value="1958" >1958</option>
<option value="1957" >1957</option>
<option value="1956" >1956</option>
<option value="1955" >1955</option>
<option value="1954" >1954</option>
<option value="1953" >1953</option>
<option value="1952" >1952</option>
<option value="1951" >1951</option>
<option value="1950" >1950</option>
<option value="1949" >1949</option>
<option value="1948" >1948</option>
<option value="1947" >1947</option>
<option value="1946" >1946</option>
<option value="1945" >1945</option>
<option value="1944" >1944</option>
<option value="1943" >1943</option>
<option value="1942" >1942</option>
<option value="1941" >1941</option>
<option value="1940" >1940</option>
<option value="1939" >1939</option>
<option value="1938" >1938</option>
<option value="1937" >1937</option>
<option value="1936" >1936</option>
<option value="1935" >1935</option>
<option value="1934" >1934</option>
<option value="1933" >1933</option>
<option value="1932" >1932</option>
<option value="1931" >1931</option>
<option value="1930" >1930</option>
<option value="1929" >1929</option>
<option value="1928" >1928</option>
<option value="1927" >1927</option>
<option value="1926" >1926</option>
<option value="1925" >1925</option>
<option value="1924" >1924</option>
<option value="1923" >1923</option>
<option value="1922" >1922</option>
<option value="1921" >1921</option>
<option value="1920" >1920</option>
    </select></td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="4%">&nbsp;</td>
    <td width="48%"><span class="style36">Address * </span></td>
    <td width="48%"><span class="style36">Make * </span></td>
  </tr>
  <tr>
    <td rowspan="5">&nbsp;</td>
    <td rowspan="5" valign="top"><div align="left">
      <textarea name="addr" id="addr" cols="" rows="" style="height:100px; width:280px;" tabindex="2"></textarea>
    </div></td>
    <td><select size="1" value="" id="Select_Company" name="Select_Company" onChange="subcatg(this.value);" style="font-family: Arial; font-size: 10pt; width:207px">
  <option>--Select--</option>
<?php
      $qryselect ="select * from vehicle_cmpny";
      $result=mysql_query($qryselect) or die("cannot ready vehicle company");
      while($rec=mysql_fetch_array($result))
       {
	    // echo $rec[0];
        echo "<option value=$rec[0]>$rec[1]</option>";
       }
?>
</select></td>
  </tr>
  <tr>
    <td><span class="style36">Model * </span></td>
  </tr>
  <tr>
    <td>
      <label>
          <label>
        <div id="vehicle_div" style="width:10px;">
<select size="1" value="" id="Select_Viechle" name="Select_Viechle"  style="font-family: Arial; font-size: 10pt; width:207px; ">
    <option>--Select-- </option>
</select>      
		</div> 
        </label>
        </label>
    </td>
  </tr>
  <tr>
    <td><span class="style36">Body Style </span></td>
  </tr>
  <tr>
    <td><select name="bstyle" id="bstyle" style="width:180px;"  tabindex="14">
      <option label="2-Door" value="2-Door">2-Door</option>
<option label="3-Door" value="3-Door">3-Door</option>
<option label="4-Door" value="4-Door">4-Door</option>
<option label="5-Door" value="5-Door">5-Door</option>

<option label="Convertible" value="Convertible">Convertible</option>
<option label="Station Wagon" value="Station Wagon">Station Wagon</option>
<option label="Pick-Up" value="Pick-Up">Pick-Up</option>

<option label="Mini-Van" value="Mini-Van">Mini-Van</option>
<option label="Full Size Van" value="Full Size Van">Full Size Van</option>
<option label="Sports Utility (SUV)" value="Sports Utility (SUV)">Sports Utility (SUV)</option>
<option label="Truck 1 ton &amp; over" value="Truck 1 ton &amp; over">Truck 1 ton &amp; over</option>



        </select></td>
  </tr>
</table>



<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="4%">&nbsp;</td>
    <td width="48%"><span class="style36">City * </span></td>
    <td width="48%"><span class="style36">Engine Size </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <label>
      <input type="text" name="city" id="city" tabindex="3"/>
        </label>
        </td>
    <td><select name="esize" id="esize" style="width:180px;" tabindex="15">
      <option value="3-Cylinder">
		3-Cylinder</option>
		<option>4-Cylinder</option>
		<option>5-Cylinder</option>
		<option>Straight 6</option>

		<option>V-6</option>
		<option>V-8</option>
		<option>V-10</option>
		<option>V-12</option>
		<option value="1.0L">1.0
		Liter</option>
		<option value="1.1L">1.1
		Liter</option>

		<option value="1.2L">1.2
		Liter</option>
		<option value="1.3 Liter">
		1.3 Liter</option>
		<option value="1.4 Liter">
		1.4 Liter</option>

		<option value="1.5 Liter">
		1.5 Liter</option>

		<option value="1.6 Liter">
		1.6 Liter</option>
		<option value="1.7 Liter">
		1.7 Liter</option>
		<option value="1.8 Liter">

		1.8 Liter</option>
		<option value="1.9 Liter">

		1.9 Liter</option>
		<option value="2.0 Liter">
		2.0 Liter</option>
		<option value="2.1 Liter">
		2.1 Liter</option>

		<option value="2.2 Liter">
		2.2 Liter</option>

		<option value="2.0 Liter">
		2.3 Liter</option>
		<option value="2.4 Liter">
		2.4 Liter</option>
		<option value="2.5 Liter">

		2.5 Liter</option>
		<option value="2.6 Liter">

		2.6 Liter</option>
		<option value="2.7 Liter">
		2.7 Liter</option>
		<option value="2.8 Liter">
		2.8 Liter</option>

		<option value="2.9 Liter">
		2.9 Liter</option>

		<option value="3.0 Liter">
		3.0 Liter</option>
		<option value="3.1 Liter">
		3.1 Liter</option>
		<option value="3.2 Liter">

		3.2 Liter</option>
		<option value="3.3 Liter">

		3.3 Liter</option>
		<option value="3.4 Liter">
		3.4 Liter</option>
		<option value="3.5 Liter">
		3.5 Liter</option>

		<option value="3.6 Liter">
		3.6 Liter</option>

		<option value="3.6 Liter">
		3.8 Liter</option>
		<option value="3.9 Liter">
		3.9 Liter</option>
		<option value="4.0 Liter">

		4.0 Liter</option>
		<option value="4.1 Liter">

		4.1 Liter</option>
		<option value="4.2 Liter">
		4.2 Liter</option>
		<option value="4.3 Liter">
		4.3 Liter</option>

		<option value="4.4 Liter">
		4.4 Liter</option>

		<option value="4.5 Liter">
		4.5 Liter</option>
		<option value="4.6 Liter">
		4.6 Liter</option>
		<option value="4.7 Liter">

		4.7 Liter</option>
		<option value="4.8 Liter">

		4.8 Liter</option>
		<option value="4.9 Liter">
		4.9 Liter</option>
		<option value="5.0 Liter">
		5.0 Liter</option>

		<option value="5.1 Liter">
		5.1 Liter</option>

		<option value="5.2 Liter">
		5.2 Liter</option>
		<option value="5.3 Liter">
		5.3 Liter</option>
		<option value="5.4 Liter">

		5.4 Liter</option>
		<option value="5.5 Liter">

		5.5 Liter</option>
		<option value="5.6 Liter">
		5.6 Liter</option>
		<option value="5.7 Liter">
		5.7 Liter</option>

		<option value="5.8 Liter">
		5.8 Liter</option>

		<option value="5.9 Liter">
		5.9 Liter</option>
		<option value="6.0 Liter">
		6.0 Liter</option>
		<option value="6.1 Liter">

		6.1 Liter</option>
		<option value="6.2 Liter">

		6.2 Liter</option>
		<option value="6.3 Liter">
		6.3 Liter</option>
		<option value="6.4 Liter">
		6.4 Liter</option>

		<option value="6.5 Liter">
		6.5 Liter</option>

		<option value="6.6 Liter">
		6.6 Liter</option>
		<option value="6.7 Liter">
		6.7 Liter</option>
		<option value="6.8 Liter">

		6.8 Liter</option>
		<option value="6.9 Liter">

		6.9 Liter</option>
		<option value="7.0 Liter">
		7.0 Liter</option>
		<option value="7.1 Liter">
		7.1 Liter</option>

		<option value="7.2 Liter">
		7.2 Liter</option>

		<option value="7.3 Liter">
		7.3 Liter</option>
		<option value="7.4 Liter">
		7.4 Liter</option>
		<option value="7.5 Liter">

		7.5 Liter</option>
		<option value="7.6 Liter">

		7.6 Liter</option>
		<option value="7.7 Liter">
		7.7 Liter</option>
		<option value="7.8 Liter">
		7.8 Liter</option>

		<option value="7.9 Liter">
		7.9 Liter</option>

		<option value="8.0 Liter">
		8.0 Liter</option>
		<option value="8.1 Liter">
		8.1 Liter</option>
		<option value="8.2 Liter">

		8.2 Liter</option>
		<option value="8.3 Liter">

		8.3 Liter</option>
		<option value="8.4 Liter">
		8.4 Liter</option>
		<option value="8.5 Liter">
		8.5 Liter</option>

		<option value="8.6 Liter">
		8.6 Liter</option>

		<option value="8.7 Liter">
		8.7 Liter</option>
		<option value="8.8 Liter">
		8.8 Liter</option>
		<option value="8.9 Liter">

		8.9 Liter</option>


        </select></td>
  </tr>
</table>



<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="4%">&nbsp;</td>
    <td width="48%"><span class="style38">State / Procince/Region * </span></td>
    <td width="48%"><span class="style36">Transmission Type </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <label>
      <input type="text" name="state" id="state" tabindex="4" />
        </label>
        </td>
    <td><select name="ttype" id="ttype" style="width:180px;" tabindex="16">
      <option label="Automatic" value="Automatic">Automatic</option>
<option label="Automatic-OD" value="Automatic-OD">Automatic-OD</option>
<option label="3-Speed STD" value="3-Speed STD">3-Speed STD</option>
<option label="4-Speed STD" value="4-Speed STD">4-Speed STD</option>

<option label="5-Speed STD" value="5-Speed STD">5-Speed STD</option>
<option label="6-Speed STD" value="6-Speed STD">6-Speed STD</option>

        </select></td>
  </tr>
</table>



<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="4%">&nbsp;</td>
    <td width="48%"><span class="style38">postal /Zip code * </span></td>
    <td width="48%"><span class="style36">Axle Type </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <label>
      <input type="text" name="zip" id="zip" tabindex="5" />
        </label>
        </td>
    <td><select name="atype"  id="atype" style="width:180px;" tabindex="17">
      <option value="FWD (Front Wheel Drive)">FWD (Front Wheel Drive)</option>

<option value="RWD (Rear Wheel Drive)">RWD (Rear Wheel Drive)</option>
<option value="AWD (All Wheel Drive)">AWD (All Wheel Drive)</option>
<option label="4x2 (Two Wheel Drive)" value="4x2 (Two Wheel Drive)">4x2 (Two Wheel Drive)</option>
<option label="4x4 (Four Wheel Drive)" value="4x4 (Four Wheel Drive)">4x4 (Four Wheel Drive)</option>


        </select></td>
  </tr>
</table>




<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="4%">&nbsp;</td>
    <td width="48%"><span class="style36">Country * </span></td>
    <td width="48%"><span class="style36">Fuel Type </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><select name="country" id="country" style="width:145px;" tabindex="6">
       <option value="Angola">Angola</option>
            <option value="Argentina">Argentina</option>
            <option value="Australia">Australia</option>
            <option value="Austria">Austria</option>
            <option value="Bahamas">Bahamas</option>
            <option value="Bahrain">Bahrain</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Barbados">Barbados</option>
            <option value="Belarus">Belarus</option>
            <option value="Belgium">Belgium</option>
            <option value="Bermuda">Bermuda</option>
            <option value="Bolivia">Bolivia</option>
            <option value="Bosnia And Herzegovina">Bosnia And Herzegovina</option>
            <option value="Brazil">Brazil</option>
            <option value="Brunei Darussalam">Brunei Darussalam</option>
            <option value="Bulgaria">Bulgaria</option>
            <option value="Cambodia">Cambodia</option>
            <option value="Cameroon">Cameroon</option>
            <option value="Canada">Canada</option>
            <option value="Cape Verde">Cape Verde</option>
            <option value="Cayman Islands">Cayman Islands</option>
            <option value="Central African Republic">Central African Republic</option>
            <option value="Chile">Chile</option>
            <option value="China">China</option>
            <option value="Colombia">Colombia</option>
            <option value="Congo">Congo</option>
            <option value="Costa Rica">Costa Rica</option>
            <option value="Croatia">Croatia</option>
            <option value="Cuba">Cuba</option>
            <option value="Cyprus">Cyprus</option>
            <option value="Czech Republic">Czech Republic</option>
            <option value="Denmark">Denmark</option>
            <option value="Djibouti">Djibouti</option>
            <option value="Dominican Republic">Dominican Republic</option>
            <option value="Ecuador">Ecuador</option>
            <option value="Egypt">Egypt</option>
            <option value="El Salvador">El Salvador</option>
            <option value="Estonia">Estonia</option>
            <option value="Ethiopia">Ethiopia</option>
            <option value="Fiji">Fiji</option>
            <option value="Finland">Finland</option>
            <option value="France">France</option>
            <option value="Gabon">Gabon</option>
            <option value="Gambia">Gambia</option>
            <option value="Georgia">Georgia</option>
            <option value="Germany">Germany</option>
            <option value="Ghana">Ghana</option>
            <option value="Greece">Greece</option>
            <option value="Guatemala">Guatemala</option>
            <option value="Guyana">Guyana</option>
            <option value="Honduras">Honduras</option>
            <option value="HK">Hong Kong</option>
            <option value="Hong Kong">Hungary</option>
            <option value="Iceland">Iceland</option>
            <option value="India" >India</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Iran">Iran</option>
            <option value="Ireland">Ireland</option>
            <option value="Israel">Israel</option>
            <option value="Italy">Italy</option>
            <option value="Jamaica">Jamaica</option>
            <option value="Japan">Japan</option>
            <option value="Jordan">Jordan</option>
            <option value="Kazakhstan">Kazakhstan</option>
            <option value="Kenya">Kenya</option>
            <option value="Kuwait">Kuwait</option>
            <option value="Kyrgyzstan">Kyrgyzstan</option>
            <option value="Latvia">Latvia</option>
            <option value="Lebanon">Lebanon</option>
            <option value="Lithuania">Lithuania</option>
            <option value="LU">Luxembourg</option>
            <option value="Luxembourg">Lybian Arab Jamahiriya</option>
            <option value="Malawi">Malawi</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Malta">Malta</option>
            <option value="Mexico">Mexico</option>
            <option value="Morocco">Morocco</option>
            <option value="Mozambique">Mozambique</option>
            <option value="Namibia">Namibia</option>
            <option value="Nepal">Nepal</option>
            <option value="Netherlands">Netherlands</option>
            <option value="Antilles">Antilles</option>
            <option value="New Zealand">New Zealand</option>
            <option value="Nicaragua">Nicaragua</option>
            <option value="Niger">Niger</option>
            <option value="Nigeria">Nigeria</option>
            <option value="Norway">Norway</option>
            <option value="Oman">Oman</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Panama">Panama</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Peru">Peru</option>
            <option value="Philippines">Philippines</option>
            <option value="Poland">Poland</option>
            <option value="Portugal">Portugal</option>
            <option value="Puerto Rico">Puerto Rico</option>
            <option value="Qatar">Qatar</option>
            <option value="Republic Of Moldova">Republic Of Moldova</option>
            <option value="Republic of Korea">Republic of Korea</option>
            <option value="Romania">Romania</option>
            <option value="Russian Federation">Russian Federation</option>
            <option value="Rwanda">Rwanda</option>
            <option value="Saudi Arabia">Saudi Arabia</option>
            <option value="Senegal">Senegal</option>
            <option value="Serbia And Montenegro">Serbia And Montenegro</option>
            <option value="Singapore">Singapore</option>
            <option value="Slovakia">Slovakia</option>
            <option value="Slovenia">Slovenia</option>
            <option value="Somalia">Somalia</option>
            <option value="South Africa">South Africa</option>
            <option value="Spain">Spain</option>
            <option value="Sri Lanka">Sri Lanka</option>
            <option value="Sudan">Sudan</option>
            <option value="Suriname">Suriname</option>
            <option value="Sweden">Sweden</option>
            <option value="Switzerland">Switzerland</option>
            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
            <option value="Taiwan">Taiwan</option>
            <option value="Tanzania">Tanzania</option>
            <option value="Thailand">Thailand</option>
            <option value="The Former Yugoslav Republic Of Macedonia"> Republic Of Macedonia</option>
            <option value="Trinidad And Tobago">Trinidad And Tobago</option>
            <option value="Tunisia">Tunisia</option>
            <option value="Turkey">Turkey</option>
            <option value="Uganda">Uganda</option>
            <option value="Ukraine">Ukraine</option>
            <option value="United Arab Emirates">United Arab Emirates</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="United States" selected="selected">United States</option>
            <option value="Uruguay">Uruguay</option>
            <option value="Uzbekistan">Uzbekistan</option>
            <option value="Venezuela">Venezuela</option>
            <option value="VietNam">VietNam</option>
            <option value="Western Sahara">Western Sahara</option>
            <option value="Yemen">Yemen</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabwe">Zimbabwe</option>
    </select>    </td>
    <td><select name="ftype" id="ftype" style="width:180px;" tabindex="18">
     <option value="Gasoline">Gasoline</option>
<option value="Diesel">Diesel</option>
<option value="Propane">Propane</option>
<option value="Electric">Electric</option>


        </select></td>
  </tr>
</table>



<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="4%">&nbsp;</td>
    <td width="48%"><span class="style38">Phone * </span></td>
    <td width="48%"><span class="style36">VIN#</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <label>
		<input type="text" name="ph1"  id="ph1" style="width:50px;" tabindex="7"/>
		-
		<input type="text" name="ph2" id="ph2" style="width:50px;" tabindex="8"/>
		-
		<input type="text" name="ph3"  id="ph3"  style="width:50px;" tabindex="9"/>
        </label>
       </td>
    <td>
      <label>
      <input type="text" name="vin" id="vin"  tabindex="19" style="width:180px;"/>
      </label>
   </td>
  </tr>
</table>



<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="4%">&nbsp;</td>
    <td width="48%"><span class="style38">Email * </span></td>
    <td width="48%"><span class="style36">Part number </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <label>
      <input type="text" name="email" id="email" tabindex="10" style="width:190px;" />
      </label>
     </td>
    <td>
      <label>
      <input type="text" name="pno" id="pno"  tabindex="20" style="width:180px;"/>
      </label>
    </td>
  </tr>
</table>




<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="4%">&nbsp;</td>
    <td width="48%"></td>
    <td width="48%"><span class="style36">Part(s) Needed * </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>    </td>
    <td>
      <label>
      <input type="text" name="partsneeded" id="partsneeded" tabindex="21"  style="width:180px;"/>
      </label>
    </td>
  </tr>
</table>




<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="4%">&nbsp;</td>
    <td width="48%"></td>
    <td width="48%"><span class="style36">Additional Information  </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>    </td>
    <td><textarea name="addnlinfo" id="addnlinfo" cols="" rows="" style="width:350px; height:150px;" tabindex="22"></textarea></td>
  </tr>
</table>



<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="4%" height="38">&nbsp;</td>
    <td width="48%"></td>
    <td width="48%" align="left" valign="top">
      <input type="image" onclick="return validate9999();" src="images/buttton.jpg" width="122" height="49" border="0" align="middle" /></td>
  </tr>
</table>

</form>

            </h4>			  </td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td colspan="2" align="center" valign="middle" bgcolor="#000000" style="border-top:solid  #333333 1px;"><span class="style22"><br />
          All Rights reserved by www.srishtis.com <br />
          <br />
        </span></td>
      </tr>
    </table></td>
  </tr>
</table>	</td>
    <td valign="top"><img src="images/123456.jpg" width="113" height="900" /></td>
  </tr>
</table>

</body>
</html>
