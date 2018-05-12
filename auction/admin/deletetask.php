<? $id=$_REQUEST['id'];
//$status=$_REQUEST['txtstatus'];
include("connection.inc.php");
$query="delete from sign_in where user_id='".$id."'";
mysql_query($query);
 header("Location:home.php");
 ?>

