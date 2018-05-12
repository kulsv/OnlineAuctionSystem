<?php 
if(empty($_SESSION))//if the session not yet started
 session_start();
if(!isset($_SESSION['myusername'])){
		header("LOCATION:../session_expired.php");
	}
	
?>
<html>
<head>
<script>
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}
function sure(){
	alert("Are you sure you want to submit?");
	return true;
	}
function validTransaction(){
	var pincode = document.getElementById("pincode").value;	
	if(pincode == null || pincode =='' ){
		alert(" Please Enter the pincode");
		return false;
		}
		
	var pass = document.getElementById("password").value;
	if(pass == null || pass ==''){
		alert("Enter the password");
		return false;
		}
		
	var con_pass = document.getElementById("confirm_password").value;
	if(con_pass == null || con_pass =='' ){
		alert("Enter the confirm password");
		return false;
		}	
	if(pass != con_pass)
		{
			alert("password and confirm password do not match");
			return false;
		}
		
	
	
	}
</script>
<style type="text/css">
#apDiv1 {
	position: absolute;
	position: absolute;
	top:144px;
	left: 489px;
	height:227px;
	width:482px;
	z-index:1;
}
p{
	margin:1px;
	margin-top:1px;	
	}
</style>

</head>

<body>

<?php $pincode_err=$password_err=$err=$pincode_empty='';
?>
<?php



if(isset($_POST['submit'])){
	echo'SET HO GAYA';
	require 'connection.inc.php';
	include "1.php";
	$pincode = $_POST['pincode'];
	$pincode_empty = $pincode; //just to fill the value 
	$password = $_POST['password'];
	error_reporting(0);
			if($_COOKIE['card_number']!=''){
					$flag = true;
			}else{
					$flag = false;
					header("LOCATION:../session_expired.php");
			}
	//perform the operations
			$transaction_card_number = $_COOKIE['card_number'];
			$product_amount = 200;//$_COOKIE['product'];
			list ($pincode_err_list,$password_err_list,$err_list) = transaction($transaction_card_number , $product_amount , $pincode , $password);
								if ($err_list == true){
				 						$pincode_err = $pincode_err_list; 
										$password_err = $password_err_list;
								}else{
									
									//payment successfull
									/*$product_cookie = $_COOKIE['product_id'];
									mysql_query("INSERT INTO payment (payment_id , product_id , email_id , seller_id ,payment_amount , currency ,payment_status , payment_date) VALUES (,'$')");
								*/
									//now we would have to insert in the transaction table
									header("LOCATION:receipt_generation.php");
									
									
									}
								
								
								
			}else{
				echo '<script>
		
						alert("Please Enter the values");
						</script>	
				';
		
		
		
		}

?>


<div id="apDiv1">
<form action="transaction_final.php" method="POST" onSubmit="return validTransaction()">
Pincode :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="pincode" name="pincode" value ="<?php echo $pincode_empty;?> "/> <?php echo "<font color = 'red'>".$pincode_err."<font color = 'black'>"; ?><br>

 <br>
Password : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" id="password" name="password"/> <?php echo "<font color = 'red'>".$password_err."<font color = 'black'>"; ?><br>

 <br>
Confirm Password :  &nbsp;&nbsp; <input type="password" id="confirm_password" name="confirm_password"/> <br>
<br>
<?php echo "<font color = 'red'>".$err."<font color = 'black'>"; ?><br>

<input name="submit" type="submit" value ="pay" id="submit"/>
</form>
</div>

</body>
</html>

