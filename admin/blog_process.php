<?php
include('function.php');
$filename = imageUpload(null,null,'image_url');
if(isset($_POST['blog']) && $_POST['blog']=='blog'){
    extract($_POST);
    $sql="insert into tb_blog (blog_dt,blog_title,blog_body,image_url,status,created_by) values('$blog_dt','$blog_title','$blog_body','$filename','$status','$created_by')";
    $res=mysqli_query($conn,$sql)or die ('Error to publish blog'.mysqli_error($conn));
    if ($res){
        notify('Blog saved successfully');
        redirectTO('blog.php');
    
    }
    else{
        notify('Something went wrong!');
        //redirectTO('blog.php');
    }
    }
    else{
      //redirectTO('blog.php');
    }
?>