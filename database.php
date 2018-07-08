<?php

$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "root";
$dbname = "SMS";

#This will create connection with db using mysqli
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conn->connect_error){
	die ("connection failed" . $conn->connect_error);
}

?>