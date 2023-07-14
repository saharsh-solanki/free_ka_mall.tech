<!DOCTYPE html>
<html>
    <head>
 <link rel="icon" href="logo.png">
</head>
<body style="background: #eee;">
    
   
<?php include('header.php'); ?>
    
<br>
<center>
<h3>All Articles</h3>
<table align="center" cellpadding="3">
    <?php 
     include('dbcon.php');
     $query="SELECT * FROM `offer` ORDER BY `offerid` DESC";
     $run=mysqli_query($con,$query);
     $row=mysqli_num_rows($run);
     if($row<1){ ?>
      
      <script type="text/javascript">
        alert('No offer Found !!');
      window.open('index.php','_self');
      </script>
  <?php }//end of if
 
 else{
  while($data=mysqli_fetch_assoc($run)) { ?>
  <tr>
    <td><a href="article/<?php echo $data['url']; ?>"><img src="offerimage/<?php echo $data['photo']; ?>"  style="width: 100px;"></a></td>
    <td><a style="text-decoration: none;" href="article/<?php echo $data['url']; ?>"><span style="font-weight: bold;"><?php echo $data['offername']; ?></span></a>
    <p style="font-size: 10px;"><?php echo $data['tittle']; ?> </p>
   </td>
  </tr>
<?php }
} ?>
</table>
</div>
</div>
<br>
<script type="text/javascript">(function() {var script=document.createElement("script");script.type="text/javascript";script.async =true;script.src="//telegram.im/widget-button/index.php?id=@paytmbadshah";document.getElementsByTagName("head")[0].appendChild(script);})();</script> <a href="tg://resolve?domain=paytmbadshah" target="_blank" class="telegramim_button telegramim_shadow telegramim_pulse"
style="font-size:18px;max-width:300px;background:#27A5E7;box-shadow:1px 1px 5px #27A5E7;color:#ffffff;border-radius:50px;" title="Join Now"><i></i> Join Paytm Badshah telegram<small><span class="telegramim_count" data-for="@paytmbadshah">...</span> Subscriber</small></a> <br>


<div class="card text-white bg-danger mb-3" style="width: 80%;">
  <div class="card-body">
    <h5> Created By : - Paytm Badshah </h5>
  </div>
</div>
<?php include('rel-offer.php'); ?>
<?php include('footer.php'); ?>

</body>
</html>