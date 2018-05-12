var express = require('express')
  , app = express()
  , http = require('http')
  , server = http.createServer(app)
  , io = require('socket.io').listen(server);

server.listen(7000);	
	app.get('/', function (req, res) {
  res.sendfile(__dirname + '/index.html');
});

		
	
// usernames which are currently connected to the chat
var usernames = {};

// rooms which are currently available in chat
var rooms = [ ];

var curmaxamt;


io.sockets.on('connection', function (socket) {
	
	//display different rooms for different products
		socket.on('product',function(userses){
			

			
			var mysql = require('mysql');
			var conn = mysql.createConnection({
				host : "localhost",
				user : "root",
				password : "",
				database : "auction"
			});
			
			var queryString = "select prod_name as name from subscription where cast(date_and_time as date) = cast(now() as date) and email = '"+userses+"' and status = 'yes' order by prod_name";
			
			conn.query(queryString , function (error , results){
			if(error) throw error;
			else{
				//console.log(userses1);
					for(var i=0; i<results.length; i=i+1){
						rooms[i] = results[i].name;
					}
					console.log(rooms);	 
				}
			})
			conn.end();
		});
		
				
	// when the client emits 'adduser', this listens and executes
	socket.on('adduser', function(username){
		// store the username in the socket session for this client
			
			socket.username = username;
			// store the room name in the socket session for this client
			socket.room = '';
			// add the client's username to the global list
			usernames[username] = username;
			// send client to room 1
			socket.join('');
			// echo to client they've connected
			socket.emit('updatechat1', 'SERVER', 'connect to some product');
			// echo to room 1 that a person has connected to their room
			//socket.broadcast.to('room1').emit('updatechat1', 'SERVER', username + ' has connected to this room');
			socket.emit('updaterooms', rooms, '');
	});
	
	// when the client emits 'sendchat', this listens and executes
	/*socket.on('sendchat', function (data) {
		// we tell the client to execute 'updatechat' with 2 parameters
		io.sockets.in(socket.room).emit('updatechat', socket.username, data);
	});*/
	
	socket.on('switchRoom', function(newroom){
		socket.leave(socket.room);
		socket.join(newroom);
		socket.emit('updatechat1', 'SERVER', 'you have connected to '+ newroom);
		// sent message to OLD room
		//socket.broadcast.to(socket.room).emit('updatechat1', 'SERVER', socket.username+' has left this room');
		// update socket session room title
		socket.room = newroom;
		
		//display bid history
		var mysql = require('mysql');
			var conn = mysql.createConnection({
				host : "localhost",
				user : "root",
				password : "",
				database : "auction"
			});
			var queryString = "select name as name,message as message from chat where product = '"+newroom+"'";
			conn.query(queryString , function (error , results){
			if(error) throw error;
			else{
				
				io.sockets.in(socket.room).emit('switchoutput', results);
				}
			})
			conn.end();
		
		//socket.broadcast.to(newroom).emit('updatechat1', 'SERVER', socket.username+' has joined this room');
		socket.emit('updaterooms', rooms, newroom);
	});
	

	// when the user disconnects.. perform this
	socket.on('disconnect', function(){
		// remove the username from global usernames list
		delete usernames[socket.username];
		// update list of users in chat, client-side
		io.sockets.emit('updateusers', usernames);
		// echo globally that this client has left
		//socket.broadcast.emit('updatechat1', 'SERVER', socket.username + ' has disconnected');
		socket.leave(socket.room)
	});
	
	sendStatus = function(s){  //send the status to ui of user i.e index.html
				socket.emit('status',s);
			};
	
	//compare with max amt in database
				socket.on('comparewithmax',function(data){
					var name = data.name,
						message = parseFloat(data.message);
					
					//compare with max in mysqldb		
					var mysql = require('mysql');
					var conn = mysql.createConnection({
						host : "localhost",
						user : "root",
						password : "",
						database : "auction"
					});
					var queryString = "select max(message) as maximum from chat where product ='"+ socket.room+"'";
					conn.query(queryString , function (error , results){
					if(error) throw error;
					else{
						
						if(message <= results[0].maximum) socket.emit('compared',false);
						else if(isNaN(message))socket.emit('strange', false);
						else socket.emit('compared',true);
						}
					})
					conn.end();		
				
					
				});	
		
		
			
		//emit all messages from mysql db
		
			var mysql = require('mysql');
			var conn = mysql.createConnection({
				host : "localhost",
				user : "root",
				password : "",
				database : "auction"
			});
			var queryString = "select name as name,message as message from chat";// where product = '"+socket.room+"'";
			conn.query(queryString , function (error , results){
			if(error) throw error;
			else{
				
				io.sockets.in(socket.room).emit('output', results);
				}
			})
			conn.end();
		
		//wait for input
		socket.on('input', function(data){
			var name = data.name,
				message = parseFloat(data.message);
				whitespacePattern = /^\s*$/;
				
					
			//check whether name or bid is empty
			if(whitespacePattern.test(name) || whitespacePattern.test(message)){
				sendStatus('Name and bid is required.');
			}else{
				
				//insert in mysql db
				var mysql = require('mysql');
					var conn = mysql.createConnection({
						host : "localhost",
						user : "root",
						password : "",
						database : "auction"
					});
					var queryString = "insert into chat(name,message,product) values('"+name+"','"+message+"','"+socket.room+"')";
					conn.query(queryString , function (error , results){
					if(error) throw error;
					else{
						
						//io.sockets.in(socket.room).emit('updatechat', name, message);
						io.sockets.in(socket.room).emit('output', [data]);
						sendStatus({
								message: "Bid sent", //successfully sent bid
								clear: true
							});
						}
					})
				
										
				conn.end();
				
			}			
										
		});
		
		
		//get start and end dates	for a room
		socket.on('getdates',function(room){
			var today = new Date();
			var mysql = require('mysql');
			var conn = mysql.createConnection({
						host : "localhost",
						user : "root",
						password : "",
						database : "auction"
					});
			var queryString = "select date_and_time as startdate,ended as enddate from product where p_name = '"+room+"'";
			conn.query(queryString , function (error , results){
					if(error) throw error;
					else{
						var startdate = results[0].startdate,
							enddate = results[0].enddate;
							
						var beforestarttime =(startdate.getTime()-today.getTime())/60000;
						
						if(beforestarttime > 0.8)
						socket.emit('notstarted',startdate,enddate);
						
						else if(beforestarttime <= -16)
						socket.emit('over',startdate,enddate);
						
						else socket.emit('gotdates',startdate,enddate);
					}
				})	
		});
		
		//get maximum amt from db
		socket.on('getmaxamt',function(room){
			//compare with max in mysqldb		
			var mysql = require('mysql');
			var conn = mysql.createConnection({
				host : "localhost",
				user : "root",
				password : "",
				database : "auction"
			});
			var queryString = "select max(message) as maximum from chat where product ='"+ socket.room+"'";
			conn.query(queryString , function (error , results){
			if(error) throw error;
			else{
					socket.emit('gotmaxamt',results[0].maximum);
				}
			})
			conn.end();	
		});
			
	
		//IMP: update winner details
		
		//first get name and amt from bid history
		socket.on('winner',function(winroom,sesvar){
			
			var winner_id,winner_price;
			var mysql = require('mysql');
			var conn = mysql.createConnection({
				host : "localhost",
				user : "root",
				password : "",
				database : "auction"
			});
			
			//to get name and amt from bid history
			var queryString = "select name as name , message as message from chat where message in (select max(message) from chat where product = '"+winroom+"')";
			conn.query(queryString , function (error , results){
				if(error) throw error;
				else{
					winner_id = results[0].name;
					winner_price = results[0].message;
					//console.log(sesvar);
					abc(winner_id, winner_price,winroom,sesvar);
					
				}
			})
			
			
			conn.end();	
			
		});
		
		//update winner details into product table
		function abc(winner_id, winner_price,winroom,sesvar){
						
			var mysql = require('mysql');
			var conn = mysql.createConnection({
				host : "localhost",
				user : "root",
				password : "",
				database : "auction"
			});
			var queryString = "update product set bid_winner = '"+winner_id+"', final_price = '"+winner_price+"', status = 'pending' where p_name = '"+winroom+"'";
			conn.query(queryString , function (error , results){
			if(error) throw error;
			else{
					console.log('winner updated');
					//comparenames(winner_id,sesvar);
				}
			})
			conn.end();	
		}
		
		//compare with session name to fwd to payment
		function comparenames(winner_id,sesvar){
			//console.log(sesvar);
			if(winner_id == sesvar)
			socket.emit('openpayment',true);
		}
	
	});
