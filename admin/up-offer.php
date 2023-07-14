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
    <div style="height: 40px;font-size: 25px;" class="bg-danger text-white "><center>Update Article</center></div> 
    <?php 
    $offerid=$_REQUEST['id'];
     include('../dbcon.php');
     $query="SELECT * FROM `offer` WHERE `offerid`='$offerid'";
     $run=mysqli_query($con,$query);
     if ($run == TRUE) {
     	$data=mysqli_fetch_assoc($run);
     ?><center>
     <form style="width:80%;" action="up-offer.php">
     	<input type="hidden" name="id" value="<?php echo $offerid=$_REQUEST['id']; ?>">
     	<div class="form-group">
	    <label for="exampleInputEmail1">Article Name</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data['offername']; ?>" name="on">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Article Tittle</label>
	    <input type="text" class="form-control" name="tittle" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data['tittle']; ?>">
	  </div>
	  
	   <div class="form-group">
	    <label for="exampleInputEmail1">Article Alisa</label>
	    <input type="text" class="form-control" name="url" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data['url']; ?>">
	  </div>


	   <div class="form-group">
	    <label for="exampleFormControlTextarea1">Article Discription</label>
	    <textarea class="form-control" name="offerdis" id="" rows="10" ><?php   echo str_replace("(sic);","'",$data['offerdis']); ?></textarea>
	  </div><br>

       

     <input type="submit" name="submit" class="btn btn-primary" style="width:50%;"><br><br><br>
 <?php } ?>
     </form><br><br>

    <div style="height: 40px;font-size: 25px;" class="bg-dark text-white "><center>Update offer</center></div>  
     <form style="width:80%;" action="up-photo.php" method="POST" enctype="multipart/form-data">
     	<input type="hidden" name="id" value="<?php echo $offerid=$_REQUEST['id']; ?>">
     <div class="form-group">
    <label for="exampleFormControlFile1">New Photo</label>
    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
  </div>
       <label for="exampleFormControlFile1">Chosen Photo</label>
	  <img style="height: 100px; width:250px;" src="../offerimage/<?php echo $data['photo']; ?>"><br><br>

	   <input type="submit"   class="btn btn-primary" style="width:50%;"><br><br><br>
	</form>
 </body>
</html>

<?php 
if (isset($_REQUEST['submit'])){
 
include ('../dbcon.php');
    $id=$_REQUEST['id'];
    $offername=$_REQUEST['on'];
    $tittle=$_REQUEST['tittle'];
    $alisa=$_REQUEST['url'];
    $alisa=str_replace(" ","-",$alisa);
    $offerdi=$_REQUEST['offerdis'];
    $offerdis=str_replace("'","(sic);",$offerdi);
     $query1="UPDATE `offer` SET `offername`='$offername',`tittle`='$tittle',`offerdis`='$offerdis',`url`='$alisa' WHERE `offerid`='$id'";
     $run1=mysqli_query($con,$query1);
     if($run1==true){
     	 ?>
      <script type="text/javascript">
        alert('Updated Successfully !! ');
      window.open('up-offer.php?id=<?php echo $offerid; ?>','_self');
      </script>
    <?php
     }
     else{
     	 ?>
      <script type="text/javascript">
        alert('Error Occured !! ');
      window.open('up-offer.php?id=<?php echo $offerid; ?>','_self');
      </script>
    <?php
     }

}
?>
