<?php
if(isset($_GET['id']) && $_GET['id']!=''){
    include('function.php');
    $notice_id=$_GET['id'];
    $sql="delete from tb_notice where notice_id='$notice_id'";
    $res=mysqli_query($conn,$sql) or die('Error deleting the notice'.mysqli_error($conn));
    $affected_row = mysqli_affected_rows($conn);
    if($affected_row>0){
        echo "<script>
        alert ('Data Deleted Successfully.')
       window.location='notice.php';
        </script>";
    }
    else {
        notify('Somethimg Went Wrong!');
        redirectTO('notice.php');
    }
}




?>