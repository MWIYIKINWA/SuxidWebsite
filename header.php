<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<title>suxid</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<script type="text/javascript" src="js/all.js"></script>
	<style type="text/css">
		.hidden{

         display: none;
         }

		 .height{
           min-height: 120vmax;
         }


         header{
         	background-color:#286407;
         }
      
      #backimage {
      	 background: linear-gradient(to right, rgba(0,0,0,.5), rgba(0,0,0,.5)),url(images/tp2.jpeg); 
      	 background-repeat: no-repeat; 
         background-attachment: fixed; 
      }

     html, body{
     	height: 100%;
     }
    
    #con{
    	min-height: 100%;		
    }

	@media only screen and (max-width:364px) 
{
    .none
    {
        display: none;
    }
}

	</style>
</head>
<body>
<header class="">
	<div class="container">
		<nav class="navbar navbar-expand-md navbar-light">
			<a href="#" class="navbar-brand">
            <img src="images/logo.jpg" alt="suxid-logo" class="d-inline-block align-top" width="80" height="50">
			</a>
			<span class="hidden">Suxid</span>
			<button 
			
			class="navbar-toggler"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target = "#toggleMobileMenu"
			aria-controls = "toggleMobileMenu"
			aria-expanded = "false"
			aria-lable = "Toggle navigation" 
			>
			<span class="navbar-toggler-icon"></span>	
			</button>

			<div class="collapse navbar-collapse" id="toggleMobileMenu">
				<ul class="navbar-nav ms-auto text-center ">
					<li><a href="index.php" class="nav-link fw-bold fs-4 text-light">Home</a></li>
					<li ><a href="about.php" class="nav-link fw-bold fs-4 text-light">About</a></li>
					<li ><a href="contact.php" class="nav-link fw-bold fs-4 text-light">Contact</a></li>
					<li ><a href="blog.php" class="nav-link fw-bold fs-4 text-light">Blog</a></li>

				</ul>
			</div>
		</nav>
	</div>
</header>
<script type="text/javascript" src="js/bootstrap.min.js"></script>