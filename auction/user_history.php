<?Php

$email = $_SESSION['myusername'];
?>


<html>

<head>
<title>View my profile</title>
</head>

<body>
<?Php
require "config.php";           // All database details will be included here 
$page_name="profile.php"; //  If you use this code with a different page ( or file ) name then change this 

////// starting of drop down to select number of records per page /////

@$limit=$_GET['limit']; // Read the limit value from query string. 
if(strlen($limit) > 0 and !is_numeric($limit)){
echo "Data Error";
exit;
}

// If there is a selection or value of limit then the list box should show that value , so we have to lock that options //
// Based on the value of limit we will assign selected value to the respective option//
switch($limit)
{
case 2:
$select2="selected";
$select10="";
$select5="";
break;

case 5:
$select5="selected";
$select10="";
$select2="";
break;

default:
$select10="selected";
$select5="";
$select2="";
break;

}

@$start=$_GET['start'];
if(strlen($start) > 0 and !is_numeric($start)){
echo "Data Error";
exit;
}

echo "&nbsp;&nbsp;&nbsp;Select Number of records per page: <form method=get action=''>&nbsp;&nbsp;
<select name=limit>
<option value=10 $select10>10 Records</option>
<option value=5 $select5>5 Records</option>
<option value=2 $select2>2 Records</option>
</select>
<input type=submit style = 'color:black;' value=GO />";

// You can keep the below line inside the above form, if you want when user selection of number of 
// records per page changes, it should not return to first page. 
// <input type=hidden name=start value=$start>
////////////////////////////////////////////////////////////////////////
//
///// End of drop down to select number of records per page ///////


$eu = ($start - 0); 

if(!$limit > 0 ){ // if limit value is not available then let us use a default value
$limit = 10;    // No of records to be shown per page by default.
}                             
$this1 = $eu + $limit; 
$back = $eu - $limit; 
$next = $eu + $limit; 


/////////////// Total number of records in our table. We will use this to break the pages///////
$nume = $dbo->query("select count(distinct(product)) from chat where name = hex('$email')")->fetchColumn();
/////// The variable nume above will store the total number of records in the table////

/////////// Now let us print the table headers ////////////////
$bgcolor="#f1f1f1";
echo "<TABLE align=center  cellpadding=0 cellspacing=4> <tr>";
/*echo "<td  align = center bgcolor='dfdfdf' width='100'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='4'>Product id</font></td>";*/
echo "<td  align = center bgcolor='dfdfdf' style:'width:1000px' width='100'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='4'>Product Name</font></td>";
echo "<td  align='center' bgcolor='dfdfdf'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='4'>Date and time of bid</font></td>";
echo "<td  align = center bgcolor='dfdfdf'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='4'>Latest bid placed</font></td>";
echo "<td  bgcolor='dfdfdf'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='4'>Won/Lost</font></td>";
echo "<td  align = center bgcolor='dfdfdf'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='4'>Payment</font></td>";


////////////// Now let us start executing the query with variables $eu and $limit  set at the top of the page///////////
$query=" select hex('$email') as alias,p.p_id,p.p_name,p.date_and_time,c.message,p.status,p.bid_winner from chat c,product p where p.p_name=c.product and name=hex('$email') and c.message in(select max(message) from chat where name=hex('$email') group by product) group by c.product order by p.date_and_time desc limit $eu, $limit  ";
//////////////// Now we will display the returned records in side the rows of the table/////////
foreach ($dbo->query($query) as $row) {

if($bgcolor=='#f1f1f1'){$bgcolor='#ffffff';}
else{$bgcolor='#f1f1f1';}

echo "<tr >";
/*echo "<td align=center bgcolor=$bgcolor id='title'>&nbsp;<font face='Verdana' size='2' color='#000000'>$row[p_id]</font></td>";*/ 
echo "<td align=center bgcolor=$bgcolor id='title'>&nbsp;<font face='Verdana' size='2' color='#000000'>$row[p_name]</font></td>"; 
echo "<td align=center bgcolor=$bgcolor id='title'>&nbsp;<font face='Verdana' size='2' color='#000000'>$row[date_and_time]</font></td>";
echo "<td align=center bgcolor=$bgcolor id='title'>&nbsp;<font face='Verdana' size='2' color='#000000'>$row[message]</font></td>";

if($row['bid_winner'] == $row['alias'] && $row['status']=='pending'){
$p_id = $row['p_id'];
echo "<td align=center bgcolor=$bgcolor id='title'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='2'>Won</font></td>";
echo "<td align=center bgcolor=$bgcolor id='title'>&nbsp;<font face='Verdana' size='2' color='#000000'>$row[status]&nbsp;<br><a href=javascript:popup('payment/cookie.php?id=$p_id');>Pay</a></font></td>"; /*
$cookie_product_name = 'product_id';
$cookie_value=$row['p_id'];
setcookie($cookie_name , $cookie_value , time() + (2400));
$var = setcookie();

*/ 
}
else if($row['bid_winner'] == $row['alias'] && $row['status']=='paid'){
echo "<td align=center bgcolor=$bgcolor id='title'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='2'>Won</font></td>";
echo "<td align=center bgcolor=$bgcolor id='title'>&nbsp;<font face='Verdana' size='2' color='#000000'>Success!</font></td>";  
}
else{
echo "<td align=center bgcolor=$bgcolor id='title'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='2'>Lost</font></td>";
echo "<td align=center bgcolor=$bgcolor id='title'>&nbsp;<font face='Verdana' size='2' color='#000000'>Better luck next time</font></td>";  
}
echo "</tr>";
}
echo "</table>";
////////////////////////////// End of displaying the table with records ////////////////////////

/////////////// Start the buttom links with Prev and next link with page numbers /////////////////
echo "<table align = 'center' width='50%'><tr><td  align='left' width='30%'>";
//// if our variable $back is equal to 0 or more then only we will display the link to move back ////////
if($back >=0) { 
print "<a href='$page_name?start=$back&limit=$limit'><font face='Verdana' size='2'>PREV</font></a>"; 
} 
//////////////// Let us display the page links at  center. We will not display the current page as a link ///////////
echo "</td><td align=center width='30%'>";
$i=0;
$l=1;
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
for($i=0;$i < $nume;$i=$i+$limit){
if($i <> $eu){
echo " <a href='$page_name?start=$i&limit=$limit'><font face='Verdana' size='2'>$l</font></a> ";
}
else { echo "<font face='Verdana' size='4' color=red>$l</font>";}        /// Current page is not displayed as link and given font color red
$l=$l+1;
}


echo "</td><td  align='center' width='30%'>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
///////////// If we are not in the last page then Next link will be displayed. Here we check that /////
if($this1 < $nume) { 
print "<a href='$page_name?start=$next&limit=$limit'><font face='Verdana' size='2'>NEXT</font></a>";} 
echo "</td></tr></table>";


?>
 <br><br>




</body>

<script>
function popup(url1){
console.log(url1);
		child = window.open(url1, "littleWindow", "location=no,width=1200,height=800");
		
		var timer = setInterval(checkChild, 500);

			function checkChild() {
				if (child.closed) {
					location.reload();
					clearInterval(timer);
				}
		}
	}	

</script>

</html>
