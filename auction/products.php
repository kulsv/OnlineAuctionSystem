

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">>
<html lang="en">
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



<div class="row" style="width:100%;
	height:300px;
	overflow-y:scroll;
	padding:10px; background-color:#eff0f2">
<?php

// Create connection
$con=mysqli_connect("localhost","root","","auction");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
  $result = mysqli_query($con,"SELECT * FROM product");

while($row = mysqli_fetch_array($result))
  {
    $p_id=$row['p_id'];
    $p_name=$row['p_name'];
    $p_image=$row['p_image'];
    $p_price=$row['p_price'];
    $seller_id=$row['seller_id'];
    $cat=$row['cat'];

if($cat == 'products'){
  
  echo '
		  <div class="col-md-4">
          <div class="tile">
          <a href="desc.php?desc='.$p_id.'"><img border="0" src="images/'.$p_id.'.jpg" style="max-height:200px"></a>
          <h6>'.$p_name.'</h6> 
          <p>By '.$seller_id.'</p>
          <p>Value Price: Rs. '.$p_price.'/- </p>
          <form class="cart_form" action="subscribe.php?id=".$_SESSION["myusername"]'.'method="get">
            <input type="hidden" name="order_code" value="'.$p_id.'" />
            <input type="hidden" name="quantity" value="1" />
            <input type="hidden" name="unit_price" value="'.$p_price.'" />
            <input class="btn btn-primary" type="submit" name="submit" value="Register to Bid" />
          </form>
          </div>
          <hr class="bottom">
          </div>
		  </table>
          ';
        }
  }

mysqli_close($con);
}
?>


        </div>
		</div>

<?php include 'footer.php';?>
       
</body>
</html>
