<?php session_start();
if(!isset($_SESSION['so_cuserId'])) 
{
header("Location:index.php");
}
$user=$_SESSION['so_cuserId'];
//echo "user is::".$user;
include("conn.php");
// for image upload
include('SimpleImage.php');

// for image upload
 if( $_FILES['ifile1']['name'])
{
$filename=$_FILES['ifile1']['name'];
$source=$_FILES['ifile1']['tmp_name'];

   $newname =dirname(__FILE__).'/image_file/'.$filename;
	  $newname2 =dirname(__FILE__).'/image_files/'.$filename;
if(move_uploaded_file($source, $newname))
{
//echo "<div class='style4'>"."Image Uploaded"."</div>";
}
$image = new SimpleImage();
   $image->load($newname);
   $image->resize(115,115);
   $image->save($newname2);
  } 


 if( $_FILES['ifile2']['name'])
{
$filename=$_FILES['ifile2']['name'];
$source=$_FILES['ifile2']['tmp_name'];

   $newname =dirname(__FILE__).'/image_file/'.$filename;
	  $newname2 =dirname(__FILE__).'/image_files/'.$filename;
if(move_uploaded_file($source, $newname))
{
//echo "<div class='style4'>"."Image Uploaded"."</div>";
}
$image = new SimpleImage();
   $image->load($newname);
   $image->resize(115,115);
   $image->save($newname2);
  } 
   if( $_FILES['ifile3']['name'])
{
$filename=$_FILES['ifile3']['name'];
$source=$_FILES['ifile3']['tmp_name'];

   $newname =dirname(__FILE__).'/image_file/'.$filename;
	  $newname2 =dirname(__FILE__).'/image_files/'.$filename;
if(move_uploaded_file($source, $newname))
{
//echo "<div class='style4'>"."Image Uploaded"."</div>";
}
$image = new SimpleImage();
   $image->load( $newname);
   $image->resize(115,115);
   $image->save($newname2);
  } 
  
   if( $_FILES['ifile4']['name'])
{
$filename=$_FILES['ifile4']['name'];
$source=$_FILES['ifile4']['tmp_name'];

   $newname =dirname(__FILE__).'/image_file/'.$filename;
	  $newname2 =dirname(__FILE__).'/image_files/'.$filename;
if(move_uploaded_file($source, $newname))
{
//echo "<div class='style4'>"."Image Uploaded"."</div>";
}
$image = new SimpleImage();
   $image->load($newname);
   $image->resize(115,115);
   $image->save($newname2);
  } 
  
   if( $_FILES['ifile5']['name'])
{
$filename=$_FILES['ifile5']['name'];
$source=$_FILES['ifile5']['tmp_name'];

   $newname =dirname(__FILE__).'/image_file/'.$filename;
	  $newname2 =dirname(__FILE__).'/image_files/'.$filename;
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
$test="test";

if((!empty($_FILES["vfile"])) && ($_FILES['vfile']['error'] == 0)) {
  //Check if the file is JPEG image and it's size is less than 350Kb
  $test="test";
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
     $msg= "v:Error: Only .jpg, .gif, .png images under 750Kb are accepted for upload";
  }
} else
 {
 $msg= " "; 
}
if(isset($_POST['submit']))
{
$saledate=$_POST['timestamp'];
//echo "saledate".$saledate;

/*
 $sql="Select * from categories where id='".$_POST['cat']."' "; 
		  $res=mysql_query($sql) or die(mysql_error()) ;
		  $row=mysql_fetch_array($res);*/
$category=$_POST['cat'];


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



/*$sql="Select * from subcat where subid='".$_POST['txt_auto_make']."' "; 
		  $res=mysql_query($sql) or die(mysql_error()) ;
		  $row=mysql_fetch_array($res);
$make=$row['subname'];*/
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
$usertype=$_POST['user'];

//echo "cat".$category;
//echo "make".$make;
$state=$_POST['state'];
$city=$_POST['city'];
$filename1 = basename($_FILES['ifile1']['name']);
$filename2 = basename($_FILES['ifile2']['name']);
$filename3 = basename($_FILES['ifile3']['name']);
$filename4 = basename($_FILES['ifile4']['name']);
$filename5 = basename($_FILES['ifile5']['name']);

$filenamev = basename($_FILES['vfile']['name']);
$stat="A";
$uid=$_POST['uid'];
//echo "userid".$uid;
  $query3="select userName from cuser where uid='".$uid."'";
	           $result2=mysql_query($query3);
         
            $row2=mysql_fetch_array($result2);
			$un = $row2['userName'];
			
 
/*//echo "uid".$un;
 $sql="Select * from tbl_automobile_make where auto_id='".$_POST['txt_auto_model']."' "; 
		  $res=mysql_query($sql) or die(mysql_error()) ;
		  $row=mysql_fetch_array($res);
          $model=$row['auto_make'];*/



$qry1="insert into tbl_automobile_details(userId,auto_year,category,auto_make,auto_model,state,city,auto_facility,auto_saledate,auto_odometer,auto_title,auto_damage,auto_minbid,auto_image1,auto_image2,auto_image3,auto_image4,auto_image5,auto_video,status,actualvalue,repaircost,primarydamage,secondarydamage,vin,bodystyle,color,engine,drive,cylinder,fuel,product_key,timstamp,usertype) values ('".$un."','".$_POST['txt_auto_year']."','".$category."','".$make."','".$model."','".$state."','".$city."',    '".$_POST['txt_auto_facility']."','".$saledate."','".$_POST['txt_auto_odometer']."','".$_POST['titleGroupCode']."','".$damage."','".$_POST['txt_auto_minbid']."',    '".$filename1."','".$filename2."','".$filename3."','".$filename4."','".$filename5."','".$filenamev."','".$stat."','".$avalue."','".$rcost."','".$pdamage."',    '".$sdamage."','".$vin."','".$bstyle."','".$color."','".$engine."','".$drive."','".$cylinder."','".$fuel."','".$keys."',SYSDATE(),'".$usertype."')";

//echo "query is::".$qry1;
	if(mysql_query($qry1))
	{
	 $qry3="select * from tbl_automobile_details order by auto_id DESC LIMIT 0,1";
	  //echo "query is::".$qry3; 
	  $result1=mysql_query($qry3);
			 if($row1=mysql_fetch_array($result1))
		 {
			 $val=$row1['auto_id'];
			// echo "value1".$val;
			 $dis="ABC".$val;
			 //echo $dis;
			 $disp="<b>Your Stock No is</b>  : ".$dis;
			 
			 $q="update tbl_automobile_details SET stockno = '".$dis."' , auto_productid= '".$val."' where auto_id='".$val."' ";
			 if(mysql_query($q))
	{
             $msg="Details entered successfully !";
   }
   }
	}
}

?> 


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Website</title>


</head>

<body>
<table width="907" border="1" align="center">
  <tr>
    <td><? include ("index.html"); ?></td>
  </tr>
  <tr>
    <td height="57" bgcolor="#E4EDEC"><div align="center">
      <?php 
						  echo $disp;
		echo "<br>";echo "<br>";
						  
						  
						  echo $msg;
						  echo $filename;
						  echo $newname;?>
    </div>    </td>
  </tr>
</table>
</body>
</html>
