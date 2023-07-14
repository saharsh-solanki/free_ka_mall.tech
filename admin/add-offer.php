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
        <form class="form-register" action="add-offer.php" method="POST" enctype="multipart/form-data">

            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Add offer</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>offer Name</span>
                            <input type="text" name="on" required>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>offer Discription</span>
                            <input type="text" name="od" required="">
                        </label>
                    </div>
                    
                     <div class="form-row">
                        <label>
                            <span>Tittle</span>
                            <input type="text" name="tittle" required>
                        </label>
                    </div>
                    
                    <div class="form-row">
                        <label>
                            <span>Enter Aliasa</span>
                            <input type="text" name="url" required>
                        </label>
                    </div>

                     <div class="form-row">
                        <label>
                            <span>Chose Photo</span>
                            <input type="file" name="image" required>
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
    ob_start();
    include('../dbcon.php');
    $alisa=$_POST['url'];
    $alisa=str_replace(" ","-",$alisa);
    $offername=$_POST['on'];
    $offerdis=$_POST['od'];
    $offerdis=str_replace("'","(sic);",$offerdis);
    $tittle=$_POST['tittle'];
    $date=date("d F,Y");
    $imagename=$_FILES['image']['name'];
    $tempimagename=$_FILES['image']['tmp_name'];
    move_uploaded_file($tempimagename, "../offerimage/$imagename");

    $query="INSERT INTO `offer`(`offername`, `tittle`, `photo`, `offerdis`,`date` ,`url`) VALUES ('$offername','$tittle','$imagename','$offerdis','$date','$alisa')";
    $run=mysqli_query($con,$query);
    if($run == TRUE){
     ?>
      <script type="text/javascript">
        alert('offer added Scuccssfully !! ');
      window.open('add-offer.php','_self');
      </script>
    <?php }
    else{
        ?>
      <script type="text/javascript">
        alert('Error Occured !! ');
      window.open('add-offer.php','_self');
      </script>
    <?php
    }
}
?>