<?php include('./php/create.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<div class="container">
		
	<form 	action="php/create.php" 
				method="post">

			<h4 class="display-4 text-center">Add New User</h4><hr><br>
			<?php if (isset($_GET['error'])) { ?>
		 	<div 	class="alert alert-danger" 
		 			role="alert">
		 		<?php echo $_GET['error']; ?>		
		 	</div>
		 	<?php } ?>

		  <div class="mb-3">
		    <label 	for="name" class="form-label">Name</label>
		    <input 	type="text" 
		    		class="form-control" 
		    		id="name"
		    		name="name"
		    		value="<?php if(isset($_GET['name']))
		    						echo($_GET['name']); ?>"  
		    		placeholder="Enter Name">
		    
		  </div>

		  <div class="mb-3">
		    <label 	for="email" class="form-label">Email Address</label>
		    <input 	type="email" 
		    		class="form-control" 
		    		id="email"
		    		name="email"  
		    		value="<?php if(isset($_GET['email']))
		    						echo($_GET['email']); ?>"
		    		placeholder="Enter Email Address">
		    
		  </div>

		  <div class="mb-3">
		    <label 	for="phone" class="form-label">Phone Number</label>
		    <input 	type="number" 
		    		class="form-control" 
		    		id="phone" 
		    		name="phone" 
		    		value="<?php if(isset($_GET['phone']))
		    						echo($_GET['phone']); ?>"
		    		placeholder="Enter Phone Number">
		    
		  </div>
		  <div class="mb-3">
		    <label 	for="name" class="form-label">Password</label>
		    <input 	type="password" 
		    		class="form-control" 
		    		id="password"
		    		name="password"
		    		value="<?php if(isset($_GET['password']))
		    						echo($_GET['password']); ?>"  
		    		placeholder="Enter Password" >
		    
		  </div>
		 
			 <button 	type="submit" 
			  			class="btn btn-primary"
			  			name="create">Create</button>
			  <button 	type="submit" 
			  			class=" btn btn-secondary" 
			  			name="close">Close</button>
		</form>

	</div>
</body>
</html>