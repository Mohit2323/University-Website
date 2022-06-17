<?php

if(isset($_POST["action"]) && $_POST["action"]= 'resetPassword')
   {
       include("function.php");

    extract($_POST);
    $sql= "select * from tb_user where user_email= '$data'";
    $res=mysqli_query($conn,$sql) or die ("Error in select user in forget password".mysqli_error());
    $num=mysqli_num_rows($res) ;
    if ($num==1) {
        $row = mysqli_fetch_assoc($res);
        $new_pass=rand(10000,100000);
        $password = md5($new_pass);
        $user_id = $row['user_id'];
        $up_sql = "update tb_user set user_password='$password' where user_id='$user_id'";
        $resp = mysqli_query($conn,$up_sql);
        $affected_row = mysqli_affected_rows($conn);
        if($affected_row>0){
            $name = $row['user_fullname'];
            $msg="Dear $name your new password is: $new_pass.";
            $noreply ="From : Test<noreply@abc.com>";
            //mail($data,"New Password",$msg,$noreply);
           echo json_encode(array('status'=>'success','message'=>'Your passwrod has been Sent to your registered email.','password'=>$new_pass));
        }
        else {
            echo json_encode(array('status'=>'error','message'=>'Sorry! Something went wrong. Try again.'));
        }
    }else 
    {
        echo json_encode(array('status'=>'error','message'=>'Sorry! This email does not exist.'));
    }

}
?>