<? session_start();
if(!isset($_SESSION['so_cuserId'])) 
{
header("Location:index.php");
}
include ("conn.php");
$msg="";
if(isset($_POST['submit']))
{
$query1="insert into tbl_automobile_make (auto_make) values ('".$_POST['txt_automake']."')";
$result=mysql_query($query1);
if($result)
$msg="Details successfully inserted !";
else
$msg="Insertion Failed !";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Website</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
<!--
.style1 {color: #333333}
.style2 {color: #FF0000}
-->
</style>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top" class="body_bg"><table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="top"><table width="758" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="top" class="main_table"><table width="756" border="0" align="center" cellpadding="0" cellspacing="0" class="inside_table">
              <tr>
                <td align="left" valign="top"><table width="756" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="left" valign="top" class="header-image"></td>
                  </tr>
                  <tr>
                    <td align="left" valign="top"><table width="756" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="1" align="left" valign="top"><img src="images/menu_left.gif" alt="" width="1" height="34" /></td>
                          <td align="left" valign="top" class="menu_bg"><table width="350" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="107" height="34" align="center" valign="middle"><a href="home.php" class="menu_link" style="color:#FFFFFF;">Homepage</a></td>
                                <td width="146" align="center" valign="middle"><a href="editadmin.php" class="menu_link" style="color:#FFFFFF;">Change password</a></td>
                                <td width="32" align="center" valign="middle">&nbsp;</td>
                                <td width="32" align="center" valign="middle">&nbsp;</td>
                                <td width="33" align="center" valign="middle">&nbsp;</td>
                              </tr>
                          </table></td>
                          <td width="120" align="left" valign="top"><a href="signout.php" style="text-decoration:none"><img src="images/menu_right.gif" alt="" width="120" height="34" border="0" /></a></td>
                        </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center" valign="top"><table width="758" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="top" class="main_table"><table width="756" border="0" cellpadding="0" cellspacing="0" class="inside_table">
              <tr>
                <td align="left" valign="top"><table width="756" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="left" class="body_padding"><table width="736" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="180" align="left" valign="top"><table width="180" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td align="left" valign="top"><table width="180" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td align="left" valign="top"><img src="images/menu_top.gif" alt="" width="180" height="5" /></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="middle" class="menu_title_bg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td height="1" align="left" valign="top"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
                                          </tr>
                                          
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="middle" class="left_menu_bg"><a href="home.php" class="left_menu_link">Users</a></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="top" class="left_menu_bg"><a href="videos.php" class="left_menu_link" >Posts</a></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="top" class="left_menu_bg"><a href="newvideos.php" class="left_menu_link style2">New</a></td>
                                    </tr>
                                    <tr>
                                     <td align="left" valign="top" class="left_menu_bg"><a href="auto_make.php" class="left_menu_link" >Add Model</a></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="top" class="left_menu_bg1"><a href="#bonus-slots.html" class="left_menu_link"></a></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="top" class="left_menu_bg1"><a href="#royal-flush-bonus.html" class="left_menu_link"></a></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="top" class="left_menu_bg1"><a href="#club.html" class="left_menu_link"></a></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="top" class="left_menu_bg1"><a href="#faq.html" class="left_menu_link"></a></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="top" class="left_menu_bg1"><a href="#support.html" class="left_menu_link"></a></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="top"><img src="images/menu_bottom.gif" alt="" width="180" height="5" /></td>
                                    </tr>
                                </table></td>
                              </tr>
                              <tr>
                                <td align="left" valign="top">&nbsp;</td>
                              </tr>
                              <tr>
                                <td align="center" valign="top"><a href="#download.html"></a></td>
                              </tr>
                          </table></td>
                          <td width="10" align="left" valign="top">&nbsp;</td>
                          <td align="left" valign="top">
                          
                          <div  style=" border:#000000; width:550px;  height:290px; overflow:auto"><?php echo $msg; ?></div>
</td>
                        </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="780" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="22" align="left" valign="top"><img src="images/footer_left.gif" alt="" width="22" height="29" /></td>
            <td align="left" valign="middle" bgcolor="#505050" style="border-top:1px solid #CC0000; padding-left:12px;"><br />
              � Srishi Innovative Computer Systems.</td>
            <!--
We request you retain the full web design copyright notice below including the link to http://www.sarkis-webdesign.com
This not only gives respect to the large amount of time given freely by the designer but also helps build interest, traffic and use of template. If you cannot (for good reason) retain the full design copyright we request you at least leave in place the image Web designer - Sarkis, with linked to http://www.sarkis-webdesign.com. Good luck!

Web designer Sarkis
// -->
            <td width="156" align="left" valign="top"><a href="http://www.sarkis-webdesign.com" title="Website Design" target="_blank"><img src="images/website-design.gif" alt="Website Design" width="156" height="29" border="0" /></a></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
