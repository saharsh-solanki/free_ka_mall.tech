<?php 
include ('../dbcon.php');
    $id=$_REQUEST['id'];
     $query1="UPDATE `query` SET `status`='solved' WHERE `id`='$id'";
     $run1=mysqli_query($con,$query1);
     if($run1==true){
     	header("location:view-query.php?msg=Solved  Sucessfull");
     }
?>