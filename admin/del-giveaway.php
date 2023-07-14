
<?php 
session_start();
if(isset($_SESSION['un'])){

}
else{
  header('location:login.php');
}
 $id=$_REQUEST['id'];
     include('../dbcon.php');
     $query="DELETE FROM `giveaway` WHERE `id`='$id'";
     $run=mysqli_query($con,$query);
     if($run==true){
     	header('location:view-giveaway.php?msg=Giveaway Deleted Succssfully');
     }

?>