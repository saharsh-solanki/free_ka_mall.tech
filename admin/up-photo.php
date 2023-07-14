<?php 

 
include ('../dbcon.php');

    $id=$_REQUEST['id'];
   
    $imagename=$_FILES['image']['name'];
    $tempimagename=$_FILES['image']['tmp_name'];
    move_uploaded_file($tempimagename, "../offerimage/$imagename");

     $query="UPDATE `offer` SET `photo`='$imagename' WHERE `offerid`='$id'";
     $run=mysqli_query($con,$query);
     if($run==true){
     	 ?>
      <script type="text/javascript">
        alert('image Updated Successfully !! ');
      window.open('up-offer.php?id=<?php echo $id; ?>','_self');
      </script>
    <?php
     }
     else{
     	 ?>
      <script type="text/javascript">
        alert('Error Occured !! ');
      window.open('up-offer.php?id=<?php echo $id; ?>','_self');
      </script>
    <?php
     }


?>