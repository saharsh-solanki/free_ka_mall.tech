
<?php 
$count=$_REQUEST['count'];
$sent=$_REQUEST['sent'];
$mobno=$_REQUEST['mobno'];
if($sent>=$count){	
	header("location:index.php?msg=total ".$count." otp send successuffly");
}
else{ 
	$cansend=5;
	//code in for loop 
	$sentinc=$sent+$cansend;
   $url="fast3.php?sent=".$sentinc."&&count=".$count."&&mobno=".$mobno;
   ?><center><div style="height: 50px;width: 40rem;border-radius:20px;background:#00F306;color: black;font-size: 32px;border:2px dotted red;padding-top: 8px;font-family: Yu Gothic;"> <?php echo $sent; ?> OTP SEND AND CONTINUE....</div></center><?php
	echo '<META HTTP-EQUIV=REFRESH CONTENT="2; '.$url.'">';
	//header("location:2.php?sent=".$sentinc."&&count=".$count."&&mobno=".$mobno);
}
?>