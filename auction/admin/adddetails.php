<? include("conn.php");
$type=$_POST['type'];
echo $type;
$qry1="insert into tbl_automobile_details(userId) values ('".$type."')";
mysql_query($qry1);

?>