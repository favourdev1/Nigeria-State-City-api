<?php
// use StateApi\StateApi;

use StateApi\StateApi;

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Request-Method: GET");

include_once("include/autoloader.php");

$mode = $_GET['mode'] ?? '';
$stateObj = new StateApi();
$result = array();
switch ($mode) {
    case "code":
        $res = $stateObj->getAllState();
        $result['state_code'] = array();
        foreach ($res as $key => $value) {
          

            array_push($result['state_code'], $value['state_code']);
        }
        break;
    case "state":
        $res = $stateObj->getAllState();
        $result['state'] = array();

        foreach ($res as $key => $value) {
            array_push($result["state"], $value['state']);
        }

        break;

    default:

        $result = $stateObj->getAllState();
        break;
}


print_r(json_encode($result));
