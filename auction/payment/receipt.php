<html>
<head>
<script type="text/javascript">

window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="Success112on&id24333311paid42422457542357474AB3544FF2423E";}
</script>

<?php
$cookie_name = 'product_id';
if(@$_COOKIE[$cookie_name] != ''){
$p_id = $_COOKIE[$cookie_name];
		$status = "paid";
		$dbConnection = mysqli_connect('localhost', 'root', '', 'auction');
		$query2 = mysqli_query($dbConnection,"update product set status = '$status' where p_id = '$p_id'");
		setcookie($cookie_name , $cookie_value , time() - (400));
		

echo '<script>

		alert("SUCCESS!!!! Your transaction is completed");
		</script>
		';
}
else{
	'<script>

		alert("FAILED!!!!!!Your transaction is incomplete");
		</script>
		';
	}



?>
</head>
<body>
<a href="../profile.php">Click here to go back to your profile</a>
</body>
</html>