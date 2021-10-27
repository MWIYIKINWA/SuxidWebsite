
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
   	<div class="admin-content">
   		<a href="create.php" class="btn btn-dark m-2">Create Post</a>

  		<div class="container">

		  <div class="row">
        		<h4 class="fw-bold fs-4 mt-4">Blog Posts</h4>
        	</div>

			  <!-- posted alert-->
			  <?php  if(isset($_SESSION['upload_message1'])): ?>

                  <div class="alert alert-<?=$_SESSION['msg-type']?>  alert-dismissible fade show" role="alert">
	
	                     <?php
	                       echo '<p class="fw-bold fs-5">'.$_SESSION['upload_message1'].'</p>';
	                       unset($_SESSION['upload_message1']);

	                     ?>

                  </div>
 
              <?php endif ?>

            <!-- end of post alert-->

  			<div class="row mt-4">
  				<table class="table">
  					<thead>
  						<tr>
  							<th scope="col">Title</th>
  							<th scope="col">Picture</th>
  							<th scope="col">Date</th>
  							<th scope="col">Operations</th>
  						</tr>
  					</thead>

           <tbody>
           	
           <?php 

            $sql = " select * from posts";
           $result = mysqli_query($conn, $sql);
           
           if($result)
           {
              while($row = mysqli_fetch_assoc($result))
              {
                  $Title = $row['header'];
                  $Picture = $row['picture'];
                  $Date = $row['date'];
                  $id = $row['id'];

                  echo '<tr>
                  	<td>'.$Title.'</td>
                  	<td><img src="uploads/'.$Picture.'" style="width:90px; height:60px;" alt="image"></td>
                  	 <td>'.$Date.'</td>
                  	 <td>
                  	 	<form action="edit_post.php" method="post">
                  	 	  <input type="hidden" name="post_id" value='.$id.'>
                  	 	  <button class="btn btn-success" type="submit" name="editpostId">Edit</button>
                  	 	  <button class="btn btn-danger" type="submit1" name="deletepostId">Delete</button>
                  	 	</form>
                  	 </td>
                  </tr>';
                }
              }

           ?>


               

           </tbody>
 
  				</table>
  			</div>
  		</div>


   </div>
     <!--end of content-->

  </div>


  
   
  

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>