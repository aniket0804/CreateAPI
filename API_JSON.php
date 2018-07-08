<?php

require('database.php');

#This line tells server to allow any domain to access its resouce.
header('Access-Control-Allow-Origin: *');

#This line tells client that response will be sent in JSON encode format.
header('content-type: application/json');

#Expecting id param to receive in GET call
$id = $_GET['id'];

#Writing query to fetch info
$sql = "SELECT * FROM USER WHERE id = " . $id;

#Declaring array to store info and counter to count records
$cnt = 0;
$response = array();

$result = $conn->query($sql);

while($r = mysqli_fetch_assoc($result)){
	$response[] = $r;
	$cnt = $cnt + 1;
}

if ($cnt > 0){
	echo json_encode($response);

}else {
	$response = array(
		'id' => 0
		);
	echo json_encode($response);
}

?>