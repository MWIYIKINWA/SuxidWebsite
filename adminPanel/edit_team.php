
<?php
 include 'auth.php';
?>



  <?php 
  
  if (isset($_POST['editTeam'])) {
  	
      $id = mysqli_real_escape_string($conn, $_POST['edit_id']);
      $Name = mysqli_real_escape_string($conn, $_POST['name']);
      $position = mysqli_real_escape_string($conn, $_POST['position']);
      $image = $_FILES['editImage']['name'];

      $query = "UPDATE team SET Name = '$Name', position = '$position', image = '$image' WHERE id = $id";
      $result = mysqli_query($conn, $query);

      if ($result) {
      	$image = $_FILES['editImage']['name'];
         $path = "uploads/".basename($image);
         move_uploaded_file($_FILES['editImage']['tmp_name'], $path);
        
        header('location:team.php');
       echo 'team updated';
      }
      else
      {
      	echo(mysqli_error($conn));
      }

  }

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
		<?php
       
       if (isset($_POST['deleteId'])) {
       	
       	 $id = $_POST['edit_id'];

       	 $sql="delete from team where id = $id";
       	 $result=mysqli_query($conn, $sql);

       	 if (!$result) {
       	 	
           echo(mysqli_error($conn));

       	 }
       	 else
       	 {

           header('location:team.php');

       	 }

       }	 

  ?>

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
  		
  		<?php
       
       if (isset($_POST['editId'])) {
       	
       	 $id = $_POST['edit_id'];

       	 $sql="select * from team where id = $id";
       	 $result=mysqli_query($conn, $sql);
         
         foreach( $result as $row)
         {
         	?>
            

  				<form method="post" enctype="multipart/form-data" >
  					
  					<input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
  					
  					<div class="mb-3">
  						<label class="form-label"><em>Name<em></label>
  						<input type="text" name="name" class="form-control" value="<?php echo $row['Name'] ?>" placeholder="Enter member Name">
  					</div>
  					<div class="mb-3">
  						<label class="form-label"><em>Title<em></label>
  						<input type="text" name="position" class="form-control" value="<?php echo $row['position'] ?>" placeholder="Enter member position">
  					</div>
  					<div class="mb-3">
  						<label class="form-label"><em>Member picture<em></label>
  						<input type="file" name="editImage" id="editImage" class="form-control">
              
  					</div>
  					<a href="team.php" class="btn btn-info">Cancel</a>
  					<button type="submit" class="btn btn-success" name="editTeam">update</button>
  				</form> 
     
       <?php
         }

       }

  		?>
         <!--edit team-->
          	 <div class="container mt-5">
  		
  				
  			
  			</div>
  		</div>
         <!--end of edit team-->

  	</div>
     <!--end of content-->

  </div>


   
  

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>