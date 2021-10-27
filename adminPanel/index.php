
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
  		
       <div class="container">
       	 <div class="row">
       	 	 <h4 class="display-6 fw-bold">Admin dashboard</h4>
       	 	 <h5 class="fs-3 mt-3">Welcome, <?php echo $_SESSION['username']; ?></h5>
       	 </div>
			<div class="row my-3">
				<div class="col-4 bg-info py-5 text-center fs-5">
					
						<?php
						      	  $sql = "SELECT id FROM subscibers order by id ";
								  $result = mysqli_query($conn, $sql);
								  $row =  mysqli_num_rows($result);
								  echo '<h3>'.$row.' Subscribers</h3>';
						?>
						
					</div>
				<div class="col-4 bg-warning py-5 text-center fs-5">
				<?php
						      	  $sql = "SELECT id FROM posts order by id ";
								  $result = mysqli_query($conn, $sql);
								  $row =  mysqli_num_rows($result);
								  echo '<h3>'.$row.' posts</h3>';
						?>
				</div>
				<div class="col-4 bg-success py-5 text-center fs-5">
				<?php
						      	  $sql = "SELECT id FROM team order by id ";
								  $result = mysqli_query($conn, $sql);
								  $row =  mysqli_num_rows($result);
								  echo '<h3>'.$row.' Team Members</h3>';
						?>
				</div>
			</div>
       	 <div class="row">
       	 	 <p class="fs-5 mt-3">This is the dashboard of the Suxid Website.
       	 	 You will be able to manage posts on the blog page using the manage posts page on the side menu.

       	 	<p class="fs-5 mt-5">You are good to go :)</p>
       	 </div>
			

       </div>

  	</div>
     <!--end of content-->

  </div>

  
   
  

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>