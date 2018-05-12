<html xmlns="http://www.w3.org/1999/xhtml">
<title>The Auction</title>
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>The Auction WebsiteD</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
#apDiv1 {
	position:absolute;
	left:721px;
	top:2px;
	width:394px;
	height:23px;
	z-index:1;
	color:#FFCC00;
}
</style>
</head>
<body background="images/pay3.jpg">
<div id="apDiv1"><div id="body">

<?php
if(empty($_SESSION))//if the session not yet started
 session_start();
if(!isset($_SESSION['myusername']))
{ //if not yet logged in
 header("LOCATION:../index.php");//send to login page
}

if(isset($_SESSION['myusername']))
{
echo "welcome ".$_SESSION['myusername']."     ";
echo "<a href='payment_logout.php'>logout</a><br>";

}
?>
</div></div>
<strong><div id="wrapper">
<p>	</p>
	<div id="header">
		<div id="logo">
			<h1><a href="index.php">Pay...K</a> </h1>
	  </div>
		<div id="slogan">
			<h2>Powered by Node.js</h2>
		</div>
</div>
