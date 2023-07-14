<?php 
    include('dbcon.php');

    $name=$_POST['name'];
    $mobno=$_POST['mobno'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $query="INSERT INTO `query`(`name`, `mobno`, `email`, `message`) VALUES ('$name','$mobno','$email','message')";
    $run=mysqli_query($con,$query);
    if($run == TRUE){
     header('location:contact-us.php?msg=Your Query Has Been Successfully Taken. We Will Response You Shortly');
     }

 ?>