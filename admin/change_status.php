<?php
if(isset($_POST['dataId'])  && $_POST['dataId']!=''){
    include ('function.php');
    $dataId = $_POST['dataId'];
    $status = $_POST['status'];
    $sql = "update tb_notice set status='$status' where notice_id='$dataId'";
    $res= mysqli_query($conn,$sql)or die("Error to delete the enqiry".mysqli_error($conn));
    $affected_row = mysqli_affected_rows($conn);
    if($affected_row>0){
    echo json_encode(array("status"=>'success','message'=>'Status Changed Successfully.'));
    }
    else{
        echo json_encode(array("status"=>'error','message'=>'Something Went Wrong. Try Again.'));
    
    }
}


?>