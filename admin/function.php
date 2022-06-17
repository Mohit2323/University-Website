<?php
include("connection.php");
function is_login(){
    if (isset($_SESSION["login_token"]) && $_SESSION["login_token"]!="") 
    {
    	$login_array = $_SESSION['login_token'];
    	extract($login_array);
    	$user = get_array('tb_user',$user_id);
    	if($user['user_token']==$user_token)
    	{
        return true;
    	}
    	else 
    	{
    		return false;
    	}
    
    }
    else 
    {
        return false;
    }
}
function get_array($table,$arr){
	global $conn;
	$sql = "select * from $table where $arr";
	$res = mysqli_query($conn,$sql) or die("Error in tableinfo funciton".mysqli_error($conn));
	$num = mysqli_num_rows($res);
	if($num>0)
	{
		$row = mysqli_fetch_assoc($res);
		return $row;

	}
	else {
		return error_get_last();
	}
}
function redirectTo($page){
	echo "<script>
	window.location='$page';
	</script>";
}
function notify($msg){
	echo"<script>
	alert('$msg');
	</script>";

}
function imageUpload($target_dir=null,$uid=null,$image_url){
	if($target_dir==null)
	{
		$target_dir = "uploads/";
	}
	if($uid==null)
	{
		$uid = rand(1000000,100000000);
	}
$target_file = $target_dir .$uid.$_FILES[$image_url]["name"];
$uploadOk = 1;
$file_name = $uid.$_FILES[$image_url]['name'];
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

  $check = getimagesize($_FILES[$image_url]["tmp_name"]);
  if($check !== false) {
  //  echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    notify( "File is not an image.");
    $uploadOk = 0;
  }

// Check if file already exists
if (file_exists($target_file)) {
    if(unlink($target_file)){
        $uploadOk = 1;
    }
  //notify("Sorry, file already exists.");
  else 
  {
    $uploadOk = 0;
  }
}

// Check file size
if ($_FILES[$image_url]["size"] > 300000) {
  notify("Sorry, your file is too large.");
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  notify("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  notify( "Sorry, your file was not uploaded.");
  //redirectTO('image-gallery.php');
// if everything is ok, try to upload file
} else {
    
  if (move_uploaded_file($_FILES[$image_url]["tmp_name"], $target_file)) {
    $msg=  "The file ". htmlspecialchars( basename( $_FILES[$image_url]["name"])). " has been uploaded.";
//    notify($msg);
  } else {
    notify("Sorry, there was an error uploading your file.");
  }
}
return $file_name;
}
//redirectTo('login.php');
//echo md5("@pubg2323"); 
//print_r($_SESSION);  
?>