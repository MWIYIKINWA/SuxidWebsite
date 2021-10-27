<?php
 
 include 'auth.php';

?>
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


      <div class="container">

      	<div class="admin-content">
  		
  		
       <!-- delete alert-->
         <?php  if(isset($_SESSION['delete_message'])): ?>

          <div class="alert alert-<?=$_SESSION['msg-type']?>  alert-dismissible fade show" role="alert">
              
              <?php
                echo '<p class="fw-bold fs-5">'.$_SESSION['delete_message'].'</p>';
                unset($_SESSION['delete_message']);

               ?>

          </div>
           
           <?php endif ?>

          <!-- end delete alert-->

      	<table class="table">
      		<thead>
      			<tr>
      			<th scope="col">Email</th>
      			<th scope="col">Subscription Date</th>
      			<th scope="col">Delete</th>
      		</tr>
      		</thead>

          <tbody>
          	
           <?php
           
           $sql = " select * from subscibers";
           $result = mysqli_query($conn, $sql);
           
           if($result)
           {
              while($row = mysqli_fetch_assoc($result))
              {
                  $email = $row['email'];
                  $date = $row['date'];
                  $id = $row['id'];

                  echo '  <tr>
            	<th scope="row">'.$email.'</th>
            	<td>'.$date.'</td>
            	<td>
            		<a href="logic1.php?delete='.$id.'" class="btn btn-danger text-dark">Delete</a>            		
            	</td>
            </tr>';
              }
           }

           ?>
          


          </tbody>


      	</table>
      </div>

  	</div>
     <!--end of content-->

  </div>


  
   
  

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>