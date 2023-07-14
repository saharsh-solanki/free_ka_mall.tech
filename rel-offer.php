

  
<?php 
 include('dbcon.php');
     $query="SELECT * FROM `offer` ORDER BY `offerid` DESC LIMIT 5";
     $run=mysqli_query($con,$query);
     $row=mysqli_num_rows($run);
     if($row<1){  }//end of if
 else{
 	 ?>
   	<div class="list-group" style="width: 80%" >
  <a href="#"  class="list-group-item list-group-item-action active">
  <h5>Latest offer </h5>
    </a>
 	 <?php
      while($data=mysqli_fetch_assoc($run)) { ?></a>
  
  <a href="article/<?php echo $data['url']; ?>" class="list-group-item list-group-item-action">
    <?php echo $data['offername']; ?>
  </a>

 
<?php }
?></div><?php
} ?>
