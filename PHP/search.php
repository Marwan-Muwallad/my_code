<?php
	include "db_conn.php";

	if (isset($_POST['search_by_id'])) {
		
		$id = $_POST['get_id'];
		$sql = "SELECT * FROM users WHERE id= '$id' ";
		$result = mysqli_query($conn, $sql);
	}
?>