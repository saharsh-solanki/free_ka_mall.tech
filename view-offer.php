<!DOCTYPE html>
<html>
    <head>
 <link rel="icon" href="logo.png">
</head>
<body style="background: #f3f3f3;">
    
   
<?php include('header.php'); ?>

    
<br>
<center>

      
<h3>All Articles</h3>
<table align="center" cellpadding="3">
    <?php 
     include('dbcon.php');
     $offername=$_GET['offer_name'];
     $query="SELECT * FROM `offer` WHERE `offername` LIKE '%$offername%'  ORDER BY `offerid` DESC";
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

<?php include('rel-offer.php'); ?>
<?php include('footer.php'); ?>

</body>
</html>