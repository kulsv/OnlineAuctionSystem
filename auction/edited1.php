 <?php
			
require 'edit_profile.php';

				function encrypt($txt)
					{
						$salt="alphaCen";
						return trim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $salt, $txt, MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND))));
					}

			//require 'connection.inc.php';
				if(isset($_POST['submit'])){
					
				
					if($_POST['name'] == '' || $_POST['name'] == ' ') $name2 = $name;
					else $name2 = $_POST['name'];
					
					if($_POST['email'] == '' || $_POST['email'] == ' ') $email2 = $email1;
					else $email2 = base64_encode($_POST['email']);
					
					if($_POST['address'] == '' || $_POST['address'] == ' ') $address2 = $address;
					else $address2 = $_POST['address'];
					
					if($_POST['country'] == '' || $_POST['country'] == ' ') $country2 = $country;
					else $country2 = $_POST['country'];
					
					if($_POST['zip'] == '' || $_POST['zip'] == ' ') $zip2 = $zip;
					else $zip2 = $_POST['zip'];
					
					if($_POST['contact'] == '' || $_POST['contact'] == ' ') $contact2 = $contact;
					else $contact2 = $_POST['contact'];
					
					$pass = $_POST['password'];
					$password2 = encrypt($pass);
					//echo $email2; echo $address2;	
					
					
					
					$dbConnection = mysqli_connect('localhost', 'root', '', 'auction');
					$query2 = mysqli_query($dbConnection,"update sign_in set uname = '$name2' , email = '$email2' , address = '$address2', country = '$country2' , zip = '$zip2' , contact = '$contact2' , password = HEX('$password2') where uname = '$name'");
					
					
					if($query2)
					{
							echo 'updated';
					}else{
							echo mysql_error();
							echo 'here';}
					
					
					}
					
					header("Location: edit_profile.php");
					?>