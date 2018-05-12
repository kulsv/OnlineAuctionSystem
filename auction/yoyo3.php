 <?php

$dbConnection = mysqli_connect('localhost', 'root', '', 'auction');


$query  = "SELECT * from chat where message in (select max(message) from chat)";
$result = mysqli_query($dbConnection,$query);

if (mysqli_num_rows($result) > 0) {

    

    while ($row = mysqli_fetch_assoc($result)) {

			$name1 =$row['name'];
			$message1 = $row['message'];
			echo "<td>{$name1}</td><t><td>{$message1}</td>";
			
			//get the name
			$query1  = "select unhex('$name1') as winner";
			$result1 = mysqli_query($dbConnection,$query1);
			
				 if (mysqli_num_rows($result1) > 0)
				 {
					while ($row1 = mysqli_fetch_assoc($result1)) 
					{
						$name2 = $row1['winner'];
						echo "<br>".$name2;
							$query12 = "select email from sign_in where uname = '$name2'";
							$result12 = mysqli_query($dbConnection,$query12);
							 if (mysqli_num_rows($result12) > 0)
							{
								while ($row12 = mysqli_fetch_assoc($result12)) 
								{
									$email12= $row12['email'];
									//update the winner details
									$query2  = "update product set final_price = $message1 , bid_winner = '$email12' where p_name='appleipod';";
									$result2 = mysqli_query($dbConnection,$query2);
									if (!$result2)
									{
										die('Error: ' . mysql_error());
									}
									echo "1 record updated";
								}
							}	
						
					}
				}	
        
        

    }

   

} else {

    echo "Query didn't return any result";

}

?>