<script LANGUAGE="JavaScript">



<!--



function DisplayPage11(PageName)



 { 



   var NextWin = PageName;



   var NewWin = window.open(NextWin,'email','personalbar=0,statusbar=0,toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=1,resizable=1,width=980,height=720');



   NewWin.moveTo(0,0); 



   NewWin.focus();



 }



// -->



</script>







<?



// echo "<p>-- 503-1 rsp_menu_03.php -- $user_type_01 --</p>";



@session_start();







$dealler_id_10 = $_SESSION['dealler_id'];







$user_01 = "";



$user_01 .= $_SESSION['company_code'];



$user_01 .= " !";







// $_SESSION['company_name'] = $customer_name_01;



// echo "<p>-- rsp_menu_03.php -- $customer_name_01 --</p>";







// include ("lpc_session_variables.php");







// echo "<p>-- 503-10 rsp_menu_03.php -- $admin_03 -- $result[34] --</p>";







/*



 if ($admin_03 == "Yes") {



   $admin_submenu_01 = "



	<option value=\"http://loseparts.com/pages/lpc_manage_customers_01.php?,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,Yes,ASC,Yes,\">List of Customers</option>



	<option value=\"http://loseparts.com/pages/lpc_customers_profile_02.php?,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,Yes,ASC,Yes,\">Add New Customer</option>







	<option value=\"http://loseparts.com/pages/lpc_manage_products_01.php?,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,Yes,ASC,Yes,\">List of Products</option>



	<option value=\"http://loseparts.com/pages/lpc_products_profile_02.php?,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,Yes,ASC,Yes,\">Add New Product</option>



   ";



   $admin_submenu_02 = "Yes,";



}



else {



   $admin_submenu_01 = "";



   $admin_submenu_02 = ",";



}



*/







$field_01 = "<img border=\"0\" src=\"http://www.loseparts.com/images/logout_01.gif\" height=\"10\">";



$field_02 = "<img border=\"0\" src=\"http://www.loseparts.com/images/rsp_delimeter_01.gif\"  width=\"4\" height=\"10\">";



$field_03 = "<p style=\"margin-bottom: 2\"><img border=\"0\" src=\"http://www.loseparts.com/images/rsp_delimeter_01.gif\"  width=\"4\" height=\"10\"></p>";







if (($vendor_name) || ($doctor_name) || ($consumer_name)) {



 if ($user_type_01 == 1) {



  $welcome_01 = "Vendor:&nbsp;$vendor_name";



  $field_01 = "<p style=\"margin-bottom: 2\"><a href=\"rsp_logout_01.php?,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,\" target=\"_top\"><img border=\"0\" src=\"http://www.loseparts.com/images/logout_01.gif\" height=\"10\"></a></p>";



  $field_04 = "&nbsp;";



  $field_11 = "&nbsp;";



  $field_12 = "&nbsp;";



  $field_13 = "<a href=\"rsp_vendor_greeting_02.php?,,,,,,,,,,,,,,,,,,,$transaction_type,rsp_db_maintain_01_1.php,USER_ID,$user_id_vendor,,,,,,,,,$transaction_type,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,\" target=\"_top\"><img border=\"0\" src=\"http://www.loseparts.com/images/home_01.gif\" width=\"33\" height=\"10\"></a>";



  $field_14 = $field_02;



  $field_15 = "<a href=\"rsp_orders_01.php?,,,,,,,,,,,,,,,,,,,dstservices,rsp_order_items,,,display_data,rsp_vendor_dispatch_01.php,,,,,,,exists,,,,,,,,,,,,,,,\"><img border=\"0\" src=\"http://www.loseparts.com/images/my_account_01.gif\" width=\"72\" height=\"10\"></a>";



  $field_16 = $field_02;



  $field_17 = "<a href=\"rsp_contact_vendor_01.php?,,,,,,,,,,,,,,,,,,,$transaction_type,rsp_db_maintain_01_1.php,USER_ID,$user_id_vendor,,,,,,,,,$transaction_type,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,\" target=\"_top\"><img border=\"0\" src=\"http://www.loseparts.com/images/contact_us_01.gif\" width=\"69\" height=\"10\"></a>";



  $field_18 = $field_02;



  $field_19 = "<img border=\"0\" src=\"http://www.loseparts.com/images/help_01.gif\" width=\"31\" height=\"10\">";



  $field_20 = $field_02;



  $field_21 = "<img border=\"0\" src=\"http://www.loseparts.com/images/about_us_01.gif\" width=\"55\" height=\"10\">";



 }



 else if ($user_type_01 == 2) {



  $welcome_01 = "Consumer:&nbsp;$consumer_name";



  $field_01 = "<p style=\"margin-bottom: 2\"><a href=\"rsp_logout_01.php?,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,\" target=\"_top\"><img border=\"0\" src=\"http://www.loseparts.com/images/logout_01.gif\" height=\"10\"></a></p>";



  $field_04 = "&nbsp;";



  $field_11 = "&nbsp;";



  $field_12 = "&nbsp;";



  $field_13 = "<a href=\"rsp_consumer_greeting_02.php?,,,,,,,,,,,,,,,,,,,exists,rsp_db_maintain_01_1.php,USER_ID,$user_id_consumer,,,,,,,,,,,,,,,,,,,,,,,,\" target=\"_top\"><img border=\"0\" src=\"http://www.loseparts.com/images/home_01.gif\" width=\"33\" height=\"10\"></a>";



  $field_14 = $field_02;



  $field_15 = "<a href=\"rsp_orders_01.php?,,,,,,,,,,,,,,,,,,,dstservices,rsp_order_items,,,display_data,rsp_vendor_dispatch_01.php,,,,,,,exists,,,,,,,,,,,,,,,\"><img border=\"0\" src=\"http://www.loseparts.com/images/my_account_01.gif\" width=\"72\" height=\"10\"></a>";



  $field_16 = $field_02;



  $field_17 = "<a href=\"rsp_contact_vendor_01.php?,,,,,,,,,,,,,,,,,,,exists,rsp_db_maintain_01_1.php,USER_ID,$user_id_consumer,,,,,,,,,,,,,,,,,,,,,,,,\" target=\"_top\"><img border=\"0\" src=\"http://www.loseparts.com/images/contact_us_01.gif\" width=\"69\" height=\"10\"></a>";



  $field_18 = $field_02;



  $field_19 = "<img border=\"0\" src=\"http://www.loseparts.com/images/help_01.gif\" width=\"31\" height=\"10\">";



  $field_20 = $field_02;



  $field_21 = "<img border=\"0\" src=\"http://www.loseparts.com/images/about_us_01.gif\" width=\"55\" height=\"10\">";



 }



 else if ($user_type_01 == 3) {



  $welcome_01 = "Doctor:&nbsp;$doctor_name";



  $field_01 = "<p style=\"margin-bottom: 2\"><a href=\"rsp_logout_01.php?,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,\" target=\"_top\"><img border=\"0\" src=\"http://www.loseparts.com/images/logout_01.gif\" height=\"10\"></a></p>";



  $field_04 = "&nbsp;";



  $field_11 = "&nbsp;";



  $field_12 = "&nbsp;";



  $field_13 = "<a href=\"rsp_doctor_greeting_02.php?,,,,,,,,,,,,,,,,,,,$transaction_type,rsp_db_maintain_01_1.php,USER_ID,$user_id_doctor,,,,,,,,,$transaction_type,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,\" target=\"_top\"><img border=\"0\" src=\"http://www.loseparts.com/images/home_01.gif\" width=\"33\" height=\"10\"></a>";



  $field_14 = $field_02;



  $field_15 = "<a href=\"rsp_orders_01.php?,,,,,,,,,,,,,,,,,,,dstservices,rsp_order_items,,,display_data,rsp_vendor_dispatch_01.php,,,,,,,exists,,,,,,,,,,,,,,,\"><img border=\"0\" src=\"http://www.loseparts.com/images/my_account_01.gif\" width=\"72\" height=\"10\"></a>";



  $field_16 = $field_02;



  $field_17 = "<a href=\"rsp_contact_vendor_01.php?,,,,,,,,,,,,,,,,,,,$transaction_type,rsp_db_maintain_01_1.php,USER_ID,$user_id_doctor,,,,,,,,,$transaction_type,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,\" target=\"_top\"><img border=\"0\" src=\"http://www.loseparts.com/images/contact_us_01.gif\" width=\"69\" height=\"10\"></a>";



  $field_18 = $field_02;



  $field_19 = "<img border=\"0\" src=\"http://www.loseparts.com/images/help_01.gif\" width=\"31\" height=\"10\">";



  $field_20 = $field_02;



  $field_21 = "<img border=\"0\" src=\"http://www.loseparts.com/images/about_us_01.gif\" width=\"55\" height=\"10\">";



 }



}



else {



  // if (($user_type_01 == 2) && (!$consumer_name))  $welcome_01 = "<a href=\"rsp_vendor_login_02.php?,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,\" target=\"_top\" style=\"color: #FFFFFF\"><font face='Arial' size='2' color='#FFFFFF'>Vendor&nbsp;login</a>&nbsp;&nbsp;&nbsp;<a href=\"rsp_vendors_profile_01.php?,,,,,,,,,,,,,,,,,,,new,rsp_db_maintain_01_1.php,User_ID,,,,,,,,,,,,,,,,,,,,,,,,,\" target=\"_top\" style=\"color: #FFFFFF\"><font face='Arial' size='2' color='#FFFFFF'>New&nbsp;vendor&nbsp;register</a>";



  // else 



  $welcome_01 = "&nbsp;";



  $field_01 = "<p style=\"margin-bottom: 2\"><a href=\"rsp_vendors_profile_01.php?,,,,,,,,,,,,,,,,,,,new,rsp_db_maintain_01_1.php,User_ID,,,,,,,,,,,,,,,,,,,,,,,,\" target=\"_top\"><img border=\"0\" src=\"http://www.loseparts.com/images/register_01.gif\" height=\"10\"></a></p>";



  $field_04 = "&nbsp;";



  $field_11 = "&nbsp;";



  $field_12 = "&nbsp;";



  $field_13 = "<a href=\"rsp_greeting_01.php?,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,\" target=\"_top\"><img border=\"0\" src=\"http://www.loseparts.com/images/home_01.gif\" width=\"33\" height=\"10\"></a>";



  $field_14 = $field_02;



  $field_15 = "<a href=\"rsp_vendor_login_02.php?,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,\" target=\"_top\"><img border=\"0\" src=\"http://www.loseparts.com/images/my_account_01.gif\" width=\"72\" height=\"10\"></a>";



  $field_16 = $field_02;



  $field_17 = "<a href=\"rsp_contact_consumer_01.php?,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,\" target=\"_top\"><img border=\"0\" src=\"http://www.loseparts.com/images/contact_us_01.gif\" width=\"69\" height=\"10\"></a>";



  $field_18 = $field_02;



  $field_19 = "<img border=\"0\" src=\"http://www.loseparts.com/images/help_01.gif\" width=\"31\" height=\"10\">";



  $field_20 = $field_02;



  $field_21 = "<img border=\"0\" src=\"http://www.loseparts.com/images/about_us_01.gif\" width=\"55\" height=\"10\">";



}



// echo "<p>-- 573-1 rsp_menu_03.php -- $user_type_01 --</p>";



// include("lpc_search_products_03.php");



// echo "<p>-- 573-2 rsp_menu_03.php -- $user_type_01 --</p>";



// include("rsp_select_products_03.php");



// echo "<p>-- 573-3 rsp_menu_03.php -- $user_type_01 --</p>";







$welcome_01 = "<p align=\"center\"><img src=\"http://www.loseparts.com/images/mef_logo_02.jpg\" width=\"224\" height=\"23\" border=\"0\">";



                 



$menu_01 = "<form method=\"POST\" action=\"--WEBBOT-SELF--\">



	<!--webbot bot=\"SaveResults\" U-File=\"../_private/form_results.csv\" S-Format=\"TEXT/CSV\" S-Label-Fields=\"TRUE\" startspan --><input TYPE=\"hidden\" NAME=\"VTI-GROUP\" VALUE=\"0\">



	<!--webbot bot=\"SaveResults\" i-checksum=56819 endspan -->



	<p align=\"center\"><select size=\"1\" name=\"DB_Tables\" onchange=\"window.location.href= this.form.DB_Tables.options[this.form.DB_Tables.selectedIndex].value\">



	<option>Select action:</option>



	<option value=\"http://loseparts.com/pages/lpc_manage_customers_01.php?,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,Yes,ASC,Yes,\">List of Customers</option>



	<option value=\"http://loseparts.com/pages/lpc_customers_profile_02.php?,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,Yes,ASC,Yes,\">Add New Customer</option>







	<option value=\"http://loseparts.com/pages/lpc_manage_products_01.php?,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,Yes,ASC,Yes,\">List of Products</option>



	<option value=\"http://loseparts.com/pages/lpc_products_profile_02.php?,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,Yes,ASC,Yes,\">Add New Product</option>



	</select></p>



</form>



";







$field_02 = "<p style=\"margin-bottom: -1px\"><img border=\"0\"src=\"../images/rsp_delimeter_01.gif\" width=\"4\" height=\"10\">";







$menu_01 = "



	<div align=\"center\">



	<table style=\"text-align: right; margin-top:-1; margin-top:10; margin-bottom:-1\"id=\"table1\"cellspacing=\"0\"cellpadding=\"0\">



	<tr>





	

	

		





	



	<td><p style=\"margin-bottom: -1px\"><a href=\"javascript:DisplayPage11('http://www.loseparts.com/pages/createreq.php')\"><img border=\"0\"src=\"http://www.loseparts.com/images/create_req_02.gif\" style=\"margin-left: 3; margin-right: 3\" alt=\"Search parts\"></a></td>



	<td>$field_02</td>



	<td><p style=\"margin-bottom: -1px\"><a href=\"javascript:DisplayPage11('vw_invoice.php')\"><img border=\"0\"src=\"http://www.loseparts.com/images/button_list_of_invoices_02.gif\" style=\"margin-left: 3; margin-right: 3\" alt=\"List of Invoices\"></a></td>



	<td>$field_02</td>



	<td><p style=\"margin-bottom: -1px\"><a href=\"javascript:DisplayPage11('nw_invoice.php')\"><img border=\"0\"src=\"http://www.loseparts.com/images/button_add_new_invoice_02.gif\" style=\"margin-left: 3; margin-right: 3\" alt=\"Add New Invoice\"></a></td>



	<td>$field_02</td>



	<td><p style=\"margin-bottom: -1px\"><a href=\"javascript:DisplayPage11('http://www.loseparts.com/pages/new_my_requests.php')\"><img border=\"0\"src=\"http://www.loseparts.com/images/button_my_requests_02.gif\" style=\"margin-left: 3; margin-right: 3\" alt=\"My Requests\"></a></td>



	<td>$field_02</td>



	<td><p style=\"margin-bottom: -1px\"><a href=\"javascript:DisplayPage11('http://www.loseparts.com/pages/new_other_requests.php')\"><img border=\"0\"src=\"http://www.loseparts.com/images/button_others_requests_02.gif\" style=\"margin-left: 3; margin-right: 3\" alt=\"Others Requests\"></a></td>



	<td>$field_02</td>



	<td><p style=\"margin-bottom: -1px\"><a href=\"javascript:DisplayPage11('vw_inventory.php')\"><img border=\"0\"src=\"http://www.loseparts.com/images/button_inventory_02.gif\" style=\"margin-left: 3; margin-right: 3\" alt=\"Others Requests\"></a></td>





		<td>$field_02</td>



	<td><p style=\"margin-bottom: -1px\"><a href=\"javascript:loadpop();\"><img border=\"0\"src=\"http://www.loseparts.com/images/button_pending_invoices_02.gif\" style=\"margin-left: 3; margin-right: 3\" alt=\"Pending Invoices\"></a></td>





<td>$field_02</td>


<td>
<p style=\"margin-bottom: -1px\">
<select name=extr id=extr onchange=extrmn(this.value)>
<option>Extras</option>
<option value=oldreq>Old Requests</option>
<option value=oldans>Old Answers</option>
<option value=services>Services</option>
<option value=rls>Rules</option>
<option value=badshops>Bad Shops</option>
<option value=statis>monthly report</option>
<option value=hlp>Help Videos</option>
<option value=pvtmsg>Private Message</option>
<option value=carfax>Car Fax</option>
</select>
</p>
</td>





	<td><p style=\"margin-bottom: 3px; margin-left: 80px; margin-right: 15px\"><FONT SIZE=2 face='Arial' color=\"#091F52\"><b>$user_01</td>



	</tr></table></div>



";







echo "<p>$menu_01</p>";



?>



<body topmargin="0" leftmargin="0" background="../images/rsp_bg_09.gif" style="background-attachment: fixed">

<script language="javascript">
function loadpop()
{
var argwin=window.showModalDialog('pending_invoices.php','Pending Invoices','dialogWidth:700px;dialogHeight:700px');
}
function extrmn(pgopt)
{
if(pgopt=="oldreq")
{
DisplayPage11('my_request_history.php');
}
else if(pgopt=="oldans")
{
DisplayPage11('my_answer_history.php');
}
else if(pgopt=="rls")
{
DisplayPage11('http://www.loseparts.com/rules.html');
}
else if(pgopt=="services")
{
DisplayPage11('services.php');
}
else if(pgopt=="badshops")
{
DisplayPage11('badshops.php');
}
else if(pgopt=="statis")
{
DisplayPage11('monthlyinvoice.php');
}
else if(pgopt=="hlp")
{
DisplayPage11('hlpvideos.php');
}
else if(pgopt=="carfax")
{
DisplayPage11('http://www.carfax.com');
}
else if(pgopt=="pvtmsg")
{
DisplayPage11('pvt_msg_history.php');
}
}

</script>

