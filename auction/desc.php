<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

  <head>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="css/thickbox.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/flat-ui.css" rel="stylesheet">

    <script src="js/jquery-1.2.6.pack.js" type="text/javascript"></script>
    <script src="js/jquery.color.js" type="text/javascript"></script>
    <script src="js/thickbox.js" type="text/javascript"></script>
    <script src="js/cart.js" type="text/javascript"></script>

    <link href="css/custom.css" rel="stylesheet">

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
<div class="container">
<?php
$products = $_GET['desc'];
// Create connection
$con=mysqli_connect("localhost","root","","auction");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
  $result = mysqli_query($con,"SELECT * FROM product WHERE p_id = ".$products);

while($row = mysqli_fetch_array($result))
  {
    $p_id=$row['p_id'];
    $p_name=$row['p_name'];
    $p_image=$row['p_image'];
    $p_price=$row['p_price'];
    $seller_id=$row['seller_id'];
    $cat=$row['cat'];
	$Description=$row['Description'];


  echo '
<div class="row">
  <div class="col-md-4 tile" style="min-height:450px">
    <img src="images/'.$p_id.'.jpg" style="max-width: 100%;width: 350px;max-height: 100%;"/>
  </div>
  <div class="col-md-6">
    <h3><B>'.$p_name.'</h3>
	<h4>Description: </h4>'.$Description.'
    <h4>Price: Rs. '.$p_price.'</h4>
    <form class="cart_form" action="cart_action.php" method="get">
      <input type="hidden" name="order_code" value="'.$p_id.'" />
      <input type="hidden" name="quantity" value="1" />
      <input type="hidden" name="unit_price" value="'.$p_price.'" />
      <input class="btn btn-primary" type="submit" name="submit" value="Bid now!" />
    </form>
  </div>
</div>
          ';
  }

mysqli_close($con);
}
?>
</div>
</body>
  </html>

