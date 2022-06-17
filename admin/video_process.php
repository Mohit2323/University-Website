<?php
include("function.php");
if(isset($_POST['video']) && $_POST['video']!= ''){
$target_dir = "uploads/";
$rand = rand(1000,10000);
$target_file = $target_dir .$rand.$_FILES["video_url"]["name"];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
$file_type = $_FILES['video_url']['type'];
// allowed formats
if($file_type=='video/mp4' or $file_type=='video/mkv' or $file_type=='video/mpeg'){
   
// Check if file already exists
if (file_exists($target_file)) {
    if(unlink($target_file)){
        $uploadOk = 1;
    }
  else 
  {
    $uploadOk = 0;
  }
}

// Check file size
if ($_FILES["video_url"]["size"] > 50000000) {
  notify("Sorry, your file is too large.");
  $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  notify( "Sorry, your file was not uploaded.");
  redirectTO('video-gallery.php');
// if everything is ok, try to upload file
} else {
    
  if (move_uploaded_file($_FILES["video_url"]["tmp_name"], $target_file)) {
    $msg=  "The file ". htmlspecialchars( basename( $_FILES["video_url"]["name"])). " has been uploaded.";
    extract($_POST);
    $file_name = $rand.$_FILES['video_url']['name'];
    $sql= "insert into tb_video (video_dt,video_url,video_name,status,created_by) values('$video_dt','$file_name','$video_name','$status','$created_by')";
    $res =mysqli_query($conn,$sql) or die("Error to insert in video".mysqli_error($conn));
    if($res==1){
        notify($msg);
        redirectTO('video-gallery.php');
    }
    else{
        notify("Something went wrong! Try Again");
  }

  } else {
    notify("Sorry, there was an error uploading your file.");
  }
}
}
else {
    notify("Sorry, only MP4, MKV, MPG & MPV files are allowed.");
    redirectTO('video-gallery.php');
}
}
?>