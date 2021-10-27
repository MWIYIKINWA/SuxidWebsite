<?php
   include 'header.php';
   include 'adminPanel/connect.php';
 ?>

<section class="py-5">
 <div class="container">
  
  <div class="row text-center m-5">
     <h4 class="display-5 fw-bold">Blog</h4>
  </div>

</div>

<?php
$sql = "select * from posts";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    
     $header = $row['header'];
     $body = $row['text'];
     $id = $row['id'];
    $image = $row['picture'];

    echo '<div class="row m-5" style="background-color: #ffffca; padding: 40px;">
     <div class="col-lg-6 col-sm-12">
      <h4 class="fw-bold display-6 mx-4">'.$header.'</h4>
      <p class="fs-5" style=" word-spacing: 2px; margin:20px; ">
        '.$body.'
      </p>
   </div>
   <div class="col-lg-6 col-sm-12">
      <img src="adminPanel/uploads/'.$image .'" class="img-fluid">
   </div>
  
</div>';
   
}

?>



</section>


<?php
  include 'footer.php';
?>