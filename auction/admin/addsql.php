<?php
include("conn.php");

$id=$_GET['id'];

		  $sql="Select * from subcat where catid='".$id."' order by subid asc"; 
		  $res=mysql_query($sql) or die(mysql_error()) ;
		   echo "<div align='left'>";
		  echo "<select name='txt_auto_make' id='txt_auto_make' onchange='subcategory2(this.value);'>";
		  echo "<option value='sub'></option>";
		  echo "<option value='sub'>Others</option>";
		 while ($row=mysql_fetch_array($res))
		 { 
		
		  $stateId=$row['subid'];
		  $state_name=$row['subname'];
		  echo "<option value=$stateId>$state_name</option>";
		 }
		echo "</select>";
		echo "</div>";
		
		
?>