<? $id=$_REQUEST['cid'];
//echo "id is::".$id;
$email=$_REQUEST['email'];
//echo "email is::".$email;
$status=$_REQUEST['txtstatus'];
//echo "status".$status;
include("conn.php");
$compn=$_REQUEST['cname'];
$compc=$_REQUEST['ccode'];
$fname=$_REQUEST['cfname'];
$lname=$_REQUEST['clname'];
$access=$_REQUEST['access'];
$country=$_REQUEST['txtcountry'];
$state=$_REQUEST['txtstate1'];
$city=$_REQUEST['city'];
$zip=$_REQUEST['txtzip'];
$strno=$_REQUEST['stno'];
$phno=$_REQUEST['phno'];
$ext=$_REQUEST['ext'];
$fax=$_REQUEST['fax'];
$notes=$_REQUEST['notes'];
$username=$_REQUEST['txtuid'];
$password=$_REQUEST['txtpwd'];
$country=$_REQUEST['txtcountry'];
$address1=$_REQUEST['address1'];
$address2=$_REQUEST['address2'];

$query="update cuser set userName='".$username."',password='".$password."',access='".$access."',company_name='".$compn."', company_code='".$compc."',cfname='".$fname."',clname='".$lname."',address1='".$address1."',address2='".$address2."' ,
country='".$country."' , state='".$state."',zip='".$zip."',city='".$city."',strno='".$strno."',phno='".$phno."',
ext='".$ext."',fax='".$fax."'  where id='".$id."'";
mysql_query($query);



 header("Location:home.php");
 ?>

