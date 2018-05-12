$query=" select hex('$email') as alias,p.p_id,p.p_name,p.date_and_time,c.message,p.status,p.bid_winner from chat c,product p where p.p_name=c.product and name=hex('$email') and c.message in(select max(message) from chat where name=hex('$email') group by product) group by c.product order by p.date_and_time desc limit $eu, $limit  ";

//ignore the query ab neechewala part dekh lena ok
<?
echo "<tr >";
echo "<td align=center bgcolor=$bgcolor id='title'>&nbsp;<font face='Verdana' size='2' color='#000000'>$row[p_id]</font></td>"; 
echo "<td align=center bgcolor=$bgcolor id='title'>&nbsp;<font face='Verdana' size='2' color='#000000'>$row[p_name]</font></td>"; 
echo "<td align=center bgcolor=$bgcolor id='title'>&nbsp;<font face='Verdana' size='2' color='#000000'>$row[date_and_time]</font></td>";
echo "<td align=center bgcolor=$bgcolor id='title'>&nbsp;<font face='Verdana' size='2' color='#000000'>$row[message]</font></td>";

if($row['bid_winner'] == $row['alias'] && $row['status']=='pending'){
echo "<td align=center bgcolor=$bgcolor id='title'>&nbsp;<font face='arial,verdana,helvetica' color='#000000' size='2'>Won</font></td>";
echo "<td align=center bgcolor=$bgcolor id='title'>&nbsp;<font face='Verdana' size='2' color='#000000'>$row[status]&nbsp;<br><a href=javascript:popup('payment/form_delete.php#no-back-button?name='+$row[p_id]);>Pay</a></font></td>";  
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
?>

//save this file as something.php :O php tagss daal
