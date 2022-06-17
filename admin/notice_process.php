<?php
include('function.php');
if(isset($_POST['notice']) && $_POST['notice']=='notice'){
extract($_POST);
$sql="insert into tb_notice (notice_dt,notice_title,notice_body,status,created_by) values ('$notice_dt','$notice_title','$notice_body','$status','$created_by')";
$res=mysqli_query($conn,$sql) or die ('Error to saving noitice'.mysqli_error($conn));
if ($res){
    notify('Notice saved successfully');
    redirectTO('notice.php');

}
else{
    notify('Something went wrong!');
    redirectTO('notice.php');
}
}
else{
  redirectTO('notice.php');
}
?>