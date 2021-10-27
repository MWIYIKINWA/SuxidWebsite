
<?php
 include 'auth.php';
?>



  <?php 
  
  if (isset($_POST['editpost'])) {
  	
      $id = mysqli_real_escape_string($conn, $_POST['post_id']);
      $header = mysqli_real_escape_string($conn, $_POST['header']);
      $body = mysqli_real_escape_string($conn, $_POST['body']);
      $image = $_FILES['editpicture']['name'];

      $query = "UPDATE posts SET header = '$header', text = '$body', picture = '$image' WHERE id = $id";
      $result = mysqli_query($conn, $query);

      if ($result) {
      	$image = $_FILES['editpicture']['name'];
         $path = "uploads/".basename($image);
         move_uploaded_file($_FILES['editpicture']['tmp_name'], $path);
        
        header('location:post.php');
       echo 'post updated';
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

<?php
///delete post

       if (isset($_POST['deletepostId'])) {
        
         $id = $_POST['post_id'];

         $sql="delete from posts where id = $id";
         $result=mysqli_query($conn, $sql);

         if (!$result) {
            
           echo(mysqli_error($conn));

         }
         else
         {

           header('location:post.php');

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
       
       if (isset($_POST['editpostId'])) {
       	
       	 $id = $_POST['post_id'];

       	 $sql="select * from posts where id = $id";
       	 $result=mysqli_query($conn, $sql);
         
         foreach( $result as $row)
         {
         	?>
            

  				<form method="post" enctype="multipart/form-data" >
  					
  					<input type="hidden" name="post_id" value="<?php echo $row['id'] ?>">
  					
  					<div class="mb-3">
  						<label class="form-label"><em>Header<em></label>
  						<input type="text" name="header" class="form-control" value="<?php echo $row['header'] ?>" placeholder="Enter member Name">
  					</div>
  					<div class="mb-3">
  						<label class="form-label"><em>Body<em></label>
  						<input type="text" name="body" class="form-control" value="<?php echo $row['text'] ?>" placeholder="Enter member position">
  					</div>
  					<div class="mb-3">
  						<label class="form-label"><em>picture<em></label>
  						<input type="file" name="editpicture" id="editpicture" class="form-control">
              
  					</div>
  					<a href="post.php" class="btn btn-info">Cancel</a>
  					<button type="submit" class="btn btn-success" name="editpost">update</button>
  				</form> 
     
       <?php
         }

       }

  		?>
     

  	</div>
     <!--end of content-->

  </div>