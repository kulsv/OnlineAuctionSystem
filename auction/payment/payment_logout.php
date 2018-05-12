<?php

session_start();
unset($_SESSION['myusername']);
session_destroy();
header('Location:../index.php');
exit;
?>
<html>
<a href=""Click here to login again
</html>