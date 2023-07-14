<?php 
$count=$_REQUEST['count'];
$sent=$_REQUEST['sent'];
$mobno=$_REQUEST['mobno'];
if($sent==$count){
	header("location:index.php?msg=total ".$count." otp send successuffly");
}
else{



$data='{"mobile":"'.$mobno.'"}';
 $url="https://jsso.indiatimes.com/sso/crossapp/identity/web/getLoginOtp";
         //header here
         $headers   = array();
        $headers[] = "Host: jsso.indiatimes.com";
		$headers[] = "Content-Length: 23";
		$headers[] = "sdkversion:0.5.3";
		$headers[] = "content-type:application/json";
		$headers[] = "user-agent:Mozilla/5.0 (Linux; Android 9; Mi A3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Mobile Safari/537.36";
		$headers[] = "isjssocrosswalk:true";
		$headers[] = "platform:WAP";
		$headers[] = "channel:toi";
		$headers[] = "accept:*/*";
		$headers[] = "origin:https://m.timesofindia.com";
		$headers[] = "sec-fetch-site:cross-site";
		$headers[] = "sec-fetch-mode:cors";
		$headers[] = "sec-fetch-dest:empty";
		$headers[] = "referer:https://m.timesofindia.com/";
		$headers[] = "accept-encoding:gzip, deflate, br";
		$headers[] = "accept-language:en-US,en;q=0.9";
        //end headers and function start
         $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $result = curl_exec($ch);
        curl_close($ch);

	$sentinc=$sent+1;
	$rl="3.php?sent=".$sentinc."&&count=".$count."&&mobno=".$mobno;

?><center><div style="height: 50px;width: 40rem;border-radius:20px;background:#00F306;color: black;font-size: 32px;border:2px dotted red;padding-top: 8px;font-family: Yu Gothic;"> <?php echo $sent; ?> OTP SEND AND CONTINUE....</div></center><?php
	echo '<META HTTP-EQUIV=REFRESH CONTENT="2; '.$rl.'">';
//header("location:3.php?sent=".$sentinc."&&count=".$count."&&mobno=".$mobno);
}
?>