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
     $query="SELECT * FROM `giveaway` WHERE `id`='$id'";
     $run=mysqli_query($con,$query);
     $row=mysqli_num_rows($run);
     $data=mysqli_fetch_assoc($run);
     if($row<1){ ?>
      <script type="text/javascript">
        alert('0  giveaway!!');
      window.open('dashbord.php','_self');
      </script>
  <?php }//end of if
 else{ ?>
   
   <div class="alert alert-success">
     <center><div class="alert-heading">Give-Away of ID : <?php echo $id; ?></div>
    <hr>
     <div>
       Winning Amount : <?php echo $data['winamt']; ?>
     </div>
     <img style="height:110px; width:180px;" src="../image/giveaway.png"><br>
    <div>
       Give-Away Code : <?php echo $data['gcode']; ?>
     </div><br>
    <div>
       Entry Left : <?php echo $data['entryleft']; ?>/<?php echo $data['tj']; ?>
     </div><br>
     
     <a href="make-winnercon.php?id=<?php echo $id; ?>" class="btn btn-danger"> Find Winner </a>
   </center>
   </div>
  
   <?php } ?>



</body>
</html>