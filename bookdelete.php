<?php
include_once("db.php");
$id = $_POST["ID"];
$select_query = "DELETE from tbl_books where id =".$id;
$conne = mysqli_query($conn,$select_query);
/*while($row = $conne->fetch_assoc()){
     $json = $row;
  }
  //print_r($json);
  //$data = $json;
//echo "<pre>"; print_r($json); exit;
/*$json_data = array(
			"data"=> $json   // total data array
			);*/
			
/*if($json != "")
{
	$data=$json;
}*/
$data = "success";
echo json_encode($data);
?>