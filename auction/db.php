<html>
<body>
<?php
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die("can't connect:" . mysql_error());
	}
	if (mysql_query("CREATE DATABASE register", $con))
	{
		echo "db created";
	}
	else
		echo"Error: " . mysql_error();
		
	mysql_close($con);
?>
</body>
</html>
		