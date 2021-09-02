<?php  

$name = "localhost";
$uname = "root";
$password = "";

$db_name = "crud_table";

$conn = mysqli_connect($name, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}