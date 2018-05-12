<? session_start();
if(!isset($_SESSION['so_cuserId'])) 
{
header("Location:index.php");
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Website</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
<!--
.style1 {color: #333333}
.style3 {color: #FEE9CD; font-size: 16px;}
.style4 {
	color: #FF0000;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 12px;
}
.style5 {color: #FF0000}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<script type="text/javascript">
function showImg()
{
//alert("hi");
 
 document.getElementById("main").style.visibility = "visible";
 
}
</script>
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
                                <td align="center" valign="middle">&nbsp;</td>
                                <td align="center" valign="middle">&nbsp;</td>
                                <td align="center" valign="middle">&nbsp;</td>
                              </tr>
                          </table></td>
                          <td width="120" align="left" valign="top"><a href="signout.php" style="text-decoration:none"><img src="images/menu_right.gif" alt="" width="120" height="34" border="0"/></a></td>
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
                                      <td align="left" valign="top" class="left_menu_bg"><a href="newvideos.php" class="left_menu_link style2 style5">New</a></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="top" class="left_menu_bg1"><a href="#bonus-casino.html" class="left_menu_link"></a></td>
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
                                      <td align="left" valign="top" class="left_menu_bg1"><a href="#support.html" class="left_menu_link"></a></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="top" class="left_menu_bg1"><a href="#support.html" class="left_menu_link"></a></td>
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
                          <td align="left" valign="top" >
                          <?
						  $id=$_REQUEST['id'];
						  //echo"id".$id;
  include("conn.php");
						   $query="select * from autopost where id='".$id."'";
						   $res=mysql_query($query);
						   while($res1=mysql_fetch_array($res))
						   {
						   $id=$res1['id'];
						   $name=$res1['name'];
						   $image=$res1['image'];
						   $video=$res1['path'];
						   $status=$res1['status'];
						   $country=$res1['country'];
						   $state=$res1['state'];
						   $zip=$res1['zip'];
						   //echo "status".$status;
						   $category=$res1['category'];
						   $description=$res1['description'];
						   }
						   ?>
                         <form name="editform" action="editvideotask.php" method="post" enctype="multipart/form-data" onsubmit="showImg()"><table width="342" height="206" border="0" cellspacing="1">
                         <tr>
    <td colspan="3" align="center" class="style3">&nbsp;&nbsp;&nbsp;Edit Status</td>
    </tr>
  <tr>
    <td width="127">&nbsp;</td>
    <td width="49" align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">Title</span></td>
    <td width="144" bgcolor="#E4EDEC"><span class="style1"><? echo $name; ?></span></td>
  </tr>
  <tr>
    <td width="127">&nbsp;</td>
    <td width="49" align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">Description</span></td>
    <td width="144" bgcolor="#E4EDEC"><span class="style1"><? echo $description; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">Category</span></td>
    <td bgcolor="#E4EDEC"><span class="style1"><?  
							$querys="select * from categories where id='".$category."'";
						   $ress=mysql_query($querys);
						   while($ress1=mysql_fetch_array($ress))
						   {
						   $catname=$ress1['catname'];
						   }
						   echo $catname; ?> </span></td>
  </tr>
  <tr>
    <td width="127">&nbsp;</td>
    <td width="49" align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">Country</span></td>
    <td width="144" bgcolor="#E4EDEC"><span class="style1"><? echo $country; ?></span></td>
  </tr>
  <tr>
    <td width="127">&nbsp;</td>
    <td width="49" align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">State</span></td>
    <td width="144" bgcolor="#E4EDEC"><span class="style1"><? echo $state; ?></span></td>
  </tr>
  
  <!--
  <tr>
    <td width="127">&nbsp;</td>
    <td width="49" align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">State</span></td>
    <td width="144" bgcolor="#E4EDEC"><span class="style1"><? echo $state; ?></span></td>
  </tr>
  <tr>
    <td width="127">&nbsp;</td>
    <td width="49" align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">Zipcode</span></td>
    <td width="144" bgcolor="#E4EDEC"><span class="style1"><? echo $zip; ?></span></td>
  </tr>-->
  <tr>
    <td width="127">&nbsp;</td>
    <td width="49" align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">Image</span></td>
    <td width="144" bgcolor="#E4EDEC"><span class="style1"><? echo $image; ?><input type="file" name="ifile" /></span></td>
  </tr>
  <tr>
    <td width="127">&nbsp;</td>
    <td width="49" align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">Video</span></td>
    <td width="144" bgcolor="#E4EDEC"><span class="style1"><? echo $video; ?><input type="file" name="vfile" /></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left" valign="middle" bgcolor="#F2E7E1"><span class="style1">Status</span></td>
    <td bgcolor="#E4EDEC"><span class="style1"><select name="txtstatus" id="txtstatus" class="co"  >
    <? if($status=="P")
	{
	?>
            <option value="P" selected="selected">Pending</option>
            
            <option value="A">Active</option>
            <?
			}
			else
			{
			?>
            <option value="P" >Pending</option>
            
            <option value="A" selected="selected">Active</option>
            <?
			}
			?>
            </select></span></td>
  </tr>
  <tr>
    <td height="35">&nbsp;</td>
    <td colspan="2" align="center" valign="middle" bgcolor="#F2E7E1"><span class="style1"><input type="submit" value="Save" /><input type="hidden" name="id" value="<? echo $id; ?>" /></span><div id="main" style="visibility: hidden">
      <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','32','height','32','src','images/image_progress','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','images/image_progress' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="32" height="32">
        <param name="movie" value="images/image_progress.swf" />
        <param name="quality" value="high" />
        <embed src="images/image_progress.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="32" height="32"></embed>
      </object>
      </noscript>
<span class="style10 style4">Updating.....</span></div></td>
    </tr>
</table>
</form>

						  
 


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
            <td align="left" valign="middle" bgcolor="#505050" style="border-top:1px solid #CC0000; padding-left:12px;"><br />© Srishi Innovative Computer Systems.
              </td>
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
