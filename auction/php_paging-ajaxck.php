	<?Php
	
	session_start();
	$email = $_SESSION['myusername'];
require "config.php"; // connection details
error_reporting(0);// With this no error reporting will be there
//////////
/////////////////////////////////////////////////////////////////////////////
$endrecord=$_GET['endrecord'];// 
if(strlen($endrecord) > 0 AND (!is_numeric($endrecord))){
echo "Data Error";
exit;
} 

$limit=10; // Number of records per page, you can change this value

$total_records = $dbo->query("select count(distinct(product)) from chat where name = hex('$email')")->fetchColumn();

if($endrecord < $limit) {$endrecord = 0;}

switch($_GET['direction'])   // Let us know forward or backward button is pressed
{
case "fw":   // Forward button pressed
$start_record = $endrecord ;
break;

case "bk":    // Backword button pressed
$start_record = $endrecord - 2*$limit;
break;

default:
echo "Data Error";
exit;
break;
}
if($start_record < 0){$start_record=0;}
$endrecord =$start_record+$limit;


$sql="SELECT * FROM chat where name = hex('$email') and message in (select max(message) from chat where name = hex('$email') group by product) limit $start_record,$limit"; 
$row=$dbo->prepare($sql);
$row->execute();
$result=$row->fetchAll(PDO::FETCH_ASSOC);


if(($endrecord) < $total_records ){$end="yes";}  // managing forward button
else{$end="no";}

if(($endrecord) > $limit ){$startrecord="yes";}    // managing reverse button
else{$startrecord="no";}

$main = array('data'=>$result,'value'=>array("endrecord"=>"$endrecord","limit"=>"$limit","end"=>"$end","startrecord"=>"$startrecord"));
echo json_encode($main); 



////////////End of script /////////////////////////////////////////////////////////////////////////////////




?>