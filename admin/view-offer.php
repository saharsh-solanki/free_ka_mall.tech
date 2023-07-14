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
      <th scope="col">Article ID</th>
      <th scope="col">Article Name</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
   <tbody>
     <?php 
     include('../dbcon.php');
     $query="SELECT * FROM `offer`";
     $run=mysqli_query($con,$query);
     $row=mysqli_num_rows($run);
     if($row<1){ ?>
      <script type="text/javascript">
        alert('No Offer!!');
      window.open('dashbord.php','_self');
      </script>
  <?php }//end of if
 
 else{
 $i=1;
  while($data=mysqli_fetch_assoc($run)) { ?> 
    <tr>
      <th scope="row"><?php echo $data['offerid']; ?></th>
      <th scope="row"><?php echo $data['offername']; ?></th>
      <th scope="row"><a class="btn btn-danger" href="up-offer.php?id=<?php echo $data['offerid']; ?>">Update</a></th>
      <th scope="row"><a class="btn btn-danger" href="del-offer.php?id=<?php echo $data['offerid']; ?>">Delete</a></th>
      </tr>
   <?php  }
   } ?>
  </tbody>
 </table>

    </body>
</html>
