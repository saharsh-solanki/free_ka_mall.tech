<?php 
include ('../dbcon.php');
    $id=$_REQUEST['id'];
     $winname=$_REQUEST['winname'];
     $completed="completed";
     $query1="UPDATE `giveaway` SET `winner`='$winname' WHERE `id`='$id'";
     $run1=mysqli_query($con,$query1);
     if($run1==true){
     	$query2="UPDATE `giveaway` SET `status`='$completed' WHERE `id`='$id'";
     $run2=mysqli_query($con,$query2);
     	header("location:view-giveaway.php?msg=Maked  Sucessfull");
     }
?>