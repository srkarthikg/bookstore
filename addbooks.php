<?php
include_once("db.php");
if(isset($_POST['btn-save']))
{
	$book_title = $_POST['book_title'];
	$isbn = $_POST['isbn'];
	$author = $_POST['author'];
	$image = $_POST['image'];
	$description = $_POST['description'];
	$joining_date 	= date('Y-m-d H:i:s');
	$user_id = $_SESSION['user_id'];
	//echo $book_title."-".$isbn."-".$author."-".$image."-".$description."-".$joining_date;
	$sql = "INSERT INTO tbl_books(book_title,isbn,author,image,description,joining_date,user_id) VALUES('$book_title', '$isbn', '$author', '$image','$description','$joining_date',$user_id)";
	mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);
	echo "registered";
}
?>