
<?php
require 'connection.inc.php';


$profile = $_SESSION['myusername'];
$profile_enc = base64_encode($profile);
if(!isset($_SESSION['myusername']))
{ //if not yet logged in
 header("LOCATION:index.php");//send to login page
}

if(isset($_SESSION['myusername']))
{
echo "Welcome ".$_SESSION['myusername']; echo ", your alias is:"."<br>";


$sql2= "SELECT * from sign_in where email='$profile_enc'";
	if($query_run = mysql_query($sql2)){
	
	while( $query_row = mysql_fetch_assoc($query_run) ){
			$email2 = $query_row['email'];
		}
	}
	else{
		echo  mysql_error();
	}

$sql3 = "select hex('$profile') as alias";
	if($query_run = mysql_query($sql3)){
	while( $query_row = mysql_fetch_assoc($query_run) ){
			$name3 = $query_row['alias'];
		}
	}	
	else{
		echo  mysql_error();
	}
	
	
					
				
}
?>