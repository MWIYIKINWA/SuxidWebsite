
<?php


$conn = new mysqli('localhost','root','','suxiddatabase');

if(!$conn)
{
   die(mysqli_error($conn)); 
}

?>