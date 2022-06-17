<?php 
session_start();
include("function.php");
if(isset($_POST["login"]) && $_POST["login"]=="login"){
    extract($_POST);
    $user_password=md5($password);
    $sql="select * from tb_user where user_email='$email' and user_password='$user_password'";
    $res=mysqli_query($conn,$sql) or die ("Error in selecting user in login process".mysqli_error());
    $num=mysqli_num_rows($res);
    if ($num==1) {
        $row= mysqli_fetch_assoc($res);
        
        $user_id=$row["user_id"];
        $user_token=md5($user_id);    
        $arr=array("user_id"=>$user_id,"user_token"=>$user_token);
        setcookie("login_token",$user_id,time()+3600,"/");
        $_SESSION["login_token"]=$arr;
        $dt = date('Y-m-d H:i:s');
        $update_query="update tb_user set user_token='$user_token', updated_at='$dt', status='ACTIVE' where user_id='$user_id'";
        $resp=mysqli_query($conn,$update_query) or die ("Error in update token in login process".mysqli_error($conn));
        $aff_row=mysqli_affected_rows($conn);
        if ($aff_row==1) 
        {
            redirectTo("index.php");
        } else {
            notify('Invalid credentinals');
            redirectTo("login.php");
            
        }
        

    } else {
        notify('Invalid credentinals');
        redirectTo("login.php");
    }
    
}else {
    notify('Invalid credentinals');
    redirectTo("login.php");  
}
?>