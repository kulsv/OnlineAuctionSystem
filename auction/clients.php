<?php 
session_start();
if(!isset($_SESSION['myusername'])){
		include 'header.php';
	}else{
		include 'header_session.php';
	}

?>

<html>
<title>The Online Auction</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<div id="splash">
    		<div id="page">
				<div id="content">
					<div class="box">
                    <img  style="position:absolute; left:5px; width:300px; height:300px" src="images/ocean.jpeg"/>
                    <img style="position:absolute; left:295px;;width=250px; height:300px" src="images/alpha_shipping.jpeg" />
                    
                    </div></div></div></div>
                    
                    <br /> <br /> <br /> <br /> 
                    
                    </body></html>
                    <?php 
					include 'footer.php';
					?>