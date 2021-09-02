<?php 
 
if (isset($_POST['create'])){
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

	$user_data = 'name='.$name. '&email='.$email. '$phone='.$phonenumber. '$password='.$password;

	if(empty($name)){
		header("location: ../create.php?error=Name is required&$user_data");
	}elseif (empty($email)) {
		header("location: ../create.php?error=Email is required&$user_data");
	}elseif (empty($phonenumber)) {
		header("location: ../create.php?error=Phone Number is required&$user_data");
	}elseif (empty($password)) {
		header("location: ../create.php?error=Passeword is required&$user_data");
	}else{
		$sql = "INSERT INTO users(name,email,phonenumber,password) 
				VALUES('$name','$email','$phonenumber','$password')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			header("location: ../index.php?success=successfully created");
		}else{
		header("location: ../index.php?error=Unknown error occured&$user_data");
		}
	}


}

if(isset($_POST['close']))
     header("location: ../index.php");