<?php
if(isset($_POST['contact-btn']) && $_POST['contact-btn']=='Submit')
{
include('admin/function.php');
extract($_POST);

$insert_sql = "insert into tb_enquiry (name,subject,email,mobile,message) values('$name','$subject','$email','$mobile','$message')";
$ins_res = mysqli_query($conn,$insert_sql) or die("Error to insert in enquiry".mysqli_error($conn));
if(mysqli_affected_rows($conn)>0){
	
	//echo mysqli_insert_id($conn); // returns inserted row primary key (Id)
	echo "<script>
	alert('Your Data Inserted successfully.');
	window.location='contact-us.php';
	</script>";
}else {
	echo "<script>
	alert('Something went wrong');
	window.location='contact-us.php';
	</script>";
}
}else 
{
	echo "<script>
	window.location='contact-us.php';
	</script>";
}
?>