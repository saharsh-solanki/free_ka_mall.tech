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
        <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->
   
<body style="background: #f3f3f3;">
    
   
    
    <?php include('header.php'); ?>

    <div class="alert alert-secondary"><center>View Give-Away</center></div>          
   <table class="table table-bordered" >
   <thead class="thead-dark">
    <tr>
      <th scope="col">Giveaway ID</th>
      <th scope="col">Win Amount</th>
      <th scope="col">Giveaway Code</th>
      <th scope="col">Total Joiner</th>
      <th scope="col">JOINED PERSONE</th>
      <th scope="col">Winner</th>
      <th scope="col">Delete</th>
      <th scope="col">Find Winner</th>
    </tr>
  </thead>
   <tbody>
     <?php 
     include('../dbcon.php');
     $query="SELECT * FROM `giveaway`";
     $run=mysqli_query($con,$query);
     $row=mysqli_num_rows($run);
     if($row<1){ ?>
      <script type="text/javascript">
        alert('0  giveaway!!');
      window.open('dashbord.php','_self');
      </script>
  <?php }//end of if
 
 else{
 $i=1;
  while($data=mysqli_fetch_assoc($run)) { ?> 
    <tr>
      <th scope="row"><?php echo $data['id']; ?></th>
      <th scope="row"><?php echo $data['winamt']; ?></th>
      <th scope="row"><?php echo $data['gcode']; ?></th>
      <th scope="row"><?php echo $data['tj']; ?></th>
      <th scope="row"><?php echo $data['entryleft']; ?></th>
      <th scope="row"><?php echo $data['winner']; ?></th>
      <th scope="row"><a href="del-giveaway.php?id=<?php echo $data['id']; ?>">delete</a></th>
      <th scope="row"><a href="make-winner.php?id=<?php echo $data['id']; ?>">Find</a></th>
      </tr>
   <?php  }
   } ?>
  </tbody>
 </table>

    </body>
</html>
