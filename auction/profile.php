
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>View my profile</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
#apDiv1 {
	position:absolute;
	left:800px;
	top:13px;
	width:379px;
	height:12px;
	z-index:1
}
.le{
	cursor: pointer;
    margin-top: 15px;
	width:15%;
	height: 30px;
    padding: 0;
    background: #3CB9B9;
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
#apDiv2 {
	position:absolute;
	left:-1px;
	top:85px;
	width:897px;
	height:33px;
	z-index:2;
}
#apDiv3 {
	position:absolute;
	left:122px;
	top:462px;
	width:393px;
	height:120px;
	z-index:2;
}
#apDiv10 {
	position:absolute;
	left:92px;
	top:464px;
	width:802px;
	height:116px;
	z-index:2;
}
</style>
</head>
<body>
<div id="apDiv1"><div id="body">

<?php
if(empty($_SESSION))//if the session not yet started
 session_start();
if(!isset($_SESSION['myusername']))
{ //if not yet logged in
 header("LOCATION:index.php");//send to login page
}

if(isset($_SESSION['myusername']))
{
echo "welcome ".$_SESSION['myusername']."     ";
echo "<a href='logout.php'>logout</a><br>";

}
?>
</div></div>

<strong>
<div id="wrapper">
<p>	</p>
	<div id="header">
		<div id="logo">
			<h1><a href="index.php">The Auction</a> </h1>
	  </div>
		<div id="slogan">
			<h2>Powered by Node.js</h2>
		</div>
</div>
	<div id="menu">
		<ul>
			<li class="first current_page_item"><a href="index.php">Homepage</a></li>
			<li><a href="products.php">Products</a></li>
			<li><a href="dashboard.php">Dashboard</a></li>
			<li onclick="popup1()"><a href="yoyo.php">Live Auction</a></li>
			<li><a href="payment/index.php">Pay...K</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li class="last"><a href="aboutus.php">About Us</a></li>
		</ul>
		<br class="clearfix" />
	</div>
	<div id="splash">
    		<div id="page">
				<div id="content">
				  <div class="box">
                    
					<h2>Welcome to Online Auction</h2></br>
                    <div id="apDiv2">
                    <h>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="edit_profile.php">Edit Details</a></h>
                   <!-- <h>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="edit_profile.php">Forget Password</a></h>
<h>                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="edit_profile.php">Payment Gateway</a></h>
<h>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onClick="popup1()">Products available for bidding</a></h>-->
<h>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onClick="popup1()">Products available for bidding</a></h>
   </div>
<script>
	
	function popup1(){
		child = window.open("yoyo.php", "littleWindow", "location=no,width=700,height=650");
		
		var timer = setInterval(checkChild, 500);

			function checkChild() {
				if (child.closed) {
					
					clearInterval(timer);
				}
			}
	}	
	
</script>
   
                    <?php 
					//session_start();
					$profile = $_SESSION['myusername'];
					//if(isset($profile)){echo "$profile";}
					require 'connection.inc.php';
					//echo base64_encode($profile); 
					$sql = "SELECT * from sign_in where email='base64_encode($profile)' ";
					
					if($query_run = mysql_query($sql)){
					//echo "Sab chal raha he";	
					$count = mysql_num_rows($query_run); //echo $count;
					if($count == 1){ 
					while( $query_row = mysql_fetch_assoc($query_run) ){
						//$name3 = $query_row['uname'];
						$email3 = $query_row['email'];
						$address3 = $query_row['address'];
						$contact3 = $query_row['contact'];
						$country3 = $query_row['country'];
						echo $query_row['uname'];
						
						}
						echo "<br/> Name : - ".$name3 ;
						echo "<br/> email_id : - ".base64_decode($email3) ;
						echo "<br/> Address : - ".$address3 ;
						echo "<br/> Contact : - ".$contact3 ;
						echo "<br/> Country : - ".$country3 ;
						echo "<br/><br/><br/>";
					}
					else{
						echo  mysql_error();
						}
					}
				?><br />
                <h3>Bidding History</h3>
				  </div></div></div></div>
	<br/><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

<div id="apDiv10">
<?php 
$sql12 = "SELECT count(product) as number from chat where name= hex('$profile')";

if($query_run = mysql_query($sql12)){
					
					$count = mysql_num_rows($query_run); 
					if($count == 1){ 
					while( $query_row = mysql_fetch_assoc($query_run) ){
						if($query_row['number'] == 0)
						echo 'you have no bid history';
						else
							{
								echo '&nbsp;&nbsp;&nbsp;View history'."<br>";
								include 'user_history.php';
							}
						
						
						}}}
						if($query_row['type'] = 'seller'){
							echo "
							<a href='add_product.php'>Add your products here	</a>
							
							";
							}
?>
</div>

</body>
<footer>
<?php include 'footer.php';
?></footer>
</html>