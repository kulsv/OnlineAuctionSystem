<?php 
session_start();
if(!isset($_SESSION['myusername'])){
		include 'header.php';
	}else{
		include 'header_session.php';
	}

?>

<body>
<div id="splash">
    		<div id="page">
				<div id="content">
					<div class="box">
                    <p>
                    <a href="products.php?cat=mobile">Mobile</a>
                    </p>
                    
                    <p>
                    <a href="products.php?cat=product">Mobile</a>
                    </p>
                    
                    </div></div></div></div>
                    