<?php
  session_start();
  include 'adminPanel/connect.php';
 ?>

<?php
  include 'header.php';
?>



<div class="container mt-3">
 <?php   if(isset($_SESSION['message'])):    ?>
 
  <div class="alert alert-<?=$_SESSION['msg-type'] ?> alert-dismissible fade show" role="alert">
  <?php  
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  <?php  endif    ?>
  

  
</div>





<div class="container mt-3">
 <?php   if(isset($_SESSION['message2'])):    ?>
 
  <div class="alert alert-<?=$_SESSION['msg-type'] ?> alert-dismissible fade show" role="alert">
    <h5 class="alert-heading fw-bold fs-2">Oops!</h5>
   <?php  
            echo $_SESSION['message2'];
            unset($_SESSION['message2']);
        ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  <?php  endif    ?>
</div>
<!------------------------------------------->

<!--section1-->
<section class="py-5 ">
  <div class="container">
    <div class="row">
      <h4 class="display-5 fw-bold text-center">About Us</h4>
      <div class="col-lg-6 col-sm-12 ">
        <p class="fs-4 m-5">
          <strong>Suxid Limited</strong><br>Is a legally registered company in uganda<br>
          that provides solutions and technologies that address the world's biggest sustainable challenges
        </p>
      </div>

      <div class="col-lg-6 col-sm-12">
        <img src="images/solutions3.jpg" class="img-fluid" style=" width:400px; margin-right: 90px;">
      </div>


    </div>
  </div>
</section>
<!--end-->

<!--section2-->

<section class="py-5" id="con">
   
   <div class="container-fluid">
    <div class="row">
      <h4 class="fw-bold display-5 text-center" style="margin-right: 80px;">Sectors</h4>
    </div>
   <!--slider-->
   <div class="row" style="margin-top: 80px;">
   <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
   
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="images/tp.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block">
        <h5 class="display-6 fw-bold text-light">Transport and Logistics</h5>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/L.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block">
        <h5 class="display-6 fw-bold text-light">Agriculture</h5>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/energy1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block">
        <h5 class="display-6 fw-bold text-light">Energy</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/healthy3.png" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block">
        <h5 class="display-6 fw-bold text-light">Health</h5>
      </div>
    </div>
      <div class="carousel-item">
      <img src="images/community1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block">
        <h5 class="display-6 fw-bold text-light">Community and grassroot development</h5>
      </div>
    </div>
      <div class="carousel-item">
      <img src="images/R.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block">
        <h5 class="display-6 fw-bold text-light">Manufacturing</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
 
   <!--end slider-->

</div>
</section>

<!--end-->



<!--subscription-->
<div class="container">
  <div class="row text-center m-5 p-3">
    <h3 class="fw-bold fs-2">News Letter</h3>
   <form method="post" action="logic.php">
      <div class="mb-3">
        <label class="form-label fs-4">Enter Your email</label>
        <input class="form-control" type="email" name="email2" placeholder="Email-address">
       </div>
      <button type="submit" class="btn btn-success" name="subscribe">Subscribe</button>
    </form>
  </div>
  
</div>
<!--end-->


<!--section4-->
<section class="py-5" id="con">
  <div class="container">
   <div class="row text-center">
    <h3 class="fw-bold display-5 m-3">Team</h3>
  </div>
  
  <div class="row">
<?php

    $sql = " select * from team";
    $result = mysqli_query($conn, $sql);
           
    if($result)
      {
        while($row = mysqli_fetch_assoc($result))
        {
                 $Name = $row['Name'];
                 $position = $row['position'];
                 $image = $row['image'];

          echo  '<div class="col-md-6 col-lg-4">
                      <div class="card m-3">
                        <div class="card-header">
                          <img src="adminPanel/uploads/'.$image.'"  width="100%" height = "270px">
                         </div>
                 <div class="card-body text-center">
                <h4 class="card-title">'.$Name.'</h4>
                <p class="lead text-center">
                  '.$position.'
                </p>
                 </div>
            <div class="card-footer">
            <a href="contact.php" class="btn btn-success">Mail Me</a>
          </div>
       </div>
     </div>';

        }
      }

?>
  
</div>   
</div> 
</section>
<!--end-->


<?php
  include 'footer.php';
?>




