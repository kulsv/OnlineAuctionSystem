<?php
session_start();
global $pdate,$edate;

function startdate($room){

$dbConnection = mysqli_connect('localhost', 'root', '', 'auction');

	$prod1 = "SELECT * from product where p_name = '".$room."'";
	$result1 = mysqli_query($dbConnection,$prod1);
	if (mysqli_num_rows($result1) > 0) {
		while ($row = mysqli_fetch_assoc($result1)) {
			
			$pdate = $row['date_and_time'];
			$edate = $row['ended'];
						
		}
		echo $pdate;
	}

}

function enddate($room){
$dbConnection = mysqli_connect('localhost', 'root', '', 'auction');

	$prod1 = "SELECT * from product where p_name = '".$room."'";
	$result1 = mysqli_query($dbConnection,$prod1);
	if (mysqli_num_rows($result1) > 0) {
		while ($row = mysqli_fetch_assoc($result1)) {
			
			$pdate = $row['date_and_time'];
			$edate = $row['ended'];
						
		}
		echo $edate;
	}
}

?>

<html>
	<head>
		<title>Place your bids!!</title>
		
		<!--timer logic	-->
		<link href="css/timeTo.css" type="text/css" rel="stylesheet"/>
		
		<link rel="stylesheet" href="css/main.css">
  
   
	
    <style type="text/css">
    #apDiv1 {
	position:absolute;
	left:1113px;
	top:54px;
	width:305px;
	height:156px;
	z-index:1;
}

	#apDiv2 {
	position:absolute;
	left:453px;
	top:56px;
	width:154px;
	height:85px;
	z-index:1;
}

	#clock {
border:2px solid red;
font-family:verdana;
font-size:16pt;
font-weight:bold;
background: #FECFC7;
width:125px;
text-align:center;
color:#000000;
}
    #apDiv3 {
	position:absolute;
	left:465px;
	top:107px;
	width:112px;
	height:22px;
	z-index:2;
}
    #apDiv4 {
	position:absolute;
	left:442px;
	top:389px;
	width:204px;
	height:44px;
	z-index:3;
}
    </style>
	
	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
	
	<!-- timer actual wala-->
	<script>
	

	
	</script>
	
	
	</head>
	<body><!-- onLoad="ct = setTimeout('calculate_time()',1);">
		
		<!--welcome the user-->
		
		<div id="apDiv3">Hello bidder, select some product</div>
	<div id="apDiv4">increase bid by:
	  
	  <label for="increaseby"></label>
	  <select name="increaseby" id="increaseby" onclick="increaseby()" onmousemove="resetvalue()" disabled>
      	<option value="" selected>Select</option>
		<option value="500">500</option>
		<option value="1000">1000</option>
	    <option value="5000">5000</option>
	    <option value="10000">10000</option>
	    <option value="100000">100000</option>
      </select>
     
  
  
		</div>
		
	
		<div class="chat">
			<?php
			require 'yoyo2.php';
			
			
			?>
			<input id="name" type="text" value="<?php echo $name3;?>" class="chat-name" readonly>
			
			<div id="multi1" class="chat-messages" >
				View bid history here
			</div>
			
			<textarea id="txt" class="chat textarea" placeholder="Enter bid amount(press enter to send)" onKeyPress="return isNumber(event)" readonly></textarea>
			<div class="chat-status">Status: <span>Idle</span></div>
			
            
			<div id="rooms"></div>
			<br>
			<div id="multi2"></div>
			
			<div id="apDiv2">
			<input id="clock" placeholder="go bid!!" readonly>
			</div>	
			
            
	</div>
		
		<script src="js/jquery.min.js"></script>	
	
		<script src="http://localhost:7000/socket.io/socket.io.js"></script>
		
		<script>	

				
		var socket = io.connect('http://localhost:7000');
		
		var increase = [],
			notstarted = [],
			forroom,
			userses = "<?php echo $name3; ?>";
					
		
		// on connection to server, ask for user's name with an anonymous callback
		socket.on('connect', function(){
			// call the server-side function 'adduser' and send one parameter (value of prompt)
			socket.emit('product',userses);
			socket.emit('adduser', document.getElementById('name').value);
		});

		//print from server
		socket.on('updatechat1', function (username, data) {
			document.getElementById('multi2').innerHTML = '<b>'+username + ':</b> ' + data + '<br>';
		});
		
		// listener, whenever the server emits 'updatechat', this updates the chat body
		socket.on('updatechat', function (username, data) {
			$('#multi1').append('<b>'+username + ':</b> ' + data + '<br>');
		});

	// listener, whenever the server emits 'updaterooms', this updates the room the client is in
	/*socket.on('updaterooms', function(rooms, current_room) {
		$('#rooms').empty();
		$.each(rooms, function(key, value) {
			if(value == current_room){
				$('#rooms').append('<div>' + value + '</div>');
			}
			else {
				$('#rooms').append('<div><a href="#" onclick="dotimer(\''+value+'\');switchRoom(\''+value+'\')">' + value + '</a></div>');
			}
		});
	});*/

	//to open payment window
	/*socket.on('openpayment',function(check){
				if(windowcounter[forroom] && check){
					child = window.open("payment/form_delete.php#no-back-button", "littleWindow", "location=no,width=1100,height=650");
		
					var timer = setInterval(checkChild, 500);

					function checkChild() {
						if (child.closed) {
					
							clearInterval(timer);
						}
					}
					windowcounter[forroom] = 0;
				}
					
		}*/
	
	//called second during room switching
	function switchRoom(room){
		
		
		document.getElementById("txt").removeAttribute('readonly');
		document.getElementById("txt").readOnly = false;
		document.getElementById("increaseby").disabled = false;
		//ct = setTimeout('calculate_time()',1);
		socket.emit('switchRoom', room);
	}
		
		//global variables
		var checkdate1,
			end_date1,
			counter = 0,
			timetostart,
			seconds_delay = 1;
		var ct,mins,secs,hrs,sw = '';
		var windowcounter = [];
			
		//called first during switching of rooms
		function dotimer(room){
			
			
			forroom = room;
			
			windowcounter[forroom] = 0;
			console.log(windowcounter[forroom]);
			
			console.log(forroom);
			socket.emit('getdates',room);
			
			//if bid not started
			socket.on('notstarted',function(startdate,enddate){
				document.getElementById("txt").value = '';
				checkdate1 = new Date(startdate);
				//checkdate2 = new Date(startdate);
				
				end_date1 = new Date(enddate);
				//end_date2 = new Date(enddate);
				var aaj = new Date();
				document.getElementById("clock").value = "00:00:00";
				
				//calculate remaining time
				var difference_ms = checkdate1.getTime() - aaj.getTime();
				var mstosec = difference_ms / 1000;
				
				//remaining hours
				var rem_hrs = Math.floor(mstosec/60/60);
					if(rem_hrs == 1) {
						var rem_hrs_string = "1 hour,";
					}
					else if(rem_hrs < 1) var rem_hrs_string = "";
					else var rem_hrs_string = rem_hrs+" hours,";
				
				mstosec = mstosec - rem_hrs * 60 * 60;
								
				//remaining minutes
				var rem_mins = Math.floor(mstosec/60);
					if(rem_mins == 1) {
						var rem_mins_string = "1 minute,";
					}
					else if(rem_hrs < 1) var rem_mins_string = "";
					else var rem_mins_string = rem_mins+" minutes,";
					
				mstosec = mstosec - rem_mins * 60;
				
				//remaining seconds
				var rem_secs = Math.floor(mstosec); 
					if(rem_secs == 1) {
						var rem_secs_string = "1 second";
					}
					else if(rem_hrs < 1) var rem_secs_string = "";
					else var rem_secs_string = rem_secs+" seconds";
				
				
				document.getElementById("apDiv3").innerHTML = "Bid will start in  "+rem_hrs_string+rem_mins_string+" and "+rem_secs_string;
				document.getElementById("txt").removeAttribute('readonly');
				document.getElementById("txt").readOnly = true;
				document.getElementById("increaseby").disabled = true;
				
				timetostart = checkdate1.getMinutes()-aaj.getMinutes();
				console.log(timetostart);
				if(aaj < checkdate1) notstarted[forroom] = 1;
			});
			
			//if time is up
			socket.on('over',function(startdate,enddate){
				document.getElementById("txt").value = '';
				checkdate1 = new Date(startdate);
				end_date1 = new Date(enddate);
				//alert("time up for"+room);
				document.getElementById("clock").value = "00:00:00";
				document.getElementById("apDiv3").innerHTML = "Your time is up, please close this window or switch to another product";
				document.getElementById("txt").removeAttribute('readonly');
				document.getElementById("txt").readOnly = true;
				document.getElementById("increaseby").disabled = true;
				
			});
			
			// it is time for bidding
			socket.on('gotdates',function(startdate,enddate){
				document.getElementById("apDiv3").innerHTML = "Go bid!!";
				checkdate1 = new Date(startdate);
				end_date1 = new Date(enddate);
				//console.log(checkdate1 +' '+ end_date1);
				//console.log(startdate + ' ' + enddate);
				ct = setTimeout('calculate_time()',1);
				var today = new Date();
				if(today < end_date1) windowcounter[forroom] = 1;
				
			});
			
						
			seconds_delay = 1; // Adjust this value for number of seconds to delay before changing the time display.
			sw = 1;
					
		}
		
		//countdown timer
		function calculate_time(){
				
			var today = new Date();
			//console.log(today);
			//console.log(checkdate1);
			//console.log(end_date1);
			//console.log((checkdate1.getTime()-today.getTime())/60000);
			var beforestarttime =(checkdate1.getTime()-today.getTime())/60000;
			
			
				var end_time = end_date1.getTime()/1000;
		
				var time_stamp = checkdate1.getTime()/1000; // Get current minutes (converted to seconds).
				
				var total_time = end_time - Math.floor(time_stamp); // Subtract current seconds from total seconds to get seconds remaining.
					
				
				if( (beforestarttime > 0 && beforestarttime < 0.8) || (beforestarttime >= -16 && beforestarttime <= 0)){
				var total_time = end_time - Math.floor(today.getTime()/1000);
				//console.log(total_time);
				}
				
			//	else if(beforestarttime > 0.8) {alert("bid nt started yet!!");}
				else var total_time = 0;
				
				hrs = Math.floor(total_time / 60 / 60);
 
				mins = Math.floor((total_time / 60) - (hrs * 60)); // Extract minutes from seconds remaining.
				secs = total_time - ((mins * 60) + (hrs * 60 * 60));; // Extract remainder seconds if any.
				if(secs < 10){secs = "0" + secs;} // Check if seconds are less than 10 and add a 0 in front.
				if(mins < 10){mins = "0" + mins;} // Check if minutes are less than 10 and add a 0 in front.
				if(hrs < 10 && hrs > -1){hrs = "0" + hrs;} // Check if hours are less than 10 and add a 0 in front.
				document.getElementById("clock").value = hrs + ":" + mins + ":" + secs; // Display remaining minutes and seconds.
		
				
				//	end_date1.setSeconds(end_date1.getSeconds()- 1);
				
				
				// This if statement adjusts time to increments of seconds_delay
				if(secs % seconds_delay > 0)
				{
					sw = 0;
					ct = setTimeout("timer()",500);
				}
				else{sw = 1;}
				// Check for end of time, stop clock and display message.
				if(hrs < 0 && mins >= 0 && secs >= 0 || hrs == 0 && mins == 0 && secs == 0)
				{
					clearTimeout(ct);
					
					document.getElementById("clock").value = "00:00:00";
					
					if(notstarted[forroom] == 1)
					document.getElementById("apDiv3").innerHTML = "Bid will start in  "+timetostart+" minutes";
					else
					document.getElementById("apDiv3").innerHTML = "Your time is up, please close this window or switch to another product";
					
					document.getElementById("txt").value = '';
					document.getElementById("txt").removeAttribute('readonly');
					document.getElementById("txt").readOnly = true;
					document.getElementById("increaseby").disabled = true;
					
					
					//IMP: update winner details
					socket.emit('winner',forroom,"<?php echo $name3?>");
					
					
					sw = 0;
				}
			
				// Display the time once every seconds_increment seconds. 1000 equals approximatly 1 second.
				if(sw){ct = setTimeout("calculate_time()",seconds_delay * 1000);} 
	
			
				
		}
		
		//only numbers can be typed
		function isNumber(evt) {
			evt = (evt) ? evt : window.event;
			var charCode = (evt.which) ? evt.which : evt.keyCode;
			if (charCode > 31 && (charCode < 48 || charCode > 57 )) {
				if(charCode === 46) return true;
				return false;
			}
			return true;
		}
		
		//to increase bid by certain amount
		function increaseby(){
			
			socket.emit('getmaxamt',forroom);
			
		}
		
		//reset dropdown value
		function resetvalue(){
			document.getElementById("increaseby").value='';
		}
		
		//receive max amt for increasing from server
		socket.on('gotmaxamt',function(gotmaxamt){
			if(document.getElementById("increaseby").value == ''){
				document.getElementById("txt").value = '';
			}
			else{
				document.getElementById("txt").value = gotmaxamt + parseInt(document.getElementById("increaseby").value);
				document.getElementById("txt").focus();
			}
		});
		
		/*socket.on('openpayment',function(check){
						console.log('doneadone');
					
					if (windowcounter[forroom] && check){
						child = window.open("payment/form_delete.php#no-back-button", "littleWindow", "location=no,width=1100,height=650");
		
						var timer = setInterval(checkChild, 500);

						function checkChild() {
							if (child.closed) {
					
							clearInterval(timer);
							}
						}
					}
				
				});	*/
		
		</script>
		


<script>
//var socket = io.connect('http://localhost:7000');

	/*
	// on connection to server, ask for user's name with an anonymous callback
	socket.on('connect', function(){
		// call the server-side function 'adduser' and send one parameter (value of prompt)
		socket.emit('product',function(){});
		socket.emit('adduser', document.getElementById('name').value);
	});

	//print from server
	socket.on('updatechat1', function (username, data) {
		document.getElementById('multi2').innerHTML = '<b>'+username + ':</b> ' + data + '<br>';
	});
			
	// listener, whenever the server emits 'updatechat', this updates the chat body
	socket.on('updatechat', function (username, data) {
		$('#multi1').append('<b>'+username + ':</b> ' + data + '<br>');
	});*/

	// listener, whenever the server emits 'updaterooms', this updates the room the client is in
	socket.on('updaterooms', function(rooms, current_room) {
		$('#rooms').empty();
		$.each(rooms, function(key, value) {
			if(value == current_room){
				$('#rooms').append('<div>' + value + '</div>');
			}
			else {
				$('#rooms').append('<div><a href="#" onclick="dotimer(\''+value+'\');switchRoom(\''+value+'\')">' + value + '</a></div>');
			}
		});
	});

	
/*	function switchRoom(room){
		
		
		document.getElementById("txt").removeAttribute('readonly');
		document.getElementById("txt").readOnly = false;
		ct = setTimeout('calculate_time()',1);
		socket.emit('switchRoom', room);
	}
	*/
	
	// on load of page
	(function(){
		var getNode = function(s){
					return document.querySelector(s);
				},	
				
				//get required nodes
				status = getNode('.chat-status span'),
				messages = getNode('.chat-messages'),
				textarea = getNode('.chat textarea'),
				chatName= getNode('.chat-name');
		
		//default status changed to idle every 3 seconds
				statusDefault = status.textContent,
				setStatus = function(s){
					status.textContent=s;
					
					if(s !== statusDefault){
						var delay = setTimeout(function(){
							setStatus(statusDefault);
							clearInterval(delay);
						}, 3000);
					}
				};
		
		if(socket !== undefined){	
		//listen for output
			socket.on('switchoutput', function(data){
				messages.textContent = ' ';
				if(data.length){
					//loop through results 
					//construct messages from server with for loop, into chat message box
					for(var x = 0; x <data.length; x=x+1 ){
						var message = document.createElement('div');
						
						message.setAttribute('class', 'chat-message');
						
						
						message.textContent = data[x].name + ': ' +data[x].message;
								
						//append to the chat box
						messages.appendChild(message);
						//latest message is at the top
						messages.insertBefore(message, messages.firstChild);
					}
				}
			});
		
			socket.on('output', function(data){
				
				if(data.length){
					//loop through results 
					//construct messages from server with for loop, into chat message box
					for(var x = 0; x <data.length; x=x+1 ){
						var message = document.createElement('div');
						
						message.setAttribute('class', 'chat-message');
						
						
						message.textContent = data[x].name + ': ' +data[x].message;
								
						//append to the chat box
						messages.appendChild(message);
						//latest message is at the top
						messages.insertBefore(message, messages.firstChild);
					}
				}
			});
		//listen for a status from server.js during typing by client
					socket.on('status', function(data){
						setStatus((typeof data === 'object') ? data.message : data);
						
						if(data.clear === true){  //if message sent crrctly clear the textbox
							textarea.value = '';
						}
					});
		
		//listen for keydown
				textarea.addEventListener('keydown', function(event){
						var self = this;
							name = chatName.value;
						
			// tell server to execute 'sendchat' and send along one parameter
						
						
						if(event.which === 13 && event.shiftKey === false) {   //only 'enter' sends the message not shift-enter
							
							socket.emit('comparewithmax',{ //to compare with max value of db
								name: name,
								message: self.value
							});
							
							event.preventDefault();
							
						}								
					});				

			//compared with maximum value in db
			socket.on('compared',function(cmpdata){
									
				if(cmpdata === false){
					status.textContent="Enter valid amount";
					textarea.value='';
				}
									
				else{		
					name = chatName.value;
										
					socket.emit('input',{	//to send input data to db
						name: name,
						message: textarea.value
					});
					textarea.value = '';
				}
			});
			socket.on('strange',function(cmpdata){
						status.textContent= "enter some amount";
						textarea.value='';
					});
		
	
		}
	})();

</script>
</body>
	</html>