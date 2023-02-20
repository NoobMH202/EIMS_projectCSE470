<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index.css">
<!--   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
</head>
<body>

<?php

	if ($_SERVER['REQUEST_METHOD']=='POST'){
		$user_email=$_POST['email'];

			$servername = "localhost";
			$username = "root";
			$password = "";
			$database = "fahimdb";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $database);

			// Check connection
			if (!$conn) {
			  die("Connection failed: " . mysqli_connect_error());
			}
			//print "Connected successfully";
			else{
			$sql= "INSERT INTO `user info` (`user_email`) VALUES ('$user_email')";
			$result=mysqli_query($conn,$sql);				

			


			if ($result){
				print 
				'<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong> Success! </strong> Your entry has been submitted successfully!
				</div> ';
			}
			else{
				print 'the record was not inserted successfully due to this-->' .mysqli_error($conn);
			}
		}
	}

?>

	<form action="/fahimphp/conn.php" method="post">
	  <div class="mb-3 mt-3">
	    <label for="email" class="form-label">Email:</label>
	    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
	  </div>
	  <div class="mb-3">
	    <label for="pwd" class="form-label">Password:</label>
	    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
	  </div>
	  <div class="form-check mb-3">
	    <label class="form-check-label">
	      <input class="form-check-input" type="checkbox" name="remember"> Remember me
	    </label>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>	

</body>
</html>


