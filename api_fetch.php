<?php

$api_url = 'https://api.example.com/data';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if(curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

curl_close($ch);

// $response contains the API response data
echo $response;

?>


<!-- //jhbgyuvtucrtctycv yiv gujb  -->
