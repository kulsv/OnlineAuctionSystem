<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Big Business
Description: A two-column, fixed-width design with a bright color scheme.
Version    : 1.0
Released   : 20120210
-->
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
<strong><div id="wrapper">
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
			<li><a href="yoyo.php">Live Auction</a></li>
			<li><a href="clients.php">Clients</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li class="last"><a href="aboutus.php">About Us</a></li>
		</ul>
		<br class="clearfix" />
	</div>
	
	


</body>
</html>