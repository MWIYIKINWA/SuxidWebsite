
<?php
   include 'header.php';
 ?>

<!--section1-->
<section class="py-5">
 <div class="container">

  <div class="row text-center">
     <h4 class="display-5 fw-bold m-3">Contact</h4>
  </div>

  


  <div class="row">
       <div class="col-lg-6 col-sm-12">
        <p class="lead text-center fs-4 m-5">
          Please fill this form to reach us,<br>
          We are here for you
        </p>
        <img src="images/phone.gif" class="img-fluid mb-3" style="border-radius: 50%; height:300px;">
    </div>
    <div class="col-lg-6 col-sm-12 text-success" >
        
        <!--my form-->
          
          <div class="mt-5">
            
          <div class="">
            <?php
   
                    $msg = "";

                  if (isset($_POST['contact'])) {
     
                       $email = $_POST['email'];
                       $name = $_POST['name'];
                       $phone = $_POST['phone'];
                       $message = $_POST['message'];
                      
                  if(empty($name) || empty($email) || empty($phone) || empty($message))
                  {

                    $msg = "All fields are required please";
                    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <p class="fs-5">'.$msg.'</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                               </div>';
                  }
                  elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
                  {
                    $msg = "Please enter Valid Email";
                    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <p class="fs-5">'.$msg.'</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                               </div>';
                  }
                  else
                 {
                       
                  
                       $msg = "Thank you for contacting us";
                       echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <p class="fs-5">'.$msg.'</p>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                             </div>';

                 }

                

              }

          ?>

             <form method="post">
               <div class="mb-3">
                    <label  class="form-label fw-bold fs-5">Name</label>
                    <input type="text" class="form-control" placeholder="Enter your name" name="name">
                </div>
               
               <div class="mb-3">
                    <label  class="form-label fw-bold fs-5">Email address</label>
                    <input type="text" class="form-control" placeholder="Enter your email" name="email">
                </div>

                 <div class="mb-3">
                    <label  class="form-label fw-bold fs-5">Phone Number</label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter your phone number">
                </div>

              <div class="mb-3">
              <label  class="form-label fw-bold fs-5">Message</label>
              <textarea class="form-control"  rows="5"  name="message" placeholder="Message"></textarea>
             </div>

               <button class="btn btn-success" 
               name="contact" type="submit" 
               style="width: 80px;" value="Send">
                Submit</button>

               </form>
             
                
              </div>
           
                </div>  

        <!--end-->


      </div>
  </div>
</div>
</section>
<!--end of section1-->

<!--section2-->

<section class="bg-secondary text-light py-5">
  <div class="container ">
  <div class="row text-center">
    <p class="fs-4"><em>LinkedIn</em></p>
    <a href="https://www.linkedin.com/search/results/all/?keywords=chriss%20tunanukye&origin=RICH_QUERY_SUGGESTION&position=0&searchId=f3b223d3-1006-47a5-82fa-5dc600188c74&sid=9~F">
          <li class="fab fa-linkedin m-3"  style="width: 40px; height: 40px;"></li></a>
  </div>

   <div class="row text-center">
    <p class="fs-4"><em>facebook</em></p>
   <a href="https://www.facebook.com/"><li class="fab fa-facebook m-3" style="width: 40px; height: 40px;"></li></a>
  </div>

   <div class="row text-center">
    <p class="fs-4"><em>Twitter</em></p>
   <a href="https://twitter.com/?lang=en"><li class="fab fa-twitter m-3"  style="width: 40px; height: 40px;"></li></a>
  </div>

   <div class="row text-center">
    <p class="fs-4"><em>Instagram</em></p>
   <a href="https://www.instagram.com/"><li class="fab fa-instagram m-3"  style="width: 40px; height: 40px;" ></li></a>
  </div>
</div>
</section>
<!--end of section2-->

<!--section 3-->
   <div class="container">
     <div class="row">
       <div class="col-lg-6  col-sm-12">
          <p class="fs-4 text-center text-warning " style=" word-spacing: 2px; margin-top:120px; ">
            Our strategies and objectives have been<br> aligned with
          global priorities by providing solutions and products 
        that address our <br>established Sustainable Development Goals</p>
       </div>
        <div class="col-lg-6 col-sm-12">
         <img src="images/sdg1.png" class="img-fluid m-5 p-3" style="height: 300px; width:300px;">
       </div>
     </div>
   </div>
<!--end of section3-->




<?php
  include 'footer.php';
?>