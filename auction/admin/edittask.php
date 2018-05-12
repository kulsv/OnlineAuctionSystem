<?

include("connection.inc.php");
$id=$_REQUEST['user_id'];
echo "id is::".$id;
$email=$_REQUEST['email'];
$pass=$_REQUEST['password'];

$status=$_REQUEST['txtstatus'];
echo "status".$status;




if($status=="P")
{
$query="update sign_in set status='".$status."' where user_id='".$id."'";
mysql_query($query);
}
else if($status=="A")
{
$query="update sign_in set status='".$status."' where user_id='".$id."'";
mysql_query($query);
$to = "$email";
$mail_from="support@autobuyplus";
//echo "mail_from".$mail_from;
//$mail_from="srishti.lallu@gmail.com";
$subject="Confirmation";
$random_hash = md5(date('r', time()));
$headers = "From:$mail_from\r\nReply-To:$mail_from ";
$headers .= "\r\nContent-Type: text/html; boundary=\"PHP-alt-".$random_hash."\"";
$message="Your Account Is Activated.For assistence please contact (1-888-522-8668)<br />Username is :$email <br /> Password is .$pass";
$send_contact=mail($to,$subject,$message,$headers);

}
else
{
$query="update sign-in set status='".$status."' where user_id='".$id."'";
mysql_query($query);
$to = "$email";
$mail_from="support@autobuyplus";
//echo "mail_from".$mail_from;
//$mail_from="srishti.lallu@gmail.com";
$subject="Suspended";
$random_hash = md5(date('r', time()));
$headers = "From:$mail_from\r\nReply-To:$mail_from ";
$headers .= "\r\nContent-Type: text/html; boundary=\"PHP-alt-".$random_hash."\"";
$message="Your Account Is Suspended by admin";
//$send_contact=mail($to,$subject,$message,$headers);


}


 header("Location:home.php");
 ?>

