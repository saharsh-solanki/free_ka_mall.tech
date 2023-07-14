<!DOCTYPE html>
<html>
    <head>
        <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->
   
<body style="background: #f3f3f3;">
    
   
    
    <?php include('header.php'); ?>



<?php $id=$_REQUEST['id']; ?>

 <?php 
     include('dbcon.php');
     $query1="SELECT * FROM `giveaway` WHERE `id`='$id'";
     $run1=mysqli_query($con,$query1);
     $row1=mysqli_num_rows($run1);
     $data1=mysqli_fetch_assoc($run1);
     if($data1['winner']!="not decided"){ ?>
     <div class="alert alert-success"><center>Winner of Giveaway ID : <?php echo $id; ?></center></div>          
 <table class="table table-bordered" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile Number</th>
    </tr>
  </thead>
   <tbody>
    <tr>
      <th scope="row"><?php echo "1";  ?></th>
      <th scope="row"><?php echo $data1['winner']; ?></th>
      <th scope="row">Not Showable</th>
      </tr>
     
  </tbody>
 </table>
 <?php }
else{
  ?>
  <div class="alert alert-danger">Winner is Not Decided Yet</div><?php } ?>


  
    <div  class="alert alert-secondary"><center>LeaderBord ID : <?php echo $id; ?></center></div>          
 <table class="table table-bordered" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile Number</th>
    </tr>
  </thead>
   <tbody>
     <?php 
     include('dbcon.php');
     $query="SELECT * FROM `gjoinuser` WHERE `gid`='$id'";
     $run=mysqli_query($con,$query);
     $row=mysqli_num_rows($run);
     if($row<1){ ?>
      <script type="text/javascript">
        alert('0 Persone Join This giveaway!!');
      window.open('giveaway.php','_self');
      </script>
  <?php }//end of if
 
 else{
 $i=1;
  while($data=mysqli_fetch_assoc($run)) { ?> 
    <tr>
      <th scope="row"><?php echo $i; $i++;  ?></th>
      <th scope="row"><?php echo $data['name']; ?></th>
      <th scope="row"><?php echo substr($data['pno'],5); ?>XXXXX</th>
      </tr>
   <?php  }
   } ?>
  </tbody>
 </table>
<br><center><?php include('rel-offer.php'); ?></center>
<?php include('footer.php'); ?>

    </body>
</html>
