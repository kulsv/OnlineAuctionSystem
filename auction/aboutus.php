<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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

<body>
<div id="splash">
    		<div id="page">
				<div id="content">
					<div class="box">
					<h2>Developer Of The Online Auction</h2>
				<p>
					<h1 style="width:inherit">Kartik 
&nbsp;&nbsp;&nbsp;&nbsp; Shweta  &nbsp;&nbsp;&nbsp;Swapnil </h1>
				</p>
			</div></div></div></div>
    


</body>
</html>
