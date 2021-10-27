
<?php 

include 'connect.php';

?>

<?php 

$username = "";
$password = "";
$errors = array();

if (isset($_POST['register'])) {
	
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    
    //check these conditions

    if (empty($username) && !is_numeric($username)) {
    	array_push($errors, "Username Required please and in words");
    }
      if (empty($email)) {
    	array_push($errors, "Email is Required please");
    }
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    	array_push($errors, "Valid Email Required please");
    }
      if (empty($password)) {
    	array_push($errors, "password Required please");
    }
      if (empty($phone)) {
    	array_push($errors, "Phone Required please");
    }

    //save user
     
     if (count($errors) == 0) {
        	
        	$sql = "INSERT INTO adminusers (username, email, phone, password) VALUES('$username', '$email',  '$phone', '$password')";

            $result = mysqli_query($conn, $sql);
            if ($result) {
            	
            //	echo ' <div class="container mt-3">
  	       //<div class="alert alert-success alert-dismissible fade show" role="alert">
  		    //<p class="fs-4 text-center">You have successfully signed up.
  		   //Click <strong>Login Link</strong></p>
        //<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  	   //</div>
      //</div>';

              header('location:login.php');
            }

        }   

}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>signup</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">

	<style type="text/css">
		body{
			background: #ffffca;
		}

		.size{
			width: 600px;
			height: 600px;
		}

		.error
       {
          margin: 0px auto;
          border: 1px solid #a94442;
          background: #f2dede;
          padding: 10px;
          border-radius: 10px;
        }
	</style>
</head>
<body>

  <div class="container size">
  	<div class="row">
  		<div class="col ">
  			<div class="card m-5">
  				<div class="card-header bg-success text-center">
  					<img src="../images/logo.jpg" style=" width:60px; height: 40; " >
  				</div>
  				<div class="card-body">
  					<h5 class="display-5 fw-bold text-center">SignUp</h5>
  					

  					<form method="post" action="register.php">

                         <?php if(count($errors) > 0): ?>
                         	<div class="error">
                         		<?php foreach($errors as $error): ?>
                         		<p class="text-danger fw-bold"><?php echo $error; ?></p>
                         		<?php endforeach ?>
                         	</div>
                         <?php endif ?>

  						<div class="mb-3">
  							<label class="form-label">User Name</label>
  							<input type="text" name="username" class="form-control" autocomplete="off" >
  						</div>

  						<div class="mb-3">
  							<label class="form-label">Email</label>
  							<input type="email" name="email" class="form-control">
  						</div>

  						<div class="mb-3">
  							<label class="form-label">Password</label>
  							<input type="password" name="password" class="form-control" autocomplete="off">
  						</div>

  						<div class="mb-3">
  							<label class="form-label">Phone</label>
  							<input type="text" name="phone" class="form-control" autocomplete="off">
  						</div>
  					
  						<button  type="submit" class="btn btn-success my-3" name="register" >Register</button>
  					</form>


  					<div class="card-footer">
  						<p class="fw-bold mt-3">Have an account? <a href="login.php">Login</a></p>
  						
  					

  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>





<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>