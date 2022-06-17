<?php
if(isset($_GET['id'])  && $_GET['id']!=''){
    include ('function.php');
    $video_id = $_GET['id'];
    $sql = "delete from tb_video where video_id='$video_id'";
    $res= mysqli_query($conn,$sql)or die("Error to delete the video".mysqli_error($conn));
    $affected_row = mysqli_affected_rows($conn);
    if($affected_row>0){
     echo "<script>
        alert ('Data Deleted Successfully.')
       window.location='video-gallery.php';
        </script>";
    }
    else{
        notify('Something Went Wrong!');
        redirectTo('video-gallery.php');
    
    }
}


?>