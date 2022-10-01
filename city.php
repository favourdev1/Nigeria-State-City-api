<?php
// use StateApi\StateApi;

use StateApi\StateApi;

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Request-Method: GET");

include_once("include/autoloader.php");


$state =  $_GET['state'] ?? '';

$stateObj = new StateApi();
if (!empty($state)) {
    $result['city'] = array();
    $result['state'] = $state;
    $cityResp = $stateObj->getcity($state);


    if (count($cityResp) < 1) {
        $result['state'] = "No state in Nigeria called " . $state;
    } else {
        foreach ($cityResp as $key => $value) {
            array_push($result['city'], $value['city']);
        }
    }


    print_r(json_encode($result));
    die;
}


$result = array();
http_response_code(400);
$result['error']= 'No parameter provided. you need to provide a state parameter';

print_r(json_encode($result));

