<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>The Online Auction</title>
<style type="text/css">
#apDiv1 {
	position:absolute;
	left:241px;
	top:415px;
	width:291px;
	height:114px;
	z-index:1;
}
</style>
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
					<h2>Bid schedule</h2>
				
				<p>
				  <?php

	require 'connection.inc.php';
	$sql1 = "SELECT * from product where date_and_time >= now()";
					
					if($query_run = mysql_query($sql1)){
					
					$count = mysql_num_rows($query_run);
					if($count >=1 ){	
					$i = 1;
					while( $query_row = mysql_fetch_assoc($query_run) ){
						
						
						$pname = $query_row['p_name'];
						$pprice = $query_row['p_price'];
						$pid = $query_row['p_id'];
						$date_and_time = $query_row['date_and_time'];
						
					echo "<p>".$i.".<a href='desc.php?desc=$pid'>".$pname."</a> Cost: Rs.".$pprice." Scheduled on:".$date_and_time."</p>";
					echo "<img src='images/$pid.jpg'><br>";
					$i++;	
					}}
					else echo 'hello';
					}
?>
				</p>
</div></div></div></div><br /> <br /><br /><br /><br /><br /> <br /><br /><br /><br /><br /><br /><br />
    
 <div id="apDiv1"></div>   
    
    
<?php include 'footer.php';?>
       
</body>
</html>
