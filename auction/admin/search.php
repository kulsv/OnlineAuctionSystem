<?php
$fname=$_POST['fname'];
$addr=$_POST['addr'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$country=$_POST['country'];
$ph1=$_POST['ph1'];
$ph2=$_POST['ph2'];
$ph3=$_POST['ph3'];
$email=$_POST['email'];
$yea=$_POST['yea'];
$Select_Company=$_POST['Select_Company'];
$Select_Viechle=$_POST['Select_Viechle'];
$bstyle=$_POST['bstyle'];
$esize=$_POST['esize'];
$ttype=$_POST['ttype'];
$atype=$_POST['atype'];
$ftype=$_POST['ftype'];
$vin=$_POST['vin'];
$pno=$_POST['pno'];
$partsneeded=$_POST['partsneeded'];
$addnlinfo=$_POST['addnlinfo'];


$to = "arifcep85@gmail.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>Parts Request</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>Zip</th>
<th>country</th>
<th>Phone:</th>
<th>Email</th>
<th>Make</th>
<th>Model</th>
<th>Body Style</th>
<th>Engine Size</th>
<th>Transmission</th>
<th>Axle</th>
<th>Fuel</th>
<th>VIN#</th>
<th>Part No</th>
<th>Part Needed</th>
<th>Addnl Info</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?> 
