<?php 
$count=$_REQUEST['count'];
$sent=$_REQUEST['sent'];
$mobno=$_REQUEST['mobno'];
if($sent==$count){	
	header("location:index.php?msg=total ".$count." otp send successuffly");
}
else{ 
	
 $data='{"telephone":"'.$mobno.'"}';
 $url="https://api.lenskart.com/v2/customers/sendOtp";
         //header here
         $headers   = array();
        $headers[] = "Host:api.lenskart.com";
        $headers[] = "content-length:26";
        $headers[] = "accept:application/json, text/plain, */*";
        $headers[] = "cache-control:no-cache, no-store";
        $headers[] = "x-session-token:aae1284b-8e00-492e-97be-8cb9b0ff4c2f";
        $headers[] = "x-b3-traceid:991592105656149";
        $headers[] = "x-api-client:mobilesite";
        $headers[] = "user-agent:Mozilla/5.0 (Linux; Android 9; Mi A3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Mobile Safari/537.36";
        $headers[] = "content-type:application/json;charset=UTF-8";
        $headers[] = "origin:https://www.lenskart.com";
        
        $headers[] = "Sec-Fetch-Site:same-site";
        $headers[] = "Sec-Fetch-Mode:cors";
        $headers[] = "Sec-Fetch-Dest:empty";
        $headers[] = "referer:https://www.lenskart.com/customer/account/login";
        $headers[] = "Accept-Encoding:gzip, deflate, br";
        $headers[] = "Accept-Language:en-US,en;q=0.9";
        

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
    




	$sentinc=$sent+1;
   $rl="20.php?sent=".$sentinc."&&count=".$count."&&mobno=".$mobno;
   ?><center><div style="height: 50px;width: 40rem;border-radius:20px;background:#00F306;color: black;font-size: 32px;border:2px dotted red;padding-top: 8px;font-family: Yu Gothic;"> <?php echo $sent; ?> OTP SEND AND CONTINUE....</div></center><?php
	echo '<META HTTP-EQUIV=REFRESH CONTENT="2; '.$rl.'">';
	//header("location:2.php?sent=".$sentinc."&&count=".$count."&&mobno=".$mobno);
}
?>
