<?php
include_once("db.php");
$id = $_POST["ID"];
//$id = 1;
$select_query = "Select * from tbl_books where id =".$id;
$conne = mysqli_query($conn,$select_query);
while($row = $conne->fetch_assoc()){
     $json = $row;
  }
  //print_r($json);
  //$data = $json;
//echo "<pre>"; print_r($json); exit;
/*$json_data = array(
			"data"=> $json   // total data array
			);*/
			
if($json != "")
{
	$data=$json;
}
else
{
	$data= "Wrong Details has been fetched.";
}
echo json_encode($data);


?>