<?php
if(isset($_GET['id'])  && $_GET['id']!=''){
    include ('function.php');
    $image_id = $_GET['id'];
    $sql = "delete from tb_gallery where image_id='$image_id'";
    $res= mysqli_query($conn,$sql)or die("Error to delete the image".mysqli_error($conn));
    $affected_row = mysqli_affected_rows($conn);
    if($affected_row>0){
     echo "<script>
        alert ('Data Deleted Successfully.')
       window.location='image-gallery.php';
        </script>";
    }
    else{
        notify('Something Went Wrong!');
        redirectTo('image-gallery.php');
    
    }
}


?>