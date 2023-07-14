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
        <style>
            .cdbtn{
                courser:pointer;
                margin: auto;
                height: 40px;
                width: 360px;
               
                font-family:Comic Sans MS;
                font-size: 25px;
                background-color: #ff33cc; 
                color:white;
                border-radius: 80px;
                padding-top: 3px;
                    }
        </style>
    </head>
    <body>        
        <?php 
        ob_start();
        include ('header.php');
         
         ?><br>
                       
        <form class="form-register" action="add-giveaway.php" method="POST">

            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Add GiveAway</h1>
                    </div>


                    <div class="form-row">
                        <label>
                            <span>Total Joinner</span>
                            <input type="text" name="tj" required="">
                        </label>
                    </div>
                   
                    <div class="form-row">
                        <label>
                            <span>Enter Win Amount</span>
                            <input type="text" name="winamt" required="">
                        </label>
                    </div>
                    
                    
                    <div class="form-row">
                        <label>
                            <span>Enter GiveAway Code</span>
                            <input type="text" name="gc" required="">
                        </label>
                    </div>
                    
                    <div class="form-row">
                        <button type="submit" name="submit">Add GiveAway</button>
                    </div>
                    
            </div></form>
    </body>
</html>

<?php 
if(isset($_POST['submit'])){
    include('../dbcon.php');

    $tj=$_POST['tj'];
    $winamt=$_POST['winamt'];
    $gc=$_POST['gc'];
  
    $query="INSERT INTO `giveaway`(`tj`, `winamt`, `gcode`) VALUES ('$tj','$winamt','$gc')";
    $run=mysqli_query($con,$query);
    if($run == TRUE){
     ?>
      <script type="text/javascript">
        alert('Give-Away Created Scuccssfully !! ');
      window.open('add-giveaway.php','_self');
      </script>
    <?php }
}
 ?>