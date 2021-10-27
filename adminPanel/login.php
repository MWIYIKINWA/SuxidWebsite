<?php 
 include 'auth.php';
 ?>

<?php 

$username = "";
$password = "";
$errors = array();

if (isset($_POST['login'])) {
	
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    
    //check these conditions

    if (empty($username) && !is_numeric($username)) {
    	array_push($errors, "Username Required please and in words");
    }
     if (empty($password)) {
    	array_push($errors, "Password Required please");
    }
  
    //log in user
     
     if (count($errors) == 0) {
        	
        $sql = "SELECT * FROM adminusers WHERE username = '$username' AND password = '$password' ";
        $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result)) {
            	
				$_SESSION['username'] = $username;
                header('Location:index.php');
               
            }
            else{
               
               array_push($errors, "Wrong password or username, please try again");

            }

        }   

}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
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
  					<h5 class="display-5 fw-bold text-center">Login</h5>
  					

  					<form method="post" action="login.php">

                        <?php if(count($errors) > 0): ?>
                         	<div class="error">
                         		<?php foreach($errors as $error): ?>
                         		<p class="text-danger fw-bold"><?php echo $error; ?></p>
                         		<?php endforeach ?>
                         	</div>
                         <?php endif ?>

  						<div class="mb-3">
  							<label class="form-label">User Name</label>
  							<input type="text" name="username" class="form-control" autocomplete="off">
  						</div>
  						<div class="mb-3">
  							<label class="form-label">Password</label>
  							<input type="password" name="password" class="form-control" autocomplete="off">
  						</div>
  						<button  type="submit" class="btn btn-success my-3" name="login">Login</button>
  					</form>


  					<div class="card-footer">
  						<p class="fw-bold mt-3">Have no account? <a href="register.php">SignUp</a></p>
  						
  						<p class="fw-bold mt-3 text-success"><a href="#">Recover Password</a></p>

  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>


<script type="text/javascript"></script>
</body>
</html>