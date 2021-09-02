<?php include "php/read.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Satit|PSU</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<div class="container">
		<div class="box">
			<h4 class="display-5 text-center">Satit PSU Users</h4><br>
			<?php if (isset($_GET['success'])) { ?>
		 	<div 	class="alert alert-success" 
		 			role="alert">
		 		<?php echo $_GET['success']; ?>		
		 	</div>
		 	<?php } ?>
		 	<div class="d-grid gap-2  mx-auto">
				 	<a class="btn btn-outline-primary " href="search.php" class="link-primary">Search User</a>
				</div>
			<?php if (mysqli_num_rows($result)) { ?>

			

			<table class="table caption-top">
				  <caption class="text-right" >List of users</caption>
				  <thead>
				    <tr>
				      <th scope="col">#S.No</th>
				      <th scope="col">Name</th>
				      <th scope="col">Email Address</th>
				      <th scope="col">Phone Number</th>
				      <th scope="col">Password</th>
				      <th scope="col">Action</th>


				    </tr>
				  </thead>
				  <tbody>
				  	<?php
				  		$i = 0;
				  		while ($rows = mysqli_fetch_assoc($result)) {
				  		$i++;
				  	 ?>
				    <tr>
				      <th scope="row"><?=$i?></th>
				      <td><?=$rows['name']?></td>
				      <td><?php echo $rows['email']; ?></td>
				      <td><?php echo $rows['phonenumber']; ?></td>
				      <td><?php echo $rows['password']; ?></td>
				      <td>	<a 	href="update.php?id=<?=$rows['id']?>" 
				      			class="btn btn-outline-success">Update</a>
				     		
				     		<a 	href="php/delete.php?id=<?=$rows['id']?>" 
				      			class="btn btn-outline-danger">Delete</a></td>



				    </tr>
				   <?php } ?>
				  </tbody>
				</table>
				<?php } ?>
				<div class="d-grid gap-2  mx-auto">
				 	<a class="btn btn-outline-primary" href="create.php" class="link-primary">Add New User</a>
				</div> 	
		</div>
	</div>
</body>
</html>
  