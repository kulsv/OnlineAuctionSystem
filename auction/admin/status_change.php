<?php
session_start();

				if(isset($_POST['submit']))
				{
					require 'connection.inc.php';
					
					//$id=$_REQUEST['user_id'];
					
						 
					//echo $uid;
						 
					$sql = "UPDATE sign_in SET status='".$_POST['txtstatus']."' WHERE user_id='".$_SESSION['id']."'";

	
					if (!mysql_query($sql,$con))
					{
						die('Error: ' . mysql_error());
					}
					echo "status updated!";
					
	
					mysql_close($con);
				}
			?>
