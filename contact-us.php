<!DOCTYPE html>
<html>
<head>

	<title>Contact Us</title>
       
</head>
<body >
	
	 
<?php include('header.php'); ?>
 <?php if(isset($_REQUEST['msg'])){

    ?>
<!--display When then payment is success-->
<div style="margin:20px;" class="alert alert-success">
  <div class="alert-heading">
   Message
  </div>
  <hr>
<?php echo $_REQUEST['msg']; ?>
</div><?php } ?>

 <form action="contact-us.php" method="post" class="alert alert-secondary" style="margin:30px;padding:20px;">
     <center>      <h3 class=" alert-heading">Contact-Us Form</h3>
         <hr>
        
  <div class="form-group" >
    <label for="exampleFormControlInput1">Full Name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="RAM" required="">
  </div>
  <div class="form-group" >
    <label for="exampleFormControlInput1">Mobile Number</label>
    <input type="text" name="mobno" class="form-control"  placeholder="9999999999" required="">
  </div>
  <div class="form-group" >
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
     <input type="submit" class="btn btn-success" value="Send Message" name="submit"> 
</form>
<br>


</body>
</html>

<?php 
if(isset($_POST['submit'])){
    include('dbcon.php');

    $name=$_POST['name'];
    $mobno=$_POST['mobno'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $query="INSERT INTO `query`(`name`, `mobno`, `email`, `message`) VALUES ('$name','$mobno','$email','message')";
    $run=mysqli_query($con,$query);
    if($run == TRUE){
     header('location:contact-us.php?msg=Your Query Has Been Successfully Taken. We Will Response You Shortly');
     }
}
 ?>