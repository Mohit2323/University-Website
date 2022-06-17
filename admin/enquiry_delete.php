<?php
if(isset($_GET['id'])  && $_GET['id']!=''){
    include ('function.php');
    $enquiry_id = $_GET['id'];
    $sql = "delete from tb_enquiry where enquiry_id='$enquiry_id'";
    $res= mysqli_query($conn,$sql)or die("Error to delete the enqiry".mysqli_error($conn));
    $affected_row = mysqli_affected_rows($conn);
    if($affected_row>0){
     echo "<script>
        alert ('Data Deleted Successfully.')
       window.location='enquiry.php';
        </script>";
    }
    else{
        notify('Something Went Wrong!');
        redirectTo('enquiry.php');
    
    }
}


?>