<? include("conn.php");
$damage=$_POST['damage'];

//echo $type;
echo $damage;

$query1="delete from tbl_damage where id = " . $damage;


if(mysql_query($query1))
{
header("Location:deletedamage.php?f=s");
}
else
{
header("Location:deletedamage.php?f=f");

}
?>