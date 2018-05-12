<?php

require 'connection.inc.php';

session_start();
$dbConnection = mysqli_connect('localhost', 'root', '', 'auction');

$name = 'appleipod';
$id = $_GET['order_code'];

	//get reqd product info from product table
	$prod1 = "SELECT * from product where p_id = '".$id."'";
	$result1 = mysqli_query($dbConnection,$prod1);
	if (mysqli_num_rows($result1) > 0) {
		while ($row = mysqli_fetch_assoc($result1)) {
			
			$pid = $row['p_id'];
			$pname = $row['p_name'];
			
			$pdate = $row['date_and_time'];
			$edate = $row['ended'];
						
		}
		
	}
	if(!isset($_SESSION['myusername']))
	{
		echo"
		<script>alert('Please log in to subscribe');</script>
		";
		
	}
	else{
	//get hex of email id
	$profile = $_SESSION['myusername'];
	$sql3 = "select hex('$profile') as alias";
	$result1 = mysqli_query($dbConnection,$sql3);
	if (mysqli_num_rows($result1) > 0) {
		while ($row = mysqli_fetch_assoc($result1)) {
			
			$pemail = $row['alias'];
						
		}
		
	}
	
		
	//check whether entry exists
	$result =  mysql_query("select * from subscription where email='$pemail' and p_id ='$pid'");
	$count=mysql_num_rows($result);
		if($count==1){
			echo "<script>alert('You have already subscribed for this product');</script>";
			//header("Location: products.php");
		}				
		else {
				//make user subscribe to that product	
				$sql = "insert into subscription values ('".$pid."','".$pname."','".$pemail."','".$pdate."','".$edate."','yes')";
	
				if (!mysql_query($sql,$con))
				{
						die('Error: ' . mysql_error());
				}
				else echo "<script type='text/javascript'>alert('You have successfully subscribed for this product');</script>";
			}
		}	
		mysql_close($con);
		
		
	?>