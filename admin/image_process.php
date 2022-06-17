<?php 
include('function.php');
if(isset($_POST['image']) && $_POST['image']!= ''){
$filename = imageUpload(null,null,'image_url');
// $target_dir = "uploads/";
// $rand = rand(1000,10000);
// $target_file = $target_dir .$_FILES["image_url"]["name"];
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if(isset($_POST["image"])) {
//   $check = getimagesize($_FILES["image_url"]["tmp_name"]);
//   if($check !== false) {
//   //  echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     notify( "File is not an image.");
//     $uploadOk = 0;
//   }
// }

// // Check if file already exists
// if (file_exists($target_file)) {
//     if(unlink($target_file)){
//         $uploadOk = 1;
//     }
//   //notify("Sorry, file already exists.");
//   else 
//   {
//     $uploadOk = 0;
//   }
// }

// // Check file size
// if ($_FILES["image_url"]["size"] > 300000) {
//   notify("Sorry, your file is too large.");
//   $uploadOk = 0;
// }

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   notify("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
//   $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   notify( "Sorry, your file was not uploaded.");
//   redirectTO('image-gallery.php');
// // if everything is ok, try to upload file
// } else {
    
//   if (move_uploaded_file($_FILES["image_url"]["tmp_name"], $target_file)) {
//     $msg=  "The file ". htmlspecialchars( basename( $_FILES["image_url"]["name"])). " has been uploaded.";
// //    notify($msg);
//   } else {
//     notify("Sorry, there was an error uploading your file.");
//   }
// }
extract($_POST);
$sql = "insert into tb_gallery (image_dt,image_url,image_name,status,created_by) values('$image_dt','$filename','$image_name','$status','$created_by')";
$res = mysqli_query($conn,$sql)or die("Error inserting into image process".mysqli_error($conn));
if($res==1){
  notify("Image saved succesfully");
  redirectTO("image-gallery.php");
}
else{
  notify("Something Went Wrong!");
  redirectTO("image-gallery.php");
}
}

?>

