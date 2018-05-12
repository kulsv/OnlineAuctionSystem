<style type="text/css">
<!--
.style1 {font-size: larger}
body {
	background-color: #99CCFF;
}
#Layer1 {
	position:absolute;
	width:210px;
	height:238px;
	z-index:1;
	left: 10px;
	top: 45px;
}
-->
</style>
<span class="style1"><a href="lpc_manage_customers_01.php">Admin Menu</a></span><center>

  <p><a href="adm_vw_online.php"><img src="../images/refreshicon.png" alt="Refresh the list of users" width="37" height="30" border="0"></a></p>
  <div id="Layer1"><img src="../images/onlineusers.jpg" width="208" height="244"></div>
  <table width="200" border="1">
  <tr>
    <th scope="col" nowrap="nowrap">Company Name </th>
    <th scope="col" nowrap="nowrap">Time</th>
  </tr>
<?php
include("conn.php");
$ret=mysql_query("Select cname,dtime from logdata where status='Active' order by cname");
while($rec_req=mysql_fetch_array($ret))
{
$req=nl2br($rec_req[1]);
echo "<tr><td nowrap=nowrap><b>$rec_req[0]</b></td><td nowrap=nowrap><b>$rec_req[1]</b></td></tr>";
}
?>
</table>
</center>
