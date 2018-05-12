<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<title>The Auction</title>
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>The Auction WebsiteD</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript">
function ValidateForm()
{
	var email = document.getElementById('email').value;
	if(email == "" || email == null){alert("Email can not be blank");}
	var pass = document.getElementById('password').value;
	if(pass == "" || pass == null){alert("Email can not be blank");}
}

</script>

<style type="text/css">
#apDiv1 {
	position:absolute;
	left:721px;
	top:2px;
	width:480px;
	height:23px;
	z-index:1;
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
  <form method="post" action="select_from_db.php" onsubmit="return ValidateForm()">
  Email: <input type="text" name="email" size="15" id="email" style="color:#229f9f;" />
  Password: <input type="password" name="password" id="password" size="15"  />
  <input type="submit" name="submit" value="submit" class="le"/>
  </form></div>
</div>
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
			<li><a href="register.php">Register</a>			</li>
			<li class="last"><a href="aboutus.php">AboutUs</a></li>
		</ul>
		<br class="clearfix" />
</div>
	
	


</body>
</html>