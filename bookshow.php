<?php
include_once("db.php");

$user_id = $_SESSION['user_id'];
//echo $user_id;

$query = "SELECT * from tbl_books where user_id=$user_id";
$conne = mysqli_query($conn,$query);
while($row = $conne->fetch_assoc()){
     $json[] = array(
                  'id'=>$row['id'],
                  'book_title'=>$row['book_title'],
					'isbn'=>$row['isbn'],
                    'author'=>$row['author'],
					'image'=>$row['image'],
					'description'=>$row['description'],
					'button'=>'<button id="'.$row['id'].'" class="updateuser" onclick="updateuser('.$row['id'].')">Edit</button>|<button id="'.$row['id'].'" class="delete" onclick="deleteuser('.$row['id'].')">Delete</button>'
                );
  }
  //print_r($json);
  //$data = $json;
//echo "<pre>"; print_r($json); exit;
$json_data = array(
			"data"=> $json   // total data array
			);
echo json_encode($json_data);


?>