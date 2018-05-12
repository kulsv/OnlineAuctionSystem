<html>
<head>
<?php 
if(empty($_SESSION))//if the session not yet started
 session_start();
if(!isset($_SESSION['myusername'])){
		header("LOCATION:../session_expired.php");
	}
	
?>
<style>
form.formclass{}
p1.masterlogo{}
p1.visalogo{}
p1.americalogo{}
p1.discover{}
h1{
	text-align:center;
	font-family:"MS Serif", "New York", serif;
	font-size:18px;}
span{
	
	font-family:"Times New Roman", Times, serif;
	font-size:20px;
	font-style:normal;
	animation-name:!important;}

#apDiv1 {
	position:absolute;
	border:#CCCC99;
	left:342px;
	top:30px;
	width:628px;
	height:598px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:76px;
	top:17px;
	width:392px;
	height:55px;
	z-index:2;
}
#apDiv3 {
	position:absolute;
	left:22px;
	top:88px;
	width:346px;
	height:27px;
	z-index:3;
}
#apDiv4 {
	position:absolute;
	left:22px;
	top:126px;
	width:347px;
	height:30px;
	z-index:4;
}
#apDiv5 {
	position:absolute;
	left:24px;
	top:164px;
	width:346px;
	height:30px;
	z-index:5;
}
#apDiv6 {
	position:absolute;
	left:24px;
	top:207px;
	width:589px;
	height:187px;
	z-index:6;
}
#apDiv7 {
	position:absolute;
	left:45px;
	top:340px;
	width:48px;
	height:43px;
	z-index:7;
}
#apDiv8 {
	position:absolute;
	left:138px;
	top:341px;
	width:45px;
	height:32px;
	z-index:8;
}
#apDiv9 {
	position:absolute;
	left:289px;
	top:345px;
	width:43px;
	height:32px;
	z-index:9;
}
#apDiv10 {
	position:absolute;
	left:478px;
	top:344px;
	width:47px;
	height:35px;
	z-index:10;
}
#apDiv11 {
	position:absolute;
	left:27px;
	top:409px;
	width:352px;
	height:24px;
	z-index:11;
}
#apDiv12 {
	position:absolute;
	left:28px;
	top:442px;
	width:353px;
	height:27px;
	z-index:12;
}
#apDiv13 {
	position:absolute;
	left:121px;
	top:507px;
	width:155px;
	height:48px;
	z-index:13;
}
#apDiv14 {
	position:absolute;
	left:662px;
	top:171px;
	width:179px;
	height:111px;
	z-index:14;
}
#apDiv15 {
	position:absolute;
	left:668px;
	top:180px;
	width:164px;
	height:44px;
	z-index:15;
}
#apDiv16 {
	position:absolute;
	left:711px;
	top:232px;
	width:76px;
	height:44px;
	z-index:16;
}
#apDiv17 {
	position:absolute;
	left:453px;
	top:540px;
	width:112px;
	height:19px;
	z-index:2;
}
</style>
<script>


window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}
//card number cardnumber
//carddate

function validateForm()
{
var cardnumber = document.getElementById('cardnumber').value;
 var cardnumber_length = cardnumber.length();
if (cardnumber==null || cardnumber=="")
  {
  alert("Card Number must be filled out");
  return false;
  }
  if(cardnumber_length != 16)
  {
	  alert("Not a valid card number");
   	  return false;
  }
  
  var date = doucuments.getElementById('carddate').value;
  if(date == null){
	  alert("Please provide us the validity");
	  } 
  
  if ( ( documents.card_details.visa.checked == false ) && (documents.card_details.master_card.checked == false ) && (documents.card_details.american_express.checked == false ) && (documents.card_details.discover.checked == false ) ) 
{
alert ( "Please choose your card type" ); 
return false;
}
	 





}



</script> 
</head>
<body>
<?php
require 'connection.inc.php';
if(empty($_SESSION))//if the session not yet started
 session_start();
$emailencrypt = base64_encode($_SESSION['myusername']);
$sql = "select * from sign_in where email='$emailencrypt'";
if($query_run = mysql_query($sql)){
	while( $query_row = mysql_fetch_assoc($query_run) ){
						$name = $query_row['uname'];
						$email = $query_row['email'];
						$address = $query_row['address'];
						$contact = $query_row['contact'];
						$country = $query_row['country'];
}	
}
$emaildecrypt = base64_decode($email);

	$cookie_name = 'product_id';
if(@$_COOKIE[$cookie_name] != ''){
	$id = $_COOKIE[$cookie_name];
require 'connection.inc.php';;
$query = mysql_query("SELECT * FROM product where p_id = '$id'");
 $count = mysql_num_rows($query);
 if($count==1){
 while($query_row = mysql_fetch_assoc($query)){
	 $product_name = $query_row['p_name'];
	 $product_price = $query_row['final_price'];
	 
	  
 }}
 else{
	echo '<script>alert("Payment session expires");</script>';
	}

?>

<div id="apDiv1">
<div id="apDiv2">Secured Payment Gateway</div>
<div id="apDiv3"><span>NAME &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $name; ?></div>
<div id="apDiv4">EMAIL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $emaildecrypt; ?></div>
<div id="apDiv5">CONTACT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $contact; ?></div>
<div id="apDiv6">


<form name="card_details" action="form_delete.php" method="post" id="form_card_details" onSubmit="return validateForm()">
<span>
CARD NUMBER:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<span>VALIDITY:</span><br/><br/> 
</span>
<input type="text" name="cardnumber" id="cardnumber" maxlength="25" size="35px">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
<input type="date" name="carddate" id="carddate" >
<h1><br/>
CARD TYPE:</h1>
<input type="radio" name="visa" id="visa" value="visa">
<label for="visa"> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;visa</label>
<input type="radio" name="master_card" id="master_card" value="master_card">
<label for="master_card"> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MasterCard</label>
<input type="radio" name="american_express" id="american_express" value="american_express">
<label for="american_express"> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;American Express</label>
<input type="radio" name="discover" id="discover" value="discover">
<label for="discover"> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Discover</label>
<br/>
<br/>



</div>
<div id="apDiv7"><img src="images/visa.png" height="43px" width="48px"></div>
<div id="apDiv8"><img src="images/master.png" height="43px" width="48px"></div>
<div id="apDiv9"><img src="images/american.png" height="43px" width="48px"></div>
<div id="apDiv10"><img src="images/discover.png" height="43px" width="48px"></div>
<div id="apDiv11"><span>CURRENCY &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  $ dollar </span></div>
<div id="apDiv12"><span>AMOUNT: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="amount" id="amount" value=" <?php
require 'connection.inc.php';;
$query = mysql_query("SELECT * FROM product where p_id = '$id'");
 $count = mysql_num_rows($query);
 if($count==1){
 while($query_row = mysql_fetch_assoc($query)){
	 //$product_name = $query_row['p_name'];
	 echo $product_price = $query_row['final_price'];
	 
	  
 }}

?>" readonly> </span></div>
<div id="apDiv13"><input type="submit" name="submit_card_details" id="submit" value="Proceed" ></div>
</form>
</div>
</body>
</html>
<?php 

include("1.php");
if(!(isset($_POST['submit_card_details']))){
			echo'
			<script>
			alert("Please Enter your credentials");
			</script>
			';
			
			
	}
	else{
		$cardnumber = $_POST['cardnumber'];
		$validity = $_POST['carddate'];
		$amount = $_POST['amount'];
		
		echo $cardnumber;
		echo $validity;
		if( (isset($_POST['visa']) || isset($_POST['american_express']) || isset($_POST['master_card']) || isset($_POST['discover']) && (!empty($cardnumber) && !empty($validity))))
		{		
			if(isset($_POST['visa'])){$cardtype = "visa"; echo $cardtype;}
			if(isset($_POST['american_express'])){$cardtype = "american_express"; echo $cardtype;} 
			if(isset($_POST['master_card'])){$cardtype = "master_card";echo $cardtype;}
			if(isset($_POST['discover'])){$cardtype = "discover";echo $cardtype;}
		
		
			$flag = verify_card($cardnumber , $validity ,$cardtype);
		
			if($flag == false){
				echo'<script>
				alert("Wrong Card details... cannot proceed");
			</script>';
			}
	
			else
			{
				$cookie_name = 'card_number';
				$cookie_value = $cardnumber;
				setcookie($cookie_name , $cookie_value , time() + (240));
				header("LOCATION:transaction.php");
				
			
			}
	}
	else{
		echo'<script>
				alert("Please Enter all the details");
			</script>';
	}
	}}
?>
