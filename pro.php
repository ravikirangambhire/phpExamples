<?php 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'test');
// Check connection
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}



$sql = "SELECT * FROM doctors";
$result = $mysqli->query($sql);

print_r($result);
while($row = $result->fetch_array(MYSQLI_ASSOC)){
  $data[] = $row;
}


$results = ["sEcho" => 1,
        	"iTotalRecords" => count($data),
        	"iTotalDisplayRecords" => count($data),
        	"aaData" => $data ];


echo json_encode($results);

 
?>