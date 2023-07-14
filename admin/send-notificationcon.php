<?PHP

function sendMessage($app_id,$message,$tittle) {
    $content      = array(
        "en" => $message
    );
    $headings      = array(
        "en" => $tittle
    );
    $fields = array(
        'app_id' => $app_id,
        'included_segments' => array(
            'All'
        ),
        'data' => array(
            "foo" => "bar"
        ),
        'contents' => $content,
        'headings' => $headings
        
    );
    
    $fields = json_encode($fields);
    print("\nJSON sent:\n");
    print($fields);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Basic ZGM2Yzc2YTktOTRjZi00NDQwLWFjMWMtZjcwNDYyNjg4YTkw'
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    return $response;
}
if(isset($_POST['submit'])){
$app_id="37b4abb9-5faa-47fa-839b-35486ecba0f4";
$message=$_POST['message'];
$tittle=$_POST['tittle'];
$response = sendMessage($app_id,$message,$tittle);
$return["allresponses"] = $response;
$return = json_encode($return);

$data = json_decode($response, true);


$id = $data['id'];
header("location:send-notification.php?msg=Notification send sucessfull <br> Total Persone Recived= ".$data['recipients']."<br> ANd id is ".$id);


}
?>