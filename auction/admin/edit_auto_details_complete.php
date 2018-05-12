<?php session_start();
if(!isset($_SESSION['so_cuserId'])) 
{
header("Location:index.php");
}
$userid=$_REQUEST['userid'];
//echo "user id is::".$userid;
include("conn.php");
 include('SimpleImage.php');
 echo $_POST['auto_id'];
 $rt=mysql_query("Select * from tbl_automobile_details where auto_id='".$_POST['auto_id']."' ");
 $r=mysql_fetch_array($rt);
 $tstatus= $r['status'];

// for image upload
if($_FILES['ifile1']['name']=="")
{
$_FILES['ifile1']['name']=$_REQUEST['h1'];
//echo $_FILES['ifile2']['name'];
}

 if( $_FILES['ifile1']['name'])
{
$filename=$_FILES['ifile1']['name'];
$source=$_FILES['ifile1']['tmp_name'];

   $newname =dirname(__FILE__).'/image_file/'.$filename;
	  $newname2 =dirname(__FILE__).'/image_files/'.$filename;
	   $newname = preg_replace('/\s+/', '', $newname);
	    $newname2 = preg_replace('/\s+/', '', $newname2);
if(move_uploaded_file($source, $newname))
{
//echo "<div class='style4'>"."Image Uploaded"."</div>";
}
$image = new SimpleImage();
   $image->load($newname);
   $image->resize(115,115);
   $image->save($newname2);
  } 
if($_FILES['ifile2']['name']=="")
{
$_FILES['ifile2']['name']=$_REQUEST['h2'];
//echo $_FILES['ifile2']['name'];
}

 if( $_FILES['ifile2']['name'])
{
$filename=$_FILES['ifile2']['name'];
$source=$_FILES['ifile2']['tmp_name'];

   $newname =dirname(__FILE__).'/image_file/'.$filename;
	  $newname2 =dirname(__FILE__).'/image_files/'.$filename;
	   $newname = preg_replace('/\s+/', '', $newname);
	    $newname2 = preg_replace('/\s+/', '', $newname2);
if(move_uploaded_file($source, $newname))
{
//echo "<div class='style4'>"."Image Uploaded"."</div>";
}
$image = new SimpleImage();
   $image->load($newname);
   $image->resize(115,115);
   $image->save($newname2);
  } 
  
  if($_FILES['ifile3']['name']=="")
{
$_FILES['ifile3']['name']=$_REQUEST['h3'];
//echo $_FILES['ifile2']['name'];
}

  
   if( $_FILES['ifile3']['name'])
{
$filename=$_FILES['ifile3']['name'];
$source=$_FILES['ifile3']['tmp_name'];

   $newname =dirname(__FILE__).'/image_file/'.$filename;
	  $newname2 =dirname(__FILE__).'/image_files/'.$filename;
	   $newname = preg_replace('/\s+/', '', $newname);
	    $newname2 = preg_replace('/\s+/', '', $newname2);
if(move_uploaded_file($source, $newname))
{
//echo "<div class='style4'>"."Image Uploaded"."</div>";
}
$image = new SimpleImage();
   $image->load( $newname);
   $image->resize(115,115);
   $image->save($newname2);
  } 
  
  if($_FILES['ifile4']['name']=="")
{
$_FILES['ifile4']['name']=$_REQUEST['h4'];
//echo $_FILES['ifile2']['name'];
}

  
   if( $_FILES['ifile4']['name'])
{
$filename=$_FILES['ifile4']['name'];
$source=$_FILES['ifile4']['tmp_name'];

   $newname =dirname(__FILE__).'/image_file/'.$filename;
	  $newname2 =dirname(__FILE__).'/image_files/'.$filename;
	   $newname = preg_replace('/\s+/', '', $newname);
	    $newname2 = preg_replace('/\s+/', '', $newname2);
if(move_uploaded_file($source, $newname))
{
//echo "<div class='style4'>"."Image Uploaded"."</div>";
}
$image = new SimpleImage();
   $image->load($newname);
   $image->resize(115,115);
   $image->save($newname2);
  } 
  
  if($_FILES['ifile5']['name']=="")
{
$_FILES['ifile5']['name']=$_REQUEST['h5'];
//echo $_FILES['ifile2']['name'];
}

  
   if( $_FILES['ifile5']['name'])
{
$filename=$_FILES['ifile5']['name'];
$source=$_FILES['ifile5']['tmp_name'];

   $newname =dirname(__FILE__).'/image_file/'.$filename;
	  $newname2 =dirname(__FILE__).'/image_files/'.$filename;
	   $newname = preg_replace('/\s+/', '', $newname);
	    $newname2 = preg_replace('/\s+/', '', $newname2);
if(move_uploaded_file($source, $newname))
{
//echo "<div class='style4'>"."Image Uploaded"."</div>";
}
$image = new SimpleImage();
   $image->load($newname);
   $image->resize(115,115);
   $image->save($newname2);
  } 







//for video upload

if((!empty($_FILES["vfile"])) && ($_FILES['vfile']['error'] == 0)) {
  //Check if the file is JPEG image and it's size is less than 350Kb
  $filename = basename($_FILES['vfile']['name']);
  $ext = substr($filename, strrpos($filename, '.') + 1);
  //echo $ext;
  if (($ext == "mpg" || $ext == "flv" || $ext == "avi" || $ext == "mp4")) //&& ($_FILES["image_file"]["type"] == "image/jpeg")) && ($_FILES["image_file"]["size"] < 7000000)) 
	{
	//echo dirname(__FILE__);
    //Determine the path to which we want to save this file
      $newname =dirname(__FILE__).'/video_file/'.$filename;
      //Check if the file with the same name is already exists on the server
      if (!file_exists($newname)) {
        //Attempt to move the uploaded file to it's new place
        if ((move_uploaded_file($_FILES['vfile']['tmp_name'],$newname))) {
           $msg= "It's done! The video file has been saved";
		   //$img = $newname;
		// echo "hiiiiiiiiiiiii".$newname;
		//  echo $img;
        } else {
           $msg= "v:Error: A problem occurred during file upload!";
        }
      } else {
         $msg= "v:Error: File ".$_FILES["vfile"]["name"]." already exists";
      }
  } else
   {
     $msg= "v:Error: Only Videos under 7000000kb are accepted for upload";
  }
} else
 {
 $msg= " "; 
}




$cat=$_POST['cat'];

if($_POST['flag']==1)
{

         $make  = $_POST['txt_auto_make'];
         $model = $_POST['txt_auto_model'];
		 
		 

}
else
{
           $sql="Select * from subcat where subid='".$_POST['txt_auto_make']."' "; 
		   $res=mysql_query($sql) or die(mysql_error()) ;
		   $row=mysql_fetch_array($res);
          $make=$row['subname'];


           $sql="Select * from tbl_automobile_make where auto_id='".$_POST['txt_auto_model']."' "; 
		   $res=mysql_query($sql) or die(mysql_error()) ;
		   $row=mysql_fetch_array($res);
          $model=$row['auto_make'];

}



///$saledate=$_POST['sale_year']."/".$_POST['sale_month']."/".$_POST['sale_day'];
$saledate=$_POST['timestamp'];
$status=$_REQUEST['txtstatus'];
$date=date("y/m/d");
echo $date;
$state=$_POST['state'];
$city=$_POST['city'];
$damage=$_POST['damage'];
$pdamage=$_POST['pdamage'];
$sdamage=$_POST['sdamage'];
$avalue=$_POST['avalue'];
$rcost=$_POST['rcost'];
$vin=$_POST['vin'];
$bstyle=$_POST['bstyle'];
$color=$_POST['color'];
$engine=$_POST['engine'];
$drive=$_POST['drive'];
$cylinder=$_POST['cylinder'];
$fuel=$_POST['fuel'];
$keys=$_POST['keys'];
$access=$_POST['access1'];




$filename1 = basename($_FILES['ifile1']['name']);
 $filename1 = preg_replace('/\s+/', '', $filename1);
	   

$filename2 = basename($_FILES['ifile2']['name']);
 $filename2 = preg_replace('/\s+/', '', $filename2);
//echo $filename2;
$filename3 = basename($_FILES['ifile3']['name']);
 $filename3 = preg_replace('/\s+/', '', $filename3);
$filename4 = basename($_FILES['ifile4']['name']);
 $filename4 = preg_replace('/\s+/', '', $filename4);
$filename5 = basename($_FILES['ifile5']['name']);
 $filename5 = preg_replace('/\s+/', '', $filename5);
$filenamev = basename($_FILES['vfile']['name']);

$filenamev = basename($_FILES['vfile']['name']);
echo $cat;echo $make;echo $model;

if($filename1!=="" && $filenamev=="")
{
//echo "img".$filename;
$vid=$_REQUEST['vfile'];
//echo "vid".$vid;

$qry1 = "UPDATE tbl_automobile_details SET auto_year = '".$_POST['txt_auto_year']."',category='".$cat."', auto_make = '".$make."', auto_model = '".$model."', state='".$state."', city='".$city."', auto_saledate = '".$saledate."', 
auto_odometer = '".$_POST['txt_auto_odometer']."', auto_title = '".$_POST['txt_auto_title']."', auto_damage = '".$damage."', auto_minbid = '".$_POST['txt_auto_minbid']."',auto_image1='".$filename1."',auto_image2='".$filename2."',auto_image3='".$filename3."',auto_image4='".$filename4."',auto_image5='".$filename5."',auto_video='".$vid."', auto_productid = '".$_POST['auto_id']."' ,status ='".$status."' ,actualvalue='".$avalue."' ,repaircost='".$rcost."' ,primarydamage='".$pdamage."' ,secondarydamage='".$sdamage."' ,vin='".$vin."' ,bodystyle='".$bstyle."' ,color='".$color."' ,engine='".$engine."' ,drive='".$drive."' ,cylinder='".$cylinder."' ,fuel='".$fuel."',product_key='".$keys."' , usertype='".$access."'  WHERE auto_id = '".$_POST['auto_id']."'";

}
if($filename1=="" && $filenamev!=="")
{
//echo "video".$filename1;
$img=$_REQUEST['ifile'];
//echo "img".$img;

$qry1 = "UPDATE tbl_automobile_details SET auto_year = '".$_POST['txt_auto_year']."',category='".$cat."', auto_make = '".$make."', auto_model = '".$model."', state='".$state."', city='".$city."', auto_saledate = '".$saledate."', 
auto_odometer = '".$_POST['txt_auto_odometer']."', auto_title = '".$_POST['txt_auto_title']."', auto_damage = '".$damage."', auto_minbid = '".$_POST['txt_auto_minbid']."',auto_image1='".$filename1."',auto_image2='".$filename2."',auto_image3='".$filename3."',auto_image4='".$filename4."',auto_image5='".$filename5."',auto_video='".$vid."', auto_productid = '".$_POST['auto_id']."' ,status ='".$status."' ,actualvalue='".$avalue."' ,repaircost='".$rcost."' ,primarydamage='".$pdamage."' ,secondarydamage='".$sdamage."' ,vin='".$vin."' ,bodystyle='".$bstyle."' ,color='".$color."' ,engine='".$engine."' ,drive='".$drive."' ,cylinder='".$cylinder."' ,fuel='".$fuel."',product_key='".$keys."' , usertype='".$access."' WHERE auto_id = '".$_POST['auto_id']."'";

}

if($filename1!=="" && $filenamev!=="")
{
//echo "img".$filename;
//echo "video".$filename1;
$qry1 = "UPDATE tbl_automobile_details SET auto_year = '".$_POST['txt_auto_year']."',category='".$cat."',auto_make = '".$make."', auto_model = '".$model."', state='".$state."', city='".$city."', auto_saledate = '".$saledate."', 
auto_odometer = '".$_POST['txt_auto_odometer']."', auto_title = '".$_POST['txt_auto_title']."', auto_damage = '".$damage."', auto_minbid = '".$_POST['txt_auto_minbid']."',auto_image1='".$filename1."',auto_image2='".$filename2."',auto_image3='".$filename3."',auto_image4='".$filename4."',auto_image5='".$filename5."',auto_video='".$vid."', auto_productid = '".$_POST['auto_id']."' ,status ='".$status."' ,actualvalue='".$avalue."' ,repaircost='".$rcost."' ,primarydamage='".$pdamage."' ,secondarydamage='".$sdamage."' ,vin='".$vin."' ,bodystyle='".$bstyle."' ,color='".$color."' ,engine='".$engine."' ,drive='".$drive."' ,cylinder='".$cylinder."' ,fuel='".$fuel."',product_key='".$keys."' , usertype='".$access."' WHERE auto_id = '".$_POST['auto_id']."'";

}

if($filename1=="" && $filenamev=="")
{
$vid=$_REQUEST['vfile'];
//echo "vid".$vid;
$img1=$_REQUEST['ifile1'];
$img2=$_REQUEST['ifile2'];
$img3=$_REQUEST['ifile3'];
$img4=$_REQUEST['ifile4'];
$img5=$_REQUEST['ifile5'];
//echo "img".$img;
$qry1 = "UPDATE tbl_automobile_details SET auto_year = '".$_POST['txt_auto_year']."',category='".$cat."', auto_make = '".$make."', auto_model = '".$model."', state='".$state."', city='".$city."', auto_saledate = '".$saledate."', 
auto_odometer = '".$_POST['txt_auto_odometer']."', auto_title = '".$_POST['txt_auto_title']."', auto_damage = '".$damage."', auto_minbid = '".$_POST['txt_auto_minbid']."',auto_image1='".$filename1."',auto_image2='".$filename2."',auto_image3='".$filename3."',auto_image4='".$filename4."',auto_image5='".$filename5."',auto_video='".$vid."', auto_productid = '".$_POST['auto_id']."' ,status ='".$status."' ,actualvalue='".$avalue."' ,repaircost='".$rcost."' ,primarydamage='".$pdamage."' ,secondarydamage='".$sdamage."' ,vin='".$vin."' ,bodystyle='".$bstyle."' ,color='".$color."' ,engine='".$engine."' ,drive='".$drive."' ,cylinder='".$cylinder."' ,fuel='".$fuel."',product_key='".$keys."'  , usertype='".$access."' WHERE auto_id = '".$_POST['auto_id']."'";
}
echo $tstatus;
echo $status;
echo "access".$access;
mysql_query($qry1);
/*if($tstatus != $status )
	{
	  //$msg="Details Updated Successfully!";
	  echo 'testt';
	// $qry2="insert into tbl_bid(user_id,date_time,product_id,bid_amt) values ('".$userid."','".$date."','".$_POST['auto_id']."','".$_POST['txt_auto_minbid']."')";
//echo $qry1;
	if(mysql_query($qry2))
	{
	  $msg="Details entered successfully !";
	}

	}
	else
	{ $msg="Details entered successfully !";}
*/



/*if(isset($_POST['submit']))
{
$saledate=$_POST['sale_year']."/".$_POST['sale_month']."/".$_POST['sale_day'];
$status=$_REQUEST['txtstatus'];
$date=date("d/m/Y");
$state=$_POST['state'];
$city=$_POST['city'];
$damage=$_POST['damage'];	



$img=$_REQUEST['ifile'];
echo "img".$img;
$vid=$_REQUEST['vfile'];
echo "vid".$vid;	*/
		//echo $date;
//echo "status".$status;
//$filename = basename($_FILES['ifile']['name']);
//$filename1 = basename($_FILES['vfile']['name']);

	/*$qry1 = "UPDATE tbl_automobile_details SET auto_year = '".$_POST['txt_auto_year']."', auto_make = '".$_POST['txt_auto_make']."', auto_model = '".$_POST['txt_auto_model']."', auto_facility = '".$_POST['txt_auto_facility']."', auto_saledate = '".$saledate."', auto_odometer = '".$_POST['txt_auto_odometer']."', auto_title = '".$_POST['txt_auto_title']."', auto_damage = '".$_POST['txt_auto_damage']."', auto_minbid = '".$_POST['txt_auto_minbid']."', auto_image = '".$filename."', auto_video = '".$filename1."', auto_productid = '".$_POST['txt_auto_productid']."' ,status ='".$status."' WHERE auto_id = '".$_POST['auto_id']."'";*/
	
	/*$qry1 = "UPDATE tbl_automobile_details SET auto_year = '".$_POST['txt_auto_year']."', auto_make = '".$_POST['txt_auto_make']."', auto_model = '".$_POST['txt_auto_model']."', state='".$state."', city='".$city."', auto_saledate = '".$saledate."', auto_odometer = '".$_POST['txt_auto_odometer']."', auto_title = '".$_POST['txt_auto_title']."', auto_damage = '".$damage."', auto_minbid = '".$_POST['txt_auto_minbid']."',auto_image='".$img."',auto_video='".$vid."', auto_productid = '".$_POST['auto_id']."' ,status ='".$status."' WHERE auto_id = '".$_POST['auto_id']."'";

	if(mysql_query($qry1))
	{
	  //$msg="Details Updated Successfully!";
	  
	 $qry2="insert into tbl_bid(user_id,date_time,product_id,bid_amt) values ('".$userid."','".$date."','".$_POST['auto_id']."','".$_POST['txt_auto_minbid']."')";
//echo $qry1;
	if(mysql_query($qry2))
	{
	  $msg="Details entered successfully !";
	}

	}
	else
	{ $msg="Error in SQL: ". mysql_error();}*/
//}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Admin: Update Auction</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
<!--
.style1 {color: #333333}
.style2 {color: #FF0000}
-->
</style>
</head>

<body>
<table width="1009" border="1" align="center">
  <tr>
    <td width="999" bgcolor="#F2E7E1"><? include("index.html"); ?> &nbsp;</td>
  </tr>
  <tr>
    <td height="146" bgcolor="#E4EDEC"><div align="center"><span style=" border:#000000; width:550px;  height:290px; overflow:auto">Details Updated Successfully!</span></div></td>
  </tr>
</table>
</body>
</html>
