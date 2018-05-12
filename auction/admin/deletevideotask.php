<? $id=$_REQUEST['id'];
//$status=$_REQUEST['txtstatus'];
include("conn.php");
$query="delete from autopost where id='".$id."'";
mysql_query($query);
 header("Location:videos.php");
 ?>

