<?php 
require 'connection.inc.php';
$id = $_GET['id'];

@$cookie_product_name = 'product_id';
$cookie_value= $id;
setcookie($cookie_product_name , $cookie_value , time() + 400);
//$var = setcookie();
header("LOCATION:index.php");
//echo $id;
//Secho $_COOKIE['product_id'] ;


/*
 $query = mysql_query("SELECT * FROM product where p_id = '$id'");
 $count = mysql_num_rows($query);
 if($count==1){
 while($query_row = mysql_fetch_assoc($query)){
	 $product_name = $query_row['p_name'];
	 $product_price = $query_row['final_price'];
	 
	 echo $product_name; echo"<br />";
	 echo $product_price; 

 }}
*/
?>