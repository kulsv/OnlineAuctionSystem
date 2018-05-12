<?php
session_start();

				if(isset($_POST['submit']))
				{
					require 'connection.inc.php';
					$date= $_POST['biddate'];
					$time= $_POST['bidtime'];
					$id=$_SESSION['id1'];
				
					
					
					
					$temp = $date." ".$time.":00";
					$sql = mysql_query("UPDATE product SET date_and_time =  '$temp' where p_id='$id'");
					
					if(!$sql)
					{
						echo 'Wrong';
					}	
					else
						echo "status updated!";
					
				     
					$temp2= date('Y-m-d H:i',strtotime('+0 hour +15 minutes',strtotime($temp)));
					$end_time = $temp2.":00";
					// $end_time;
				
					$sql2 = mysql_query("UPDATE product SET ended = '$end_time' where p_id='$id'");
					
					if(!$sql2)
					{
						echo 'Wrong';
					}	
				
					else
					//echo "status updated!";
					
					
	
					mysql_close($con);
				}
			?>
