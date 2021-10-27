
<?php

  session_start();
 include 'adminPanel/connect.php';

  if(isset($_POST['subscribe']))
 {
        $email2 = mysqli_real_escape_string($conn, $_POST['email2']);
            
        if (empty($email2) || !filter_var($email2, FILTER_VALIDATE_EMAIL)) 
        {
            
            $_SESSION['message2'] = "Enter a valid email please";
            $_SESSION['msg-type'] = "danger";

            header('location: about.php');
        }
       else
        {
           $sql = "insert into subscibers (email) values ('$email2')";
           $result = mysqli_query($conn, $sql);

            if($result)
             {
               
                     $_SESSION['message'] = "Thank you for subscribing";
                     $_SESSION['msg-type'] = "success";

                     header('location: about.php');
             }

            else   
             {
            
                 echo(mysqli_error($conn));
             }
          }
     
        }


       
 


 //check if email exists