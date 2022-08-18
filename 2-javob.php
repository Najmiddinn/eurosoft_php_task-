<?php

$api_url = "https://api.github.com/user";

function getData($url){
    $ch = curl_init();

    // $dataArray = ['page' => 2];
    // $data = http_build_query($dataArray);
  
    // $getUrl = $url."?".$data;
    $headers = array(
        "Accept: application/json",
    );
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 80);
       
    $response = curl_exec($ch);
        
    if(curl_error($ch)){
        echo 'Request Error:' . curl_error($ch);
    }
       
    curl_close($ch);
    return json_decode($response, true);

}   
echo '<pre>';
$res = getData($api_url);
var_dump($res);

// $getUrlData = getUrl($api_url);
// $data = [];
// foreach ($getUrlData as $item) {
// 	$data[]=$item;
// }

// print_r($data);



// $url = "https://reqbin.com/echo/get/json";

// $curl = curl_init($url);
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// $headers = array(
//    "Accept: application/json",
// );
// curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
// //for debug only!
// curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
// curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

// $resp = curl_exec($curl);
// curl_close($curl);
// var_dump($resp);
