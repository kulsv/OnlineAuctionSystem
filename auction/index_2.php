<?php

$dbConnection = mysqli_connect('localhost', 'root', '', 'auction');


 ?>
 <html>
<style type="text/css">
#apDiv1 {
	position:absolute;
	left:237px;
	top:145px;
	width:343px;
	height:152px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:73px;
	top:150px;
	width:136px;
	height:27px;
	z-index:2;
}
</style>
<body>
<div id="apDiv1">
  
  <?php
  echo "<form name='form1' method='post' action='javascript:popup()'>";
   
    echo "<p>"."Live auction product: "."</p>";
    
			$sql1 = "select * from product where p_name ='appleipod' or p_name='applemac'";
			$sql1result = mysqli_query($dbConnection,$sql1);

			if (mysqli_num_rows($sql1result) > 0) {

   			 while ($sql1row = mysqli_fetch_assoc($sql1result)) 
			 {
				$pname1= $sql1row['p_name'];
				echo $pname1;
				echo "<input type='radio' name='products' id='products' value='$pname1'/>"."<br><br>";
				}
				 
			}
			echo "<input type='submit' name='submit' id='submit' value='Submit'>";
			echo "</form>";
		?>
</div>
    <p>&nbsp;</p>
<?php


session_start();
echo $_SESSION['myusername'];
?>
<!--<a href="javascript:popup()">come here</a>-->
<a href="sellerpg.html">or come here</a>

<?php 
		
		$prod1 = "SELECT * from product where p_name = 'appleipod' ";
		$result1 = mysqli_query($dbConnection,$prod1);
		if (mysqli_num_rows($result1) > 0) {
			while ($row = mysqli_fetch_assoc($result1)) {
				$pdate = $row['date_and_time'];
				
				echo $pdate;
				
			}
		}
		?>
		
<script>
	function popup(){
		
		//date set for auction
		var checkdate = "<?php echo $pdate?>"; 
				
		//string to date
		var checkdate1 = new Date(checkdate);
		console.log(checkdate1);
		
		//get today's date
		var today = new Date();
		console.log(today);
		
						
		var timeDiff = (checkdate1.getTime() - today.getTime())/60000;
		console.log(timeDiff);
		if(timeDiff <= 2 && timeDiff >=0) {
		
		child = window.open("yoyo.php", "littleWindow", "location=no,width=620,height=500");
		
		var timer = setInterval(checkChild, 500);

			function checkChild() {
				if (child.closed) {
				//	window.location = "http://www.google.com/";   
					window.location = "yoyo3.php";
					clearInterval(timer);
				}
			}
		}
		else if(timeDiff < 0)alert("you cant bid now!!");
		else alert("bidding hasn't startd yet!!");
}
</script>
</body>
</html>
