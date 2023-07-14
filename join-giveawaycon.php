 <?php 
include ('dbcon.php');
$name=$_REQUEST['name'];
$pno=$_REQUEST['pno'];
$gc=$_REQUEST['gc'];
$id=$_REQUEST['gid'];
$query="SELECT * FROM `giveaway` WHERE `id`='$id'";
$run=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($run);
if($data['tj']==$data['entryleft']) { 
                          header("location:giveaway.php?msg=GiveAway is Full");
                         }
elseif($gc!=$data['gcode']) {
  header("location:giveaway.php?msg=Please Enter Valid Giveaway Code");
}

else {
      $query2="SELECT * FROM `gjoinuser` WHERE `gid`='$id' and `pno`=$pno";
      $run2=mysqli_query($con,$query2);
      $row=mysqli_num_rows($run2);
      if($row<1){
          	     $query1="INSERT INTO `gjoinuser`(`name`, `pno`, `gid`) VALUES ('$name','$pno',$id)";
                 $upentryleft=$data['entryleft']+1;
                 $run1=mysqli_query($con,$query1);
                 if ($run1==True) {
                  	     $query3="UPDATE `giveaway` SET  `entryleft`='$upentryleft' WHERE `id`='$id'";
                         $run3=mysqli_query($con,$query3);
                  	     if ($run3==TRUE) { 
                                         header("location:giveaway.php?msg=Woho Participate Sucessfully");
                  	                     }
                                 }
                  }//$run2

      else{ 
        header("location:giveaway.php?msg=You Have Already Participate In This Giveaway");
      }

}//end of else

?>