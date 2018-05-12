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

<body>
    	<div id="splash">
    		<div id="page">
				<div id="content">
					<div class="box">
    	<?php
/*	//session_start();
					$profile = $_SESSION['myusername'];
					//if(isset($profile)){echo "$profile";}
					require 'connection.inc.php';
					//echo base64_encode($profile); 
					$sql9 = "SELECT * from sign_in where email='base64_encode($profile)' ";
					
					if($query_run9 = mysql_query($sql9)){
					//echo "Sab chal raha he";	
					$count = mysql_num_rows($query_run9);
					 //echo $count;]
					 $emailencrypt = base64_encode($profile);
					 $result= mysql_query("SELECT * from sign_in where email='$emailencrypt' ");
$count=mysql_num_rows($result);
					 echo $count;
					if($count == 1){ 
					while( $query_row9 = mysql_fetch_assoc($result) ){
						//$name3 = $query_row['uname'];
						$email3 = $query_row9['email'];
						$status = $query_row9['status'];
						$type = $query_row9['type'];echo $type;
						
						}
						
						if($type == 'seller')
						{
                       	echo "
						<form action='add_product.php' method='post'>
						<input type='text' name ='@product_name'></input>
						<input type='text' name='@baseprice'></input>  
						</form>
						
						"; 	
						}
						echo 'Hi I\'m here';
					}
*/
?>     

<body>
<form action='add_product.php' method='post'  enctype="multipart/form-data">
						<h5>Product_name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name ='p_name' id="p_name" style="color:#6CF"></input></h5>
						<h5>Product Description &nbsp;<textarea rows ="3" name="Description" style="color:#6CF" placeholder="Describe your product "></textarea></h5>
                        <h5> Base Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="p_price" style="color:#6CF" id/></h5>
                         <h5> Category &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cat" style="color:#6CF" id/></h5>
                        <h5> Image:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="image" /></h5>
                        <input type="submit" name="submit" />
						</form>
	                   
                     

<?php
 //file properties
require 'connection.inc.php';
@$file = $_FILES['image']['tmp_name'];
$profile = $_SESSION['myusername'];
if(isset($_POST['submit'])){ 
	$pname = $_POST['p_name'];
	$price = $_POST['p_price'];
	$cat = $_POST['cat'];
	$Desc = $_POST['Description'];
	 if(!isset($file)){
	 
	 	echo "<script>alert('please select an image');</script>";
	 }
	 else{
		 $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		 $image_name = addslashes($_FILES['image']['name']);
		 $image_size = getimagesize($_FILES['image']['tmp_name']);
		 
		 if($image_size == FALSE){
			 echo 'THats not an image';
			 }
			 else{
				 $query = "INSERT INTO `auction`.`product` (
`p_name`,`p_image`,`p_price`,`seller_id`,`cat`,	`Description`, `final_price`,`bid_winner`,`date_and_time`,`ended`,	`status`)
VALUES ('$pname','$image','$price','','$cat','$Desc','','','','','')";
				 	if(!$insert = mysql_query($query)){
						echo 'problem uploading image';
						}
						else{
								$lastid = mysql_query("SELECT p_id FROM product where ");
								
								
								$query = "INSERT INTO `auction`.`chat` (`name`,`message`,`product`)
						VALUES ('seller','$price','$pname')";
								if(!$insert = mysql_query($query)){ echo 'oops';}
								else {echo '<script>alert("Products added");</script>';}
							}
				 
				 }
			 
			 
		 
		 
		 }

}
?>

 </div></div></div></div> </div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
</body>
</html>