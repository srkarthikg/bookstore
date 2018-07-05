<?php
include_once("db.php");
if(isset($_POST['btn-save']))
{
	$user_name = $_POST['user_name'];
	$user_email = $_POST['user_email'];
	$user_password = $_POST['password'];
	$user_password_final = md5($user_password);
	$joining_date 	= date('Y-m-d H:i:s');
	$sql = "SELECT user_email FROM tbl_users WHERE user_email='$user_email'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	$row = mysqli_fetch_assoc($resultset);
	if(!$row['email']){
		$sql = "INSERT INTO tbl_users(user_name,user_email,user_password,joining_date) VALUES('$user_name', '$user_email', '$user_password_final', '$joining_date')";
		mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);
		echo "registered";
	} else {
	echo "1";
	}
}
?>