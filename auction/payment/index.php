<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>The Online Auction</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<?php 
if(empty($_SESSION))//if the session not yet started
 session_start();
if(!isset($_SESSION['myusername'])){
		include 'payment_header.php';
	}
	else{
		include'payment_header_session.php';
	}

?>
<link rel="stylesheet" type="text/css" href="style.css" />
<style>
#apDiv12s {
	position:absolute;
	left:161px;
	top:-11px;
	width:186px;
	height:63px;
	z-index:7;
	color: #229F9F;
	font-size: 30px;
}
#apDiv13s {
	position:absolute;
	left:236px;
	top:332px;
	width:976px;
	height:550px;
	z-index:8;
}
.form-2 {
    /* Size and position */
    width: 340px;
    margin: 60px auto 30px;
	margin-left:70px;
    padding: 15px;
    position:absolute; 
 
    /* Styles */
    background: f75656;
    border-radius: 4px;
    color: #7e7975;
    box-shadow:
        0 2px 2px rgba(0,0,0,0.2),       
        0 1px 5px rgba(0,0,0,0.2),       
        0 0 0 12px rgba(255,255,255,0.4);
}
.logins{


	cursor: pointer;
    width: 40%;
    height: 32px;
    margin-top: 25px;
	margin-left:105px;
    padding: 0;
    background: #209F9F;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: 0;
    -moz-box-shadow: 0 15px 30px 0 rgba(255,255,255,.1) inset;
    -webkit-box-shadow: 0 15px 30px 0 rgba(255,255,255,.1) inset;
    box-shadow: 0 15px 30px 0 rgba(255,255,255,.1) inset;
    font-family: 'PT Sans', Helvetica, Arial, sans-serif;
    font-size: 16px;
    font-weight: 400;
    color: #fff;
    text-shadow: 0 1px 2px rgba(0,0,0,.1);
    -o-transition: all .2s;
    -moz-transition: all .2s;
    -webkit-transition: all .2s;
    -ms-transition: all .2s;
}

#apDiv22s {
	position:absolute;
	left:420px;
	top:312px;
	width:186px;
	height:63px;
	z-index:7;
	color: #32A3DF;
	font-size: 25px;
}


</style>
<script>








</script>

 
</head>

<body>
 <div id="splash">
    		<div id="page">
				<div id="content">
					<div class="box">
                    
                   <h1> Welcome to Secure Payment Gateways</h1>
                    <?php 
					$cookie_name = 'product_id';
if(@$_COOKIE[$cookie_name] != ''){
	$id = $_COOKIE[$cookie_name];
require 'connection.inc.php';echo $id;
$query = mysql_query("SELECT * FROM product where p_id = '$id'");
 $count = mysql_num_rows($query);
 if($count==1){
 while($query_row = mysql_fetch_assoc($query)){
	 $product_name = $query_row['p_name'];
	 $product_price = $query_row['final_price'];
	 
	 echo $product_name; echo"<br />";
	 echo $product_price; 

 }}
 echo '
 <img border="0" src="images/'.$id.'.jpg" style="max-height:200px">
 <h6>'.$product_name.'</h6> 
          <p>By KKInfotech
          Value Price: Rs. '.$product_price.'/- </p>
 <br />
 <a href="form_delete.php?price=$product_price">Click here for secure transaction using debit card</a>
 ';
 
}//cookie wala if
else{
	echo '<script>alert("Payment session expires");</script>';
	}
?>
   
                   
                    </div></div></div></div>
                    <br  /> <br  /><br  /><br  />                
   
                    	





</body>
<?php include 'footer.php';
?>
</html>