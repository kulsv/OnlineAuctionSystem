<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>The Online Auction</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
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

<body><div id="splash">
	<img class="pic" src="images/online-auction-masthead-short.jpg" width="870" height="230" alt="" />	
	</div>
    	<div id="splash">
    		<div id="page">
				<div id="content">
					<div class="box">
					<h2>Welcome to Online Auction</h2>
				<p>
					This is <strong>Online Auction Website</strong>, designed to implement the online auction for products
				</p>
			</div></div></div></div>
    
    
    
    
<?php include 'footer.php';?>
       
</body>
</html>
