
<?php 

 $id=$_REQUEST['id'];
     include('../dbcon.php');
     $query="DELETE FROM `offer` WHERE `offerid`='$id'";
     $run=mysqli_query($con,$query);
     if($run==true){
     	?>
      <script type="text/javascript">
        alert('Articles Deleted Successfully!! ');
      window.open('view-offer.php','_self');
      </script>
    <?php
     }

?>