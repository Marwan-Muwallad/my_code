<?php include('./php/search.php'); ?>

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
			<h4 class="display-5 text-center">Search Users</h4><br>


			<div class="form-group text-center">
			<form style="width: 750px; border-radius: 10px;" action="" method="post">
				<div class=" mb-2">
					<input type="text" name="get_id" class="form-control" placeholder="Enter ID" required>
				</div>
				<button type="submit" name="search_by_id" class="btn btn-secondary">Search</button>
			</form>

			<!-- <?php if ($rows = mysqli_num_rows($result) ) { ?> -->
			</div>


			<!-- <div class="table-responsive"> -->
				
				<table class="table caption-top">
					  <caption class="text-right" >List of users</caption>
					  <thead>
					    <tr>
					      <th scope="col">#S.No</th>
					      <th scope="col">Name</th>
					      <th scope="col">Email Address</th>
					      <th scope="col">Phone Number</th>
					      <th scope="col">Password</th>
					      


					    </tr>
					  </thead>
					  <tbody>
					  	<?php 
					  		$i = 0;
					  		while ($rows = mysqli_fetch_array($result)) 	{
					  		$i++;
					  		
					  	 ?>
					    <tr>
					      <th scope="row"><?=$i?></th>
					      <td><?=$rows['name']?></td>
					      <td><?php echo $rows['email']; ?></td>
					      <td><?php echo $rows['phonenumber']; ?></td>
					      <td><?php echo $rows['password']; ?></td>
					    </tr>
					   <?php   } ?>
					   			
						
							
					  </tbody>
				</table>
			<?php } ?>
				<div class="d-grid gap-2  mx-auto">
				 	<a class="btn btn-outline-primary" href="index.php" class="link-primary">Close</a>
				</div> 	
		</div>
	</div>
</body>
</html>