<?php
/*$email = 'shweta@gmail.com';
$product = 'Auction Product';
$amount = 20.50;

$data=array(
'merchant_email'=>$email,
'product_name'=>$product,
'amount'=>$amount,
'currency_code'=>'USD',
'thanks_page'=>"http://".$_SERVER['HTTP_HOST'].'paypal/thank.php',
'notify_url'=>"http://".$_SERVER['HTTP_HOST'].'paypal/ipn.php',
'cancel_url'=>"http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'],
'paypal_mode'=>true,
);
*/?>
<?php


	function verify_card($cardnumber , $validity ,$cardtype){
		require 'connection.inc.php';
		$cardnumber_empty = $validity_empty = $currency_empty = $cardtype_empty = '';
		
		$bank_query = mysql_query("SELECT * from bank where card_number = '$cardnumber' AND card_validity = '$validity' AND card_type = '$cardtype'");
		
		$count = mysql_num_rows($bank_query);
		if($count == 1){
			while($query_row = mysql_fetch_assoc($bank_query))	
			{
			$bank_acc_no = $query_row['acc_no'];
			$bank_acc_name = $query_row['acc_name'];
			$bank_card_number = $query_row['card_number'];
			$bank_acc_balance = $query_row['acc_balance'];
			$bank_card_type = $query_row['card_type'];
			$bank_pincode = $query_row['pincode'];
			$bank_password = $query_row['password'];								            
			$bank_card_validity = $query_row['card_validity'];
			//$bank_currency = $query_row['currency'];
						
			}
			/*echo $bank_card_number; echo $cardnumber_empty;
					echo $bank_card_validity;echo $validity_empty; 
					echo $bank_card_type; echo $cardtype_empty;*/
			if( $bank_card_number == $cardnumber && $bank_card_validity == $validity && $bank_card_type == $cardtype){
					$cardnumber_empty = $cardnumber;
					$validity_empty = $validity;
					//$currency_empty = $currency;
					$cardtype_empty = $cardtype;	
			
			return true;} 			
			}
			else{
				return false;}
				
				//return($cardnumber_empty , $validity_empty , $currency_empty$, $cardtype_empty)
		}//validity
			
	function transaction($cardnumber , $amount , $pincode , $password){	
		$bank_query_2 = mysql_query("SELECT * from bank where card_number = '$cardnumber' AND pincode = '$pincode' AND password = '$password' ");
		//	echo 'Query executed?';
 			//cookie will give the product name and product amount
		$count = mysql_num_rows($bank_query_2);
		if($count == 1){
			while( $query_row2 = mysql_fetch_assoc($bank_query_2) ){
				$bank_acc_no = $query_row2['acc_no'];
				$bank_acc_name = $query_row2['acc_name'];
				$bank_card_number = $query_row2['card_number'];
				$bank_acc_balance = $query_row2['acc_balance'];
				$bank_card_type = $query_row2['card_type'];
				$bank_pincode = $query_row2['pincode'];
				$bank_password = $query_row2['password'];								       	     	            
				$bank_card_validity = $query_row2['card_validity'];									       	    	
				$bank_currency = $query_row2['currency'];
			
				}
			
				//echo $bank_pincode; echo $bank_password;
				if( $bank_card_number == $cardnumber && $bank_pincode == $pincode && $bank_password == $password){
						$cardnumber_empty = $cardnumber;
						$pincode_empty = $pincode;
						//$currency_empty = $currency;
						$password_empty = $password;
						 
					$bank_new_balance = $bank_acc_balance - ($amount+ 10);//service 	charge		 				
					$bank_query_insert = $dbConnection = mysqli_connect('localhost', 'root', '', 'auction');
					$query2 = mysqli_query($dbConnection,"update bank set acc_balance = '$bank_new_balance' where acc_no = '$bank_acc_no'");
					$err = false;//if error is not occured then set the values of pincode and send to transaction_final.php so that err will provide the information which is the details of card is correct and transaction is done
						
					return array ($pincode_empty,$password_empty,$err);
					//echo $bank_new_balance;		
			
					}
					else{//echo "In else1";
						//wrong details true for error
					$err = true;$pincode_empty='wrong pincode';$password_empty='wrong password';
					return array ($pincode_empty,$password_empty,$err);
				
				
					}
						
				}//END OF IF COUNT
				else
				{
					$err = true;$pincode_empty='wrong pincode';$password_empty='wrong password';
					return array ($pincode_empty,$password_empty,$err);
					}
	}//END OF THE METHOD


			function receipt(){
				
				
				
				
				}

?>
