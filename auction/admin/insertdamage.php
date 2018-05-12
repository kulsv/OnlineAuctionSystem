<? include("conn.php");
$type=$_POST['type'];
//echo $type;
$qry1="insert into tbl_damage(type) values ('".$type."')" or die("errrorr");
mysql_query($qry1);
header("Location:home.php");

?>