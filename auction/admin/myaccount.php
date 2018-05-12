<? session_start();
if(!isset($_SESSION['s_cuserId']))
{
header("Location:signinpage.php?page=myaccount");
}
$user=$_SESSION['s_cuserId'];
//echo "user is::".$user;
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Autobuyplus</title>
<meta name="keywords" content="Public Autobuyplus|Public  salvage|Public  salvaging|Public  vehicle|Public  vehicles|Public  auction|Public  part| Public parts|Public  salvage vehicle|Public  salvage vehicles|Public  salvage auto|Public  salvage autos|Public  salvage car|Public  salvage cars|Public  car salvage|Public  vehicle salvage|Public  used car|Public  used cars|Public  wreck|Public  wrecked car|Public  car wreck|Public  car part|Public  car parts| Public auto part|Public  auto parts|Public  used auto|Public  used autos|Public  auto auction| Public car auction| Public vehicle auction|Public  insurance salvage|Public  insurance car|Public  insurance vehicle|Public  auction vehicle|Public  auction vehicles|Public  auction car|Public  auction cars|Public  auctioner| Public auctioneer| Public auctioning|Public  auto selling|Public  car selling|Public  vehicle selling|Public  auto seller|Public  auto sellers|Public  car seller| car sellers|Public  vehicle seller|Public  vehicle sellers|Public  auto buying| car buying|Public  vehicle buying|Public  rebuilders|Public  junk| Public junked|Public  junk car|Public  junk cars|Public  dismantler|Public  dismantlers|Public  licensed dealer|Public  licensed dealers| national auto auction|Public  live auction|Public  live auto auction| bid| Public sealed bid| Public online bid| Public on-line bid|Public  online bidding| Public on-line bidding|  Public online auction| Public on-line auction| Public access| Public seller access| lot| Public lot display| Public titled| Public non-repairable|Public  public auction ">
<meta name="description" content="Public Autobuyplus|Public  salvage|Public  salvaging|Public  vehicle|Public  vehicles|Public  auction|Public  part| Public parts|Public  salvage vehicle|Public  salvage vehicles|Public  salvage auto|Public  salvage autos|Public  salvage car|Public  salvage cars|Public  car salvage|Public  vehicle salvage|Public  used car|Public  used cars|Public  wreck|Public  wrecked car|Public  car wreck|Public  car part|Public  car parts| Public auto part|Public  auto parts|Public  used auto|Public  used autos|Public  auto auction| Public car auction| Public vehicle auction|Public  insurance salvage|Public  insurance car|Public  insurance vehicle|Public  auction vehicle|Public  auction vehicles|Public  auction car|Public  auction cars|Public  auctioner| Public auctioneer| Public auctioning|Public  auto selling|Public  car selling|Public  vehicle selling|Public  auto seller|Public  auto sellers|Public  car seller| car sellers|Public  vehicle seller|Public  vehicle sellers|Public  auto buying| car buying|Public  vehicle buying|Public  rebuilders|Public  junk| Public junked|Public  junk car|Public  junk cars|Public  dismantler|Public  dismantlers|Public  licensed dealer|Public  licensed dealers| national auto auction|Public  live auction|Public  live auto auction| bid| Public sealed bid| Public online bid| Public on-line bid|Public  online bidding| Public on-line bidding|  Public online auction| Public on-line auction| Public access| Public seller access| lot| Public lot display| Public titled| Public non-repairable|Public  public auction ">

<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
<!--
-->
/*Button*/
.buttonSubmit {
	/*width:auto;
	height:26px;
	color:#FFF;
	font-weight:bold;
	padding:2px;*/
	background:url(images/signin.gif);
	/*cursor:pointer;
	border:none;*/
}
.style2 {
	color: #CCCCCC;
	font-size: 18px;
}
.style5 {
	color: #FF0000;
	font-weight: bold;
}
.style3 {
	color:#FFCC00 ;
	font-weight: bold;
}
</style>
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
<script language="javascript" src="./isValidEmail.js"></script>
<script language="JavaScript" type="text/JavaScript">


	function validate()
{

      valid=true;
       if (document.form1.txtuid.value == "")
    {
       alert ("Please Enter Your Email-Id");
	   document.form1.txtuid.focus();
      valid=false ;
    }
	else if(!isValidEmail(document.form1.txtuid.value) )
	{
	alert("Invalid Email Id.");
	document.form1.txtuid.focus();
	 return false;
	}
	    else if (document.form1.txtpwd.value == "")
      {
        alert ("Please enter your password");
		document.form1.txtpwd.focus();
        valid=false ;
      }
         return valid;
}




</script>
<script type="text/javascript">
function validate9999(thisform)
{
var valid=true;
/*if (document.form3.cat.value == "category")
	{
		alert ("Please select category ");
		document.form3.cat.focus();
		valid=false;
	}
else if (document.form3.txt_auto_make.value == "sub")
	{
		alert ("Please select make ");
		document.form3.txt_auto_make.focus();
		valid=false;
	}
	else if (document.form3.model.value == "model")
	{
		alert ("Please select model ");
		document.form3.model.focus();
		valid=false;
	}
	else if (document.form3.titleGroupCode.value == "tt")
	{
		alert ("Please choose title");
		document.form3.titleGroupCode.focus();
		valid=false;
	}*/
	if (document.form3.txtstate1.value == "state")
	{
		alert ("Please select state");
		document.form3.txtstate1.focus();
		valid=false;
	}
		return valid;
}
</script>
<script LANGUAGE="JavaScript">
function Page(PageName)
 { 
   var NextWin = PageName;
   var NewWin = window.open(NextWin,'email','personalbar=0,statusbar=0,toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=1,resizable=1,width=1024,height=720');
   NewWin.moveTo(0,0); 
   NewWin.focus();
 }
</script>
<script type="text/javascript" src="details.js" ></script>
<script type="text/javascript" src="www.js" ></script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body bgcolor="#4C4C4E" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onload="MM_preloadImages('images/home_over.gif','images/pre-bid_over.gif','images/post_over.gif','images/account_over.gif','images/live_over.gif','images/signup_over.gif','images/contact_over.gif')">
<table width="946" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#4C4C4E">
  <tr>
    <td width="700" height="124" rowspan="2"><img src="images/logo.gif" width="277" height="124" /></td>
    <td height="82" colspan="7" bgcolor="#4C4C4E">
	<div style="padding-top:50px">
      <div style="padding-right:20px;" align="right">
        <? 
if(isset($_SESSION['s_cuserId']))
{
$userId=$_SESSION['s_cuserId'];
$useruserId=$_SESSION['ss_cuserId'];
?>
        <span  style="color:#CCCCCC" class="styleheader2">Welcome, <? echo $userId;?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <a href="signout.php" class="styleheader1"  style="text-decoration:none">Sign out</a>
        <? }
else 
{
?>  
        </div>
      <form name="form1" action="logincheck.php" method="post">
	<table width="653" border="0" cellpadding="1" cellspacing="1"> 
  <tr>
    <td width="41" class="login">E-mail</td>
    <td width="151"><input type="text" name="txtuid" id="txtuid"></td>
    <td width="66" class="login">Password</td>
    <td width="159"><input type="password" name="txtpwd" id="txtpwd"></td>
	<td width="82"><input type="image" src="images/signin.gif" onclick="return validate();"></td>
	<td width="135" class="small"><a href="#">Forgot your password ?</a></td>
  </tr>
</table></form>
<?  } ?>
</div>	</td>
  </tr>
  <tr height="42">
    <td width="55" height="42"><a href="indexsuccess.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('home','','images/home_over.gif',1)"><img src="images/home.gif" alt="Home" name="home" width="55" height="42" border="0" id="home" /></a></td>
    <td width="97"><a href="bidtype.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('prebidding','','images/pre-bid_over.gif',1)"><img src="images/pre-bid.gif" alt="Pre Bidding" name="prebidding" width="97" height="42" border="0" id="prebidding" /></a></td>
    <td width="100"><a href="classifieds.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('post','','images/post_over.gif',1)"><img src="images/post.gif" alt="Post Auto Classifieds" name="post" width="100" height="42" border="0" id="post" /></a></td>
    <td width="107"><a href="myaccount.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('myaccount','','images/account_over.gif',1)"><img src="images/account.gif" alt="My Account" name="myaccount" width="107" height="42" border="0" id="myaccount" /></a></td>
    <td width="115"><a href="javascript:Page('liveauction.php')" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('live','','images/live_over.gif',1)"><img src="images/live.gif" alt="Live Auctions" name="live" width="115" height="42" border="0" id="live" /></a></td>
    <td width="73"><a href="signup.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('signup','','images/signup_over.gif',1)"><img src="images/signup.gif" alt="Sign Up" name="signup" width="73" height="42" border="0" id="signup" /></a></td>
    <td width="70"><a href="contactus.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('contact','','images/contact_over.gif',1)"><img src="images/contact.gif" alt="Contact Us" name="contact" width="122" height="42" border="0" id="contact" /></a></td>
  </tr>
  <tr>
    <td colspan="8">
     <p align="center" class="style2">&nbsp;</p>
     <p align="center" class="style2">Bidding Details</p>
     <table align="center" width="99%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center">
        <table width="99%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td style="width:34; height:24px; background-image:url(images/left_top_corner.gif); background-repeat:no-repeat;">&nbsp;</td>
            <td style="width:860px; height:24px; background-image:url(images/top_mid.gif); background-repeat:repeat-x;">&nbsp;</td>
            <td  style="width:34; height:24px; background-image:url(images/right_top_corner.gif); background-repeat:no-repeat;">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center" valign="top">
        <table width="99%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">

          <tr bgcolor="#B6B6B7" >
            <!-- <td align='center' onmouseover="#1E8C8D"><span class="style10 style2">No</span></td>-->
            <td width="9%" align='center'>Make</td>
            <!-- <td><div align="center" class="style2">Id</div></td>-->
            <td width="9%" align='center' >Model</td>
            <td width="16%" align='center' >Date</td>
            <td width="10%" align='center' >Bid Amount</td>
        <!--    <td width="22%" align='center' >Highest Amount</td>-->
            
 
           
            <td width="34%" align='center' onmouseover="#1E8C8D">You are the highest bidder</td>
            <td width="34%" align='center' onmouseover="#1E8C8D">Bid again</td>
            </tr>
    
<tr>
<?		
				include("conn.php");
	$query="select distinct product_id from tbl_bid where user_id='".$user."' order by date_time desc ";
	//echo "query ".$query;
						   $res=mysql_query($query);
						   while($res1=mysql_fetch_array($res))
						   {
						   //$user_id=$res1['user_id'];
						  // $date_time=$res1['date_time'];
						   $product_id=$res1['product_id'];
						   $pid=$row['auto_productid'];
						  // $bid_amt=$res1['bid_amt'];
						 $qqq="select * from tbl_bid where product_id='".$product_id."' and  user_id='".$user."' order by bid_amt DESC LIMIT 0,1 ";
						// echo "query is::".$qqq;
						 $ressss=mysql_query($qqq);
						 while($resss=mysql_fetch_array($ressss))
						   {
						   //$user_id=$res1['user_id'];
						 $date_time=$resss['date_time']; 
						  $bid_amt=$resss['bid_amt'];
						  //echo "bid_amt".$bid_amt;
						  $que="select bid_amt,user_id from tbl_bid where product_id='".$product_id."' order by bid_amt DESC,id   LIMIT 0,1 ";
						 // echo "query is::".$que;
						  $ress23=mysql_query($que);
							 while($ress2=mysql_fetch_array($ress23))
						   {	
						   	$amtbid=$ress2['bid_amt'];
							$u_bid=$ress2['user_id'];
							//echo $u_bid;
						  //echo $userId;
							$querys="select * from tbl_automobile_details where auto_productid='".$product_id."' and bid_status='0'  ";
							//echo "query is::".$querys;
						    $ress=mysql_query($querys);
						   while($ress1=mysql_fetch_array($ress))
						   {
						   $auto_make=$ress1['auto_make'];
						   $auto_model=$ress1['auto_model'];
						   //$auto_make=$ress1['auto_make'];
						 /* $que="select * from tbl_bid where product_id='".$product_id."' order by bid_amt desc ";
						  	
							echo "query is::".$que;
							$ress23=mysql_query($que);
							 while($ress2=mysql_fetch_array($ress23))
						   {	
						   	$amtbid=$ress2['bid_amt'];	*/	   
						   ?>

<tr bgcolor="#666666">

            <!--<td align='center'></td>-->
            <td align='center'><span class="style2"><? echo $auto_make; ?></span></td>
            <!--<td align='center'></td>-->
            <td align='center'><span class="style2"><? echo $auto_model; ?></span></td>
            <td align='center'><span class="style2"><? echo $date_time; ?></span></td>
            <td align='center'><span class="style2"><? echo $bid_amt; ?></span></td>
            <!-- <td align='center'></td>-->
           <!-- <td align='center'><span class="style2"><? echo $amtbid; ?></span></td>-->
            
      
            <td align='center'><? if($bid_amt<$amtbid) { echo '<span class="style5">NO</span>'; } else  if($bid_amt>$amtbid) 
	{ echo '<span class="style3">YES</span>'; } 
	else if($bid_amt=$amtbid){ 
	    if($u_bid==$userId){
	 echo '<span class="style3">YES</span>';}
	 else
	 {
	 echo '<span class="style5">No</span>';
	 }}?>
             </td><?php echo $row['auto_id']; ?>
            <?  $que="select bid_amt from tbl_bid where product_id='".$product_id."' order by bid_amt DESC LIMIT 1,1 ";
						 // echo "query is::".$que;
						  $ress23=mysql_query($que);
							 while($ress2=mysql_fetch_array($ress23))
						   {	
						   	$amtbid1=$ress2['bid_amt'];
							}
							?>
             
              <td align='center'><a href="video_description.php?id=<? echo $product_id; ?>&amp;amt=<?php echo $amtbid1+25; ?>"> <img border="0" src="images/button_place_the_bid.jpg" /></a></td>
            </tr>
 <?
  }
  }
  } 
  }
  
  ?>          
        </table></td>
      </tr>
      <tr>
        <td align="center"><table width="99%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td style="width:34; height:24px; background-image:url(images/left_bottom_corner.gif); background-repeat:no-repeat;">&nbsp;</td>
            <td style="width:860px; height:24px; background-image:url(images/bottom_mid_bg.gif); background-repeat:repeat-x;">&nbsp;</td>
            <td  style="width:34; height:24px; background-image:url(images/right_bottom_corner.gif); background-repeat:no-repeat;">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table>
 
    

	<p>&nbsp;</p>
	<p align="center" class="style2">Live Auction Winning Details</p>
	
	  <table align="center" width="99%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center">
        <table width="99%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td style="width:34; height:24px; background-image:url(images/left_top_corner.gif); background-repeat:no-repeat;">&nbsp;</td>
            <td style="width:860px; height:24px; background-image:url(images/top_mid.gif); background-repeat:repeat-x;">&nbsp;</td>
            <td  style="width:34; height:24px; background-image:url(images/right_top_corner.gif); background-repeat:no-repeat;">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center" valign="top">
        <table width="99%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">

          <tr bgcolor="#B6B6B7" >
            <!-- <td align='center' onmouseover="#1E8C8D"><span class="style10 style2">No</span></td>-->
            <td width="202" align='center'>Lot No</td>
            <td width="91" align='center' >Make</td>
            <!-- <td><div align="center" class="style2">Id</div></td>-->
            <td width="172" align='center' >Model</td>
             <td width="172" align='center' >Seller</td>
            <td width="249" align='center' >Date</td>
            <td width="404" align='center' >Highest Bid Amount</td>
                <?php /*?><td width="132" ><span class="style4">Are You The Highest Bidder</span></td><?php */?>
    </tr>
				<?		
	$querybid="select distinct lot_no from auction_bidval where user_id='".$user."' ";
	//echo "query ".$querybid;
						   $resbid=mysql_query($querybid);
						   while($resbid1=mysql_fetch_array($resbid))
						   {
						    $no=$resbid1['lot_no'];
							//echo "no".$no;
						  // $bid_amt=$res1['bid_amt'];
						  $qdet="select * from tbl_automobile_details where stockno='".$no."' ";
							//echo "query is::".$qdet;
							$detail=mysql_query($qdet);
							while($detail2=mysql_fetch_array($detail))
						  {
						  $auto_make11=$detail2['auto_make'];
						  $auto_model1=$detail2['auto_model'];
						  $stockno=$detail2['stockno'];
							//echo "stockno".$stockno;
$querybid1="select * from auction_bidval where lot_no='".$no."' and  user_id='".$user."' order by bid_amt DESC LIMIT 0,1 ";
						//echo "query is::".$querybid1;
						 $resd2=mysql_query($querybid1);
						while($red3=mysql_fetch_array($resd2))
						   {
						   //$user_id=$res1['user_id'];
						  $date_time1=$red3['date_time']; 
						  $amt1=$red3['bid_amt'];
						//echo "bid_amt".$amt1;
			$quehig="select bid_amt , userId from auction_bidval,tbl_automobile_details  where stockno =  lot_no and lot_no='".$no."' order by bid_amt DESC LIMIT 0,1 ";
						//echo "query is::".$quehig;
						 $re23=mysql_query($quehig);
						 while($re234=mysql_fetch_array($re23))
						  {	
					    	$amtbidhi=$re234['bid_amt'];
						  // echo "amtbidhi is::".$amtbidhi;
						  $userId1=$re234['userId'];
							if($amt1>=$amtbidhi)	
							{					   
						   ?><tr bgcolor="#666666">

            <!--<td align='center'></td>-->
            <td align='center'><span class="style2"><? echo $stockno; ?></span></td>
            <!--<td align='center'></td>-->
            <td align='center'><span class="style2"><? echo $auto_make11; ?></span></td>
            <td align='center'><span class="style2"><? echo $auto_model1; ?></span></td>
            <td align='center'><span class="style2"><? echo $userId1; ?></span></td>
            <td align='center'><span class="style2"><? echo $date_time1; ?></span></td>
            <!-- <td align='center'></td>-->
            <td align='center'><span class="style2"><? echo $amt1; ?></span></td>
            
           
            </tr>
 <?
  }
  }
  } 
  }
  }
  ?>          
        </table></td>
      </tr>
      <tr>
        <td align="center"><table width="99%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td style="width:34; height:24px; background-image:url(images/left_bottom_corner.gif); background-repeat:no-repeat;">&nbsp;</td>
            <td style="width:860px; height:24px; background-image:url(images/bottom_mid_bg.gif); background-repeat:repeat-x;">&nbsp;</td>
            <td  style="width:34; height:24px; background-image:url(images/right_bottom_corner.gif); background-repeat:no-repeat;">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table>
	</td>
  </tr>
	
	<tr>
    <td height="50" colspan="8" class="caption">&nbsp;</td>
	</tr>
	
   <tr>
    <td colspan="8" height="19">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="8" height="39">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="8"><img src="images/footer.gif" /></td>
  </tr>
</table>

</body>
</html>
