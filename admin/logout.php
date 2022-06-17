<?php 
session_start();
include('function.php');
 if (isset($_SESSION["login_token"]) && $_SESSION["login_token"]!="") 
    {
    	$login_array = $_SESSION['login_token'];
    	extract($login_array);
    	$sql = "update tb_user set user_token='' where user_id='$user_id'";
    	$res = mysqli_query($conn,$sql) or die("Error to update token as null".mysqli_error($conn));
    	$_SESSION["login_token"]='';
    	session_destroy();
    	setcookie("user_token", "", time() - 3600);

    }
    else 
    {
    	$_SESSION["login_token"]='';
    	session_destroy();
    	setcookie("user_token", "", time() - 3600);
    }
    redirectTo('login.php');
?>