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
        <link rel="stylesheet" href="../css/form.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ADD OFFER</title>
    </head>
    <body >
        <?php include ('header.php'); ?><br>
        <form class="form-register" action="add-os.php" method="POST" enctype="multipart/form-data">

            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Add online Script</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Script Tittle</span>
                            <input type="text" name="tittle" required>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Script Page Name</span>
                            <input type="text" name="pagename" required="">
                        </label>
                    </div>
                    
                    <div class="form-row">
                        <button type="submit" name="submit">Add offer</button>
                    </div>
                    
                <a href="getodcode.jsp" class="form-log-in-with-existing">Get Code For offer Discription  &rarr;</a>

            </div></form>
    </body>
</html>
<?php 
if(isset($_POST['submit'])){
    include('../dbcon.php');

    $tittle=$_POST['tittle'];
    $pagename=$_POST['pagename'];
    
    
    $query="INSERT INTO `os`(`tittle`, `pagename`) VALUES ('$tittle','$pagename')";
    $run=mysqli_query($con,$query);
    if($run == TRUE){
     ?>
      <script type="text/javascript">
        alert('Script added Scuccssfully !! ');
      window.open('add-os.php','_self');
      </script>
    <?php }
}
?>