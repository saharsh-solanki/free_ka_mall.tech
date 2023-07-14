<?php 
session_start();
if(isset($_SESSION['un'])){

}
else{
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Winner</title>
  </head>
<body>
  <?php include('header.php'); ?><br>

<!--display Message-->
   <?php if(isset($_REQUEST['msg'])){ ?>
<div style="margin:20px;" class="alert alert-success">
  <div class="alert-heading">
   Message
  </div>
  <hr>
<?php echo $_REQUEST['msg']; ?>
</div><?php } ?>


 <?php 
     include('../dbcon.php');
     
     $id=$_REQUEST['id'];
     $query="SELECT MIN(`id`) as min_id FROM `gjoinuser` WHERE `gid`='$id'";
     $run=mysqli_query($con,$query);
     $row=mysqli_num_rows($run);
     $data=mysqli_fetch_assoc($run);
     if($row<1){ 
        header('location:make-winner.php?msg=error');
      }//end of if
 else{ 
      $query1="SELECT MAX(`id`) as max_id FROM `gjoinuser` WHERE `gid`='$id'";
     $run1=mysqli_query($con,$query1);
     $row1=mysqli_num_rows($run1);
     $data1=mysqli_fetch_assoc($run1);
     if($row1<1){ 
        header('location:make-winner.php?msg=error');
      }//end of if
 else{ 
  $randno= rand($data['min_id'],$data1['max_id']);
   $query2="SELECT * FROM `gjoinuser` WHERE `id`='$randno'";
     $run2=mysqli_query($con,$query2);
     $row2=mysqli_num_rows($run2);
     $data2=mysqli_fetch_assoc($run2);
     if($row2<1){ 
        header('location:make-winner.php?msg=error');
      }//end of if
 else{ 
  ?>

       <div class="alert alert-success">
         <center><div class="alert-heading">Give-Away Winner of ID : <?php echo $id; ?></div>
        <hr>
        <div>
          Winner  Name : <?php echo $data2['name']; ?>
         </div><br>
         <div>
          Winner  Mobile No : <?php echo $data2['pno']; ?>
         </div><br>
         
         <a href="upwiner.php?id=<?php echo $id; ?>&&winname=<?php echo $data2['name']; ?>" class="btn btn-danger"> Update List </a>
       </center>
       </div>
  
   <?php
   }
    }
}
    ?>



</body>
</html>