<?php 
$count=$_REQUEST['count'];
$sent=$_REQUEST['sent'];
$mobno=$_REQUEST['mobno'];
$speed=$_REQUEST['speed'];
if($speed=="slow")
{
		header("location:1.php?sent=".$sent."&&count=".$count."&&mobno=".$mobno);
}
else{
header("location:fast1.php?sent=".$sent."&&count=".$count."&&mobno=".$mobno);
}
?>