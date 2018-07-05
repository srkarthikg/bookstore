<?php
include_once("db.php");
//session_start();
if(isset($_POST['btn-save'])) {
	$user_name = $_POST['user_name'];
	$user_password = $_POST['password'];
	$user_password_final = md5($user_password);
	$sql = "SELECT * FROM tbl_users WHERE user_name='$user_name' AND user_password = '$user_password_final'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	$row = mysqli_fetch_assoc($resultset);
	//print_r($row['user_id']);
	if ( $resultset->num_rows == 1)
	{
		$_SESSION['user_id'] = $row['user_id'];
		echo "loginsuccess";
		
	}
	else{
		echo "1";
	}
}
?>