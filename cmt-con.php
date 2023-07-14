<?php include('dbcon.php');

    $offerid=$_REQUEST['offerid'];
    $comment=$_REQUEST['comment'];
    
    $date=date("F d , Y");
    $query="INSERT INTO `comment`(`offerid`, `comment`, `date`) VALUES ('$offerid','$comment','$date')";
    $run=mysqli_query($con,$query);
    if($run == TRUE){
     ?>
      <script type="text/javascript">
        alert('Your Comment is Succssfully Posted !! ');
      window.open('article/<?php echo $offerid; ?>','_self');
      </script>
    <?php }
    else{
     ?>
      <script type="text/javascript">
        alert('error  !! (dont include any symbole) ');
      window.open('article/<?php echo $offerid; ?>','_self');
      </script>
    <?php } 
    ?>