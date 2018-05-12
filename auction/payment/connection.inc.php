<?php
$localhost='localhost';
$username='root';
$password='';

  $con=mysql_connect($localhost,$username,$password) or exit('Could not connect to server');
mysql_select_db('auction',$con) or exit('Could not connect to db');



?>