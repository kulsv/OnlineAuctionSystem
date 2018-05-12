<?php

		include 'header.php';
	
?>
					
					<?php
					/*require 'connection.inc.php';
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
					
					*/	
					?>
<html>
<style type="text/css">
					#apDiv12 {
	position:absolute;
	left:273px;
	top:47px;
	width:575px;
	height:105px;
	z-index:1;
}
                    #apDiv13 {
	position:absolute;
	left:-87px;
	top:70px;
	width:183px;
	height:89px;
	z-index:2;
}
</style>
					<body>
	
	
	<div id="splash">
    		<div id="page">
				<div id="content">
					<div class="box">
					<h2 >Enter email-id:</h2></br>
                    	
									
			
			
            <div id="apDiv12">
            <form method="post" action="" method="post">
				<input type="text" name="email" style = "color:black" value=""></input><br/>
			  <div id="apDiv13">  
			    <p>
			      <input type="submit" name="submit" style = "color:black" value="Change password" >
			      </input>
		        </p>
			    <?php 
										
					@$email1 = $_POST['email'];
					$dbConnection = mysqli_connect('localhost', 'root', '', 'auction');
					
					$email = base64_encode($email1);
					$query  = "SELECT * from sign_in where email = '$email'";
					$result = mysqli_query($dbConnection,$query);
					
					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							$name1 =$row['uname'];
							echo $name1;
						}
					}
					else echo '';
				?>
			  </div>
				  	</form>
                    </div>
                    
               
		</div></div></div></div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
