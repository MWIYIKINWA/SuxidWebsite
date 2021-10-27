<?php

 
 include 'auth.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/panel.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<script type="text/javascript" src="js/all.js"></script>

	<style type="text/css">
    header{
          background-color:#ffc107;
         }

     </style>

</head>
<body>

<!--nav-->
 <header>
	<div class="container">
		<nav class="navbar navbar-expand-md navbar-light">
			<a href="#" class="navbar-brand">
            <img src="../images/logo.jpg" alt="suxid-logo" class="d-inline-block align-top" width="80" height="50">
			</a>
			  <span><h5 class=" fw-bold">Admin Panel</h5></span>
	

			<div class="collapse navbar-collapse" id="toggleMobileMenu">
				<ul class="navbar-nav ms-auto text-center fs-5">
					
					<li ><a href="#" class="nav-link fw-bold">LogOut</a></li>

				</ul>
			</div>
		</nav>
	</div>
</header>

<!--end-->



  <div class="wrapper">
  	<div class="side-bar">
  		<h4 class="fw-bold text-light m-5">Menu</h4>
  	
  		<ul>
  			<li><a href="index.php" class="nav-link text-light"></i>Home</a></li>
  			<li><a href="profile.php" class="nav-link text-light">Profile</a></li>  			
  			<li><a href="subscribers.php" class="nav-link text-light">Subscribers</a></li>
  			<li><a href="post.php" class="nav-link text-light">Manage Posts</a></li>
  			
  			<li><a href="team.php" class="nav-link text-light">AdminUsers</a></li>
  		</ul>
  	
  	</div>
   
   <!--admin in content-->
   	<div class="admin-content">

	   <div class="container" style="align-items: center;">
		   <div class="card">
			   <div class="card-title">
				   <h6 class="fw-bold fw-bold fs-3 my-3 text-center">Profile</h6>
			   </div>
			   <div class="card-body">
				   <label class="form-lable fw-bold fs-5 mb-2">Username</label>
				   <input class="form-control fs-5" type="text">
				   <label class="form-lable fw-bold fs-5 mt-3">Email</label>
				   <input class="form-control fs-5" type="email">
				   <label class="form-lable fw-bold fs-5 mt-3">Phone</label>
				   <input class="form-control fs-5" type="text">
				   <label class="form-lable fw-bold fs-5 mt-3">Password</label>
				   <input class="form-control fs-5" type="text">
			   </div>
			   
				   <button class="btn btn-success w-75 mx-auto mb-2">Change Login Details</button>
			   
		   </div>
	   </div>
  		
  	</div>
     <!--end of content-->

  </div>


  
   
  

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>