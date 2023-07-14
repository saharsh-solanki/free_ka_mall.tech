
<!DOCTYPE html>
<html>
<head>
	<title>ONLINE SCRIPT </title>
	
	<meta name="description" content="online script of many website so you can earn money with doing any work">
<meta name="abstract" content="online script of many website so you can earn money with doing any work">
<meta name="topic" content="online earning , online script, sms bomber , giveaway">
<meta name="keywords" content="online script of android apps">
</head>
<body>

<?php include('../header.php'); ?>
<center>
	 <div   class="card text-black  mb-3" style="width: 80%;">
 <div class="card-header"><h3 style="font-family: Consolas">Wel-Come To Paytm Badshah</h3></div>
</div>

	<div  class="card secondary mb-3" style="margin-left:10%;border: 5px solid #dc3545;width: 80%;float: left;">
      <div style="border-bottom: 5px solid #dc3545;" class="text-white card-header bg-danger"><h4> Availabe online scipt</h4></div>
      <div class="card-body text-secondary">
 <ol style="float: left;">

 <?php 
     include('../dbcon.php');
     $query="SELECT * FROM `os` ORDER BY `scriptid` DESC";
     $run=mysqli_query($con,$query);
     $row=mysqli_num_rows($run);
     if($row<1){ ?>
      
      <script type="text/javascript">
        alert('No Script Found !!');
      window.open('index.php','_self');
      </script>
  <?php }//end of if
 
 else{
  while($data=mysqli_fetch_assoc($run)) { ?>

 	<li style="font-size: 20px;"><?php echo $data['tittle']; ?> <a class="btn btn-success" href="<?php echo $data['pagename']; ?>">Click Here</a><br><br></li>
 <?php }} ?>

 </ol>
      </div>
       
</div> 
    </div><br><br><br><br><br><br><br><br><br><br><br>
    
<?php include('../rel-offer.php'); ?><br><br>
 <script type="text/javascript">(function() {var script=document.createElement("script");script.type="text/javascript";script.async =true;script.src="//telegram.im/widget-button/index.php?id=@paytmbadshah";document.getElementsByTagName("head")[0].appendChild(script);})();</script> <a href="tg://resolve?domain=paytmbadshah" target="_blank" class="telegramim_button telegramim_shadow telegramim_pulse"
style="font-size:18px;max-width:300px;background:#27A5E7;box-shadow:1px 1px 5px #27A5E7;color:#ffffff;border-radius:50px;" title="Join Now"><i></i> Join Paytm Badshah telegram<small><span class="telegramim_count" data-for="@paytmbadshah">...</span> Subscriber</small></a> <br>
<?php include('../footer.php'); ?>
</body>
</html>