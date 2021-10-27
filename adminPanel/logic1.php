<?php

//subscription page
session_start();

include 'connect.php';

//delete subscription

if(isset($_GET['delete']))
{
     $id = $_GET['delete'];
     $sql = "delete from subscibers where id = $id";
     $result = mysqli_query($conn, $sql);

     if($result)
     {
         $_SESSION['delete_message'] = "Oops, suscription deleted";
         $_SESSION['msg-type'] = "danger";

         header('Location:subscribers.php');
     }
     else
     {
         die(mysqli_error($conn));
     }
}


// uploading team

if(isset($_POST['postTeam']))
{
     $Name = mysqli_real_escape_string($conn, $_POST['name']);
     $position = mysqli_real_escape_string($conn, $_POST['position']);
     $image = "";

     if (empty($Name) || empty($position))
     {
         echo "all fields are required";
     }
     else
     {

        if ($_FILES['teamImage'] && $_FILES['teamImage']['name'] == '')
        {
              $image="default";
        }
         else
         {
            $image = $_FILES['teamImage']['name'];
             $path = "uploads/".basename($image);
             move_uploaded_file($_FILES['teamImage']['tmp_name'], $path);
            
         }
         $query = "insert into team (Name, position, image) values ('$Name', '$position', '$image')";
         $result = mysqli_query($conn, $query);
         if (!$result) {
             echo(mysqli_error($conn));
         }
         else
         {
            $_SESSION['upload_message'] = "Team Member Added";
            $_SESSION['msg-type'] = "success";

             header('Location:team.php');
         }

     }
     
   

}


//uploading post


if(isset($_POST['postblog']))
{
     $header = mysqli_real_escape_string($conn, $_POST['header']);
     $body = mysqli_real_escape_string($conn, $_POST['body']);
     $postimage = "";

     if (empty($header) || empty($body))
     {
         echo "all fields are required";
     }
     else
     {

        if ($_FILES['postimage'] && $_FILES['postimage']['name'] == '')
        {
              $postimage="default";
        }
         else
         {
            $postimage = $_FILES['postimage']['name'];
             $path = "uploads/".basename($postimage);
             move_uploaded_file($_FILES['postimage']['tmp_name'], $path);
            
         }
         $query = "insert into posts (header, text, picture) values ('$header', '$body', '$postimage')";
         $result = mysqli_query($conn, $query);
         if (!$result) {
             echo(mysqli_error($conn));
         }
         else
         {
            $_SESSION['upload_message1'] = " Blog post Added";
            $_SESSION['msg-type'] = "success";

             header('Location:post.php');
         }

     }
     
   

}


    

  