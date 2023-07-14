<?php



    
    $no=$_REQUEST['mobno'];
    $sms_count=$_REQUEST['sms-count'];
    $speed=$_REQUEST['speed'];
if($speed=="slow"){
	for ($i = 0; $i < $sms_count; $i++) {
	
	}
else {
    
    }    
    /* for ($i = 0; $i < 10; $i++) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api2.paisabazaar.com/BSP/api/v1/visitor");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"visitId\":\"xxxxxxxx-2a35-4003-a03c-83d075622687\",\"mobileNumber\":\"$no\"}");
        curl_setopt($ch, CURLOPT_POST, 1);
        
        $headers   = array();
        $headers[] = "Host: api2.paisabazaar.com"; */
       // $headers[] = "Accept: application/json, text/plain, */*";
        /* $headers[] = "Accept-Language: en-US,en;q=0.5";
        $headers[] = "Accept-Encoding: gzip, deflate";
        $headers[] = "Referer: https://creditreport.paisabazaar.com/bureau/login?utm_source=pb_header_signin_veto";
        $headers[] = "Content-Type: application/json;charset=utf-8";
        $headers[] = "Content-Length: 78";
        $headers[] = "Origin: https://creditreport.paisabazaar.com";
        $headers[] = "Connection: close";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        for ($j = $i; $j < 30; $j++) {
        }
    print_r($jeson);
    print_r($result);
    } */
?>
