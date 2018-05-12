<?php
if(empty($_SESSION))//if the session not yet started
 session_start();
if(!isset($_SESSION['myusername'])){
		include 'header.php';
	}
	else{
		include'header_session.php';
	}
?>
					
					<?php
					require 'connection.inc.php';
					//include 'register.php';
					
					$profile = $_SESSION['myusername'];
					
					$name = '';$email1 = '';$email = '';
					$address = '';$contact = ''; $zip = '';
					$country = ''; $password = '';
					
					$profile1 = base64_encode($profile);
					$sql = "SELECT * from sign_in where email='$profile1'";
					
					if($query_run = mysql_query($sql)){
						
					while( $query_row = mysql_fetch_assoc($query_run) ){
						$name = $query_row['uname'];
						$email1 = $query_row['email'];
						$email = base64_decode($email1);
						$address = $query_row['address'];
						$contact = $query_row['contact'];
						$zip = $query_row['zip'];
						$country = $query_row['country'];
						$password = $query_row['password'];
						//$password = base64_decode($password1);
						//echo $name.$email1.$address.$contact;
					
						
					?>
					<html>
					<style type="text/css">
					#apDiv12 {
	position:absolute;
	left:48px;
	top:122px;
	width:1029px;
	height:105px;
	z-index:1;
}
                    #apDiv34 {
	position:absolute;
	left:12px;
	top:176px;
	width:59px;
	height:36px;
	z-index:2;
}
                    </style>
					<body>
<div id="splash">
    		<div id="page">
				<div id="content">
					<div class="box">
					<h2 >Update Your Profile</h2></br>
                    	
									
							
			<?php }} ?>
                    </p>
					<div id="apDiv12">
            		
			<form method="post" action="edited1.php" method="post">
					
					
					
					Name:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" style = "color:black" value="<?php echo $name; ?>" size = "90"</input><br/>
				  
				  	Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" style = "color:black" value="<?php echo $email; ?>" size = "90"></input><br/>
					
					Address:&nbsp;&nbsp;&nbsp; <input type="text" name="address" style = "color:black" value="<?php echo $address ?>" size = "90"></input><br/>
					
					Country:&nbsp;&nbsp;&nbsp; <input type="text" name="country" style = "color:black" value="<?php echo $country ?>" size = "90"></input><br/>
					
					Zip:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="zip" style = "color:black" value="<?php echo $zip ?>" size = "90"></input><br/>
					
					Contact:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="contact" style = "color:black" value="<?php echo $contact ?>" size = "90"></input><br/>		
						
					Password: <input type="text" name="password" style = "color:black" value="" size = "90"></input><br/>
					<br/><input type="submit" name="submit" style = "color:black" value="submit" ></input>
					<br/></form>
                    </div>
                    
               
		</div></div></div></div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>


