<?php session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title>Loseparts</title>
		 <link rel="stylesheet" href="stylemenu.css" type="text/css" media="screen">
		<script src="prototype.js" type="text/javascript"></script>
		<script src="scriptaculous.js" type="text/javascript"></script>
		<script type="text/javascript" src="builder.js">
		</script><script type="text/javascript" src="effects.js">
		</script><script type="text/javascript" src="dragdrop.js">
		</script><script type="text/javascript" src="controls.js">
		</script><script type="text/javascript" src="slider.js">
		</script><script type="text/javascript" src="sound.js"></script>
		<link href="menu.css" rel="stylesheet" type="text/css">
		<script src="menu.js" type="text/javascript"></script>
		<script language="javascript">
       function userlogin()
		 {
		 window.open("../jb/index.php");
		 }
		 
		 
function prvt_masg()
{
window.open("adm_msg_multicast.php",'message1','personalbar=0,statusbar=0,toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=1,resizable=0,width=650,height=500');
}
		 
		 
		 
		 
		 
		</script>
			<style type="text/css">
			
			</style>

		</head><body style="background-image:url(../images/bg_01.jpg)">
		<table width="985" border="0">
          <tr>
            <td width="329" height="29" background="../images/lpc_logo_01_1.gif">&nbsp;</td>
            <td width="640">&nbsp;</td>
          </tr>
        </table>
		<br>

		<div id="menu">
		<ul class="level1" id="root">
		  <li><a href="#"><font size="+1">Customer</font></a>
		   <ul style="position: absolute; top: 0px; left: 0px; visibility: hidden;" class="level2">
		      <li><a href="lpc_add_customer.php"><font size="+1">Add New</font></a></a></li>
		      <li><a href="lpc_manage_customers_01.php"><font size="+1">List</font></a></li>
	       </ul>
		  </li>
		  <li class="sep">|</li>
		  <li><a href="#"><font size="+1">Requests</font></a>
		   <ul style="position: absolute; top: 0px; left: 0px; visibility: hidden;" class="level2">
		      <li><a href="adm_manage_requests.php"><font size="+1">Hide Request</font></a></li>
		      <li><a href="vis_msg.php"><font size="+1">Approve Private requests</font></a></li>
	       </ul>
		  </li>
		  <li class="sep">|</li>
		  <li><a href="#"><font size="+1">Services</font></a>
		  <ul style="position: absolute; top: 0px; left: 0px; visibility: hidden;" class="level2">
		      <li><a href="servicehits.php"><font size="+1">Hits</font></a></li>
		      <li><a href="adm_add_service.php"><font size="+1">Add services</font></a></li>
			  <li><a href="adm_del_service.php"><font size="+1">Edit services</font></a></li>
		      <li><a href="adm_del_service.php"><font size="+1">Delete services</font></a></li>
	       </ul>
		  </li>
		  <li class="sep">|</li>
		  <li><a href="#"><font size="+1">Vehicles</font></a>
		    <ul style="position: absolute; top: 0px; left: 0px; visibility: hidden;" class="level2">
		      <li><font size="+1"><a href="#">Model</font></a>
			  <ul style="position: absolute; top: 0px; left: 0px; visibility: hidden;" class="level3">
		          <li><a href="adm_add_model.php"><font size="+1">Add Model</font></a></li>
		          <li><a href="adm_del_model_name.php"><font size="+1">Edit Model</font></a></li>
		          <li><a href="adm_del_model_name.php"><font size="+1">Delete Model</font></a></li>
		        </ul>
			  </li>
			  
		      <li><a href="#"><font size="+1">Category</font></a>
		        <ul style="position: absolute; top: 0px; left: 0px; visibility: hidden;" class="level3">
		          <li><a href="adm_add_cat.php"><font size="+1">Add Category</font></a></li>
		          <li><a href="adm_del_category.php"><font size="+1">Edit Category</font></a></li>
		          <li><a href="adm_del_category.php"><font size="+1">Delete Category</font></a></li>
		        </ul>
		      </li>
			  
		      <li><a href="#"><font size="+1">Parts</font></a>
			   <ul style="position: absolute; top: 0px; left: 0px; visibility: hidden;" class="level3">
		          <li><a href="adm_add_part_name.php"><font size="+1">Add Parts</font></a></li>
		          <li><a href="adm_del_part_name.php"><font size="+1">Edit Parts</font></a></li>
		          <li><a href="adm_del_part_name.php"><font size="+1">Delete Parts</font></a></li>
		        </ul>
			  </li>
		      
		    </ul>
		  </li>
		  <li class="sep">|</li>
		  <li><a href="#"><font size="+1">Images</font></a>
		    <ul style="position: absolute; top: 0px; left: 0px; visibility: hidden;" class="level2">
		      <li><a href="#"><font size="+1">Part image</font></a>
			  <ul style="position: absolute; top: 0px; left: 0px; visibility: hidden;" class="level3">
		          <li><a href="adm_add_partname.php"><font size="+1">Add Part Images</font></a></li>
		          <li><a href="del_part_images.php"><font size="+1">Edit Part Images</font></a></li>
		          <li><a href="del_part_images.php"><font size="+1">Delete Part Images</font></a></li>
		        </ul>
			  </li>
			  
		      <li><a href="#"><font size="+1">View Image</font></a>
		        <ul style="position: absolute; top: 0px; left: 0px; visibility: hidden;" class="level3">
		          <li><a href="adm_add_view.php"><font size="+1">Add View Image</font></a></li>
		          <li><a href="del_view_images.php"><font size="+1">Edit View Image</font></a></li>
		          <li><a href="del_view_images.php"><font size="+1">Delete View Image</font></a></li>
		        </ul>
		      </li>
		    </ul>
		  <li class="sep">|</li>
		     <li><a href="#"><font size="+1">Invoices</font></a>
		     <ul style="position: absolute; top: 0px; left: 0px; visibility: hidden;" class="level2">
		      <li><a href="adm_vw_invoices_5.php"><font size="+1">Pending After 5 days</font></a></li>
			  <li><a href="adm_vw_invoices_5_bfr.php"><font size="+1">Pending Before 5 days</font></a></li>
			  <li><a href="adm_vw_invoices.php"><font size="+1">ALL</font></a></li>
			  </ul>
		 </li>
			  <li class="sep">|</li>
			
     	     <li><a href="#"><font size="+1">Users</font></a>
		     <ul style="position: absolute; top: 0px; left: 0px; visibility: hidden;" class="level2">
		      <li><a href="adm_vw_online.php"><font size="+1">Who is online</font></a></li>
			  <li><a href="adm_user_rank.php"><font size="+1">Ranking</font></a></li>
			  <li><a href="javascript:userlogin();"><font size="+1">User Login</font></a></li>
			   <li><a href="adm_pvt_msg.php"><font size="+1">Delete Private Message</font></a></li>
			   <li><a href="javascript:prvt_masg();"><font size="+1">Message Multicasting</font></a></li> 
			   <li><a href="adm_rerun_msg.php"><font size="+1">Rerun Message</font></a></li> 
			  </ul>
		 </li>  
			 
		</ul>
		</div>

	</body></html>