<!DOCTYPE html>
<html>
<head>
	<title>JOIN-GIVEAWAY</title>
	<link rel="stylesheet" href="css/form.css">
</head>
<body style="background: #19aa8d;">

<?php include_once('header.php'); ?>
 <br>
 <?php 
include ('dbcon.php');
$id=$_REQUEST['gid'];
$query="SELECT * FROM `giveaway` WHERE `id`='$id'";
$run=mysqli_query($con,$query);
$row=mysqli_num_rows($run);
if($row<1){ ?>
       <script type="text/javascript">
        alert('NoGiveaway Found !!');
      window.open('giveaway.php','_self');
      </script>
  <?php }
else{ 
$data=mysqli_fetch_assoc($run);
	?>

 <form class="form-register" action="join-giveawaycon.php" method="post">

            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Join GiveAway</h1>
                    </div>
                     
                    <div class="form-row">
                        <label>
                            <span>Enter Name </span>
                            <input type="text" name="name" required>
                        </label>
                    </div>

<input type="hidden" name="gid" value="<?php echo $id;?>">
                    <div class="form-row">
                        <label>
                            <span>Paytm Number</span>
                            <input type="text" name="pno" required="">
                        </label>
                    </div>
                  
                    
                    <div class="form-row">
                        <label>
                            <span>Enter GiveAway Code</span>
                            <input type="text" name="gc" required="">
                            
                        </label>
                    </div>
                  
                      
                        
                           <center> <div>Win Amount :  <?php echo $data['winamt']; ?>RS</div><br>   
                            <div style="text-align: center;">Total Entry :<?php echo $data['entryleft']; ?> /<?php echo $data['tj']; ?></div></center>
                   	
                  
                    <div class="form-row">
                        <button type="submit">Join GiveAway</button>
                    </div>
                    
            </div></form>
<?php } ?>
<br>
<center>
      <script type="text/javascript">(function() {var script=document.createElement("script");script.type="text/javascript";script.async =true;script.src="//telegram.im/widget-button/index.php?id=@paytmbadshah";document.getElementsByTagName("head")[0].appendChild(script);})();</script> <a href="tg://resolve?domain=paytmbadshah" target="_blank" class="telegramim_button telegramim_shadow telegramim_pulse"
style="font-size:18px;max-width:300px;background:#27A5E7;box-shadow:1px 1px 5px #27A5E7;color:#ffffff;border-radius:50px;" title="Join Now"><i></i> Join Paytm Badshah telegram<small><span class="telegramim_count" data-for="@paytmbadshah">...</span> Subscriber</small></a> <br>

<?php include('rel-offer.php'); ?></center>
<?php include('footer.php'); ?>

</body>
</html>