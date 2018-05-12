<?php
include("conn.php");

$id=$_GET['id'];
  if($id=='sub')
  {
   echo "<input type='text' name='txt_auto_make' class='new1'/>";
   echo "</br>";
   echo "<input type='text' name='txt_auto_model' class='new1'/>";
   echo "<input type='hidden' name='flag' value='1' class='new1'/>";
  }
  else
  {
		  $sql="Select * from subcat where subname='".$id."' order by subid asc"; 
		  $res=mysql_query($sql) or die(mysql_error()) ;
		  $row=mysql_fetch_array($res);
		   $subid=$row['subid'];
		   //echo "subid".$subid;
		   
		    $sql="Select * from tbl_automobile_make where uid='".$id."'"; 
		  $res=mysql_query($sql) or die(mysql_error()) ;
		   $subid=$row['subid'];
		   echo "<div align='left'>";
		  echo "<select name='txt_auto_model' id='txt_auto_model'  onchange='categorycity(this.value);'>";
		   echo "<option value='sub'></option>";
		  echo "<option value='sub'>Others</option>";
		 while ($row=mysql_fetch_array($res))
		 { 
		
		  $stateId=$row['auto_id'];
		  $state_name=$row['auto_make'];
		  echo "<option value=$stateId>$state_name</option>";
		 }
		echo "</select>";
		echo "</div>";
		
		}
?>