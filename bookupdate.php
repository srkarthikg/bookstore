<?php
include_once("db.php");
if(isset($_POST['btn-save']))
{
	$id = $_POST['id'];
	$book_title = $_POST['book_title'];
	$isbn = $_POST['isbn'];
	$author = $_POST['author'];
	$image = $_POST['image'];
	$description = $_POST['description'];
	$joining_date 	= date('Y-m-d H:i:s');
	$user_id = $_POST['user_id'];
	//echo $book_title."-".$isbn."-".$author."-".$image."-".$description."-".$joining_date;
	$sql = "UPDATE tbl_books SET book_title ='".$book_title."',isbn ='".$isbn."',author ='".$author."', image ='".$image."', description ='".$description."', joining_date ='".$joining_date."', user_id ='".$user_id."' where id =".$id."";
	mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);
	echo "updated";
}


?>