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
   </head>
<body style="background: #f3f3f3;">
    
   
    
    <?php include('header.php'); ?>


    <div class="alert alert-secondary"><center>View Query</center></div>          
   <table class="table table-bordered" >
   <thead class="thead-dark">
    <tr>
      <th scope="col">Query ID</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Status</th>
      <th scope="col">Solved</th>
   </tr>
  </thead>
   <tbody>
     <?php 
     include('../dbcon.php');
     $query="SELECT * FROM `query` WHERE `status`='pending'";
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
      <th scope="row"><?php echo $data['name']; ?></th>
      <th scope="row"><?php echo $data['mobno']; ?></th>
      <th scope="row"><?php echo $data['email']; ?></th>
      <th scope="row"><?php echo $data['message']; ?></th>
      <th scope="row"><?php echo $data['status']; ?></th>
      <th scope="row"><a href="up-query.php?id=<?php echo $data['id']; ?>">Make Solved</a></th>
      </tr>
   <?php  }
   } ?>
  </tbody>
 </table>

    </body>
</html>
