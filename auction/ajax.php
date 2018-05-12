<?php
echo '<p>Hi I am some random ' . rand() .' output from the server.</p>';
session_start();


$_SESSION['yoyo'] = $_GET['name'];
echo $_SESSION['yoyo'];

if (isset($_SESSION['yoyo'])) {
    $_SESSION['yoyo'] = 'hiee';
?>