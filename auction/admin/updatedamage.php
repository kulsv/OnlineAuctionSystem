<? include("conn.php");
$damage=$_POST['damage'];
$type=$_POST['new1'];
//echo $type;
//echo $damage;
if(($damage!="")&&($type!=""))
{$qry1="UPDATE tbl_damage SET type='".$type."' WHERE type='".$damage."'";

mysql_query($qry1);
header("Location:editdamage.php?f=s");
}
else
{
header("Location:editdamage.php?f=f");

}
?>