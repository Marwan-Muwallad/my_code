<?php 
 if (isset($_GET['id'])) {
 	include "db_conn.php";

 	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM users WHERE id=$id";
 	$result = mysqli_query($conn, $sql);

 	if (mysqli_num_rows($result) > 0) {
 		$row = mysqli_fetch_assoc($result);
 	}else{
 		header("Location: read.php");
 	
 	}
}elseif (isset($_POST['update'])) {
	include "../db_conn.php";

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
	$phonenumber = validate($_POST['phone']);
	$password = validate($_POST['password']);
	$id = validate($_POST['id']);


	if(empty($name)){
		header("location: ../update.php?id=$id&error=Name is required");
	}elseif (empty($email)) {
		header("location: ../update.php?id=$id&error=Email is required");
	}elseif (empty($phonenumber)) {
		header("location: ../update.php?id=$id&error=Phone Number is required");
	}elseif (empty($password)) {
		header("location: ../update.php?id=$id&error=Passeword is required");
	}else{
		$sql = "UPDATE users
				SET name='$name', email='$email', phonenumber='$phonenumber', password='$password'
				WHERE id=$id ";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			header("location: ../index.php?success=successfully Updated");
		}else{
		header("location: ../update.php?id=$id&error=Unknown error occured&$user_data");
		}
	}
}else{
	header("Location: index.php");
}

if(isset($_POST['close']))
     header("location: ../index.php");
 