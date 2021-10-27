
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
  			
  			<li><a href="team.php" class="nav-link text-light">Team Members</a></li>
  		</ul>
  	
  	</div>
   
   <!--admin in content-->
   	<div class="admin-content">
   		<a href="post.php" class="btn btn-dark m-2">Manage Post</a>
  		<h4 class="fw-bold display-5">Create Posts</h4>
  		<!--post on blog-->
  		 <div class="container ">
  			<div class="row mt-4">
  				<h4 class="fw-bold">Blog</h4>
  				
  				<form method="post" enctype="multipart/form-data" action="logic1.php">
  					<div class="mb-3">
  						<label class="form-label"><em>Header<em></label>
  						<input type="text" name="header" class="form-control" placeholder="Enter post header">
  					</div>
  					<div class="mb-3">
  						<label class="form-label"><em>Post Text<em></label>
  						<textarea class="form-control" name="body" rows="5" placeholder="Enter post body"></textarea>
  					</div>
  					<div class="mb-3">
  						<label class="form-label"><em>Attach Picture<em></label>
  						<input type="file" name="postimage" class="form-control">
  					</div>
  					<button type="submit" class="btn btn-success" name="postblog">Post Blog</button>
  				</form>
  			
  			</div>
  		</div>
    <!--end of post blog-->
    	 <div class="container mt-5">
  			<div class="row mt-4">
  				<h4 class="fw-bold">Team Member</h4>
  				
  				<form method="post" action="logic1.php" enctype="multipart/form-data" >
  					<div class="mb-3">
  						<label class="form-label"><em>Name<em></label>
  						<input type="text" name="name" class="form-control" placeholder="Enter member Name">
  					</div>
  					<div class="mb-3">
  						<label class="form-label"><em>Title<em></label>
  						<input type="text" name="position" class="form-control" placeholder="Enter member position">
  					</div>
  					<div class="mb-3">
  						<label class="form-label"><em>Member picture<em></label>
  						<input type="file" name="teamImage" id="teamImage" class="form-control">
              
  					</div>
  					<button type="submit" class="btn btn-success" name="postTeam">Post Member</button>
  				</form>
  			
  			</div>
  		</div>
    <!--post team member-->
  	</div>
     <!--end of content-->

  </div>


  
   
  

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>