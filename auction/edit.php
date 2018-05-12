

<?php include'header_session.php'?>
<?php
if(empty($_SESSION))//if the session not yet started
 session_start();
if(!isset($_SESSION['myusername']))
{ //if not yet logged in
 header("LOCATION:index.php");//send to login page
}

if(isset($_SESSION['myusername']))
{
echo "welcome ".$_SESSION['myusername']."<br>";
echo "<a href='logout.php'>logout</a><br>";

}
?>