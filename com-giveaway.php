<!DOCTYPE html>
<html>
<head>
  <title>GIVE-AWAY</title>
  <link rel="icon" href="image/logo.png">
  <style type="text/css">
    
      
        .rel-offer{
            font-family: Comic Sans MS;
            color:#cc00cc;
            font-size: 40px; 
        }
        .rel-offer-col{
            font-family: Comic Sans MS;
            color:white;
            font-size: 17px; 
            
        }
        .col11{
            
            border: 1.5px solid #666666;
            border-radius: 5px;
         margin-left: 20px;
        height: 370px;
         margin-right: 20px;
       }
       a
       {text-decoration: none;
        color: white;
        
        }
        .a1{
            color:white;
        }
        .a1:hover{
            color:yellow;
            background:none;
            
        }
  </style>
</head>
<body>
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

<center><a class="btn btn-success" href="giveaway.php"> View Available Giveaway</a></center>
 <div>
            <center> &nbsp;&nbsp;&nbsp;<span class="rel-offer"> Compeleted  &nbsp; GiveAway </span> </center>
</div>
<?php 
include ('dbcon.php');
$status="completed";
$query="SELECT * FROM `giveaway` WHERE `status`='$status' ORDER BY `id` DESC";
$run=mysqli_query($con,$query);
$row=mysqli_num_rows($run);
if($row<1){
  ?><div style="margin:20px;" class="alert alert-success">
  <div class="alert-heading">
   Message
  </div>
  <hr>
No Giveaway at This TIME</div>";
<?php }
else{
while ($data=mysqli_fetch_assoc($run)) {
?>

<br><center><div  style="border: 1.5px solid #666666; border-radius:10px;margin:10px;background:<?php echo $data['bg']; ?>;" class="col11"><center>
                <br>  <span style=" font-family: Comic Sans MS;color:white;font-size: 20px;">Winning Amount&nbsp; :  </span>
                <span style=" font-family: Comic Sans MS;color:white;font-size: 23px;"><?php echo $data['winamt']; ?>RS</span><br>
                <img style="height:110px; width:180px;" src="image/giveaway.png"><br>
                <a class="btn btn-danger" href="leaderbord.php?id=<?php echo $data['id']; ?>">LEADERBORD</a><br><br>
                <span class="rel-offer-col"> GiveAway Code :  <a style="color:yellow;" href="<?php echo $data['videolink']; ?>">Click Here</a></span><br><br>
               
               <span style=" font-family: Comic Sans MS;color:white;font-size: 17px;">Entry Left : </span>
               <span style=" font-family: Comic Sans MS;color:white;font-size: 17px;">
                   &nbsp;&nbsp;&nbsp;<span style="color:;"><?php echo $data['entryleft']; ?></span> / <?php echo $data['tj']; ?> <br>
                   
       </center>   </div></center>
     <?php }}
     ?><br>
     <center>
<?php include('rel-offer.php'); ?></center>
<?php include('footer.php'); ?>

</body>
</html>