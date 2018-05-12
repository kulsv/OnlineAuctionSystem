
<?php 
if(empty($_SESSION))//if the session not yet started
 session_start();
if(!isset($_SESSION['myusername'])){
		header("LOCATION:../session_expired.php");
	}
	
?>
<html>
<head>
<script type="text/javascript">

window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="95293953929294205433332232&&id_spaskey_setid11212357275434893984929&tem32signature234i3134";}

window.addEventListener("load",draw_canvas,false) ;
function draw_canvas(){
var c6 = document.getElementById("layer6");var ctx6=c6.getContext("2d");  ctx6.fillStyle="#FF000";;ctx6.beginPath();ctx6.arc(25,25,24,0,Math.PI*2,true);ctx6.closePath();ctx6.fill();var c8=document.getElementById("layer8");var ctx8=c8.getContext("2d");ctx8.fillStyle = "#000"; ctx8.fillStyle="#fff";ctx8.fillRect(15,0,20,20);    var c7=document.getElementById("layer7");var ctx7=c7.getContext("2d");     ctx7.fillStyle="#fff";ctx7.beginPath();ctx7.arc(25,25,21,0,Math.PI*2,true);ctx7.closePath();ctx7.fill();ctx7.fillStyle = "#000";ctx7.font ="8pt Calibri";ctx7.fillText("Loading", 6, 28);  }

function Redirect()
{
    window.location="receipt.php";
}

document.write("'Please wait while your transaction is processing...");
setTimeout('Redirect()', 9000);
</script>
<style type="text/css">

#layer6,#layer7,#layer8{position: absolute; position: absolute;
    top:0;
    bottom: 0;
    left: 0;
    right: 0;

    margin: auto;}
.anim_8{-webkit-animation-duration: 1.5s;-webkit-animation-iteration-count:infinite;-webkit-transform-origin:25px 25px;-webkit-animation-name:animation_6;-webkit-animation-timing-function: linear;
-moz-animation-timing-function: linear; -moz-animation-duration: 1.5s; -moz-animation-name: animation_6;  -moz-transform-origin:25px 25px; -moz-animation-iteration-count:infinite ; 
-o-animation-timing-function: linear; -o-animation-duration: 1.5s; -o-animation-name: animation_6;  -o-transform-origin:25px 25px; -o-animation-iteration-count:infinite ;}
@-webkit-keyframes animation_6{
0%{ -webkit-transform:  rotate(0deg)  ;}     
100%{ -webkit-transform:  rotate(360deg)  ;} 
}
@-o-keyframes animation_6{
0%{ -o-transform:  rotate(0deg)  ;}     
100%{ -o-transform:  rotate(360deg)  ;} 
}

@-moz-keyframes animation_6{
0%{ -moz-transform:  rotate(0deg)  ;}     
100%{ -moz-transform:  rotate(360deg)  ;} 
}       
</style> 


</head>
<body>

<div class="auto_scaling" >
        <canvas id="layer6" width="50" height="50" class="anim_6"> </canvas> <canvas id="layer8" width="50" height="50" class="anim_8"></canvas>        <canvas id="layer7" width="50" height="50" class="anim_7"></canvas> 


</body>
