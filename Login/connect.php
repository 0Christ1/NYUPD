<?php

// To use PDO to connect to a database, you need the following information:
$servname = "localhost";
$username = "root";
$password = "";
$dbname = "Project3";

// database connection
$conn = mysqli_connect($servname, $username, $password, $dbname);
if($conn){
	echo 'Connection successed';
}else{
	echo 'Connection failed!';
}


?>