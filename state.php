<?php 
use StateApi\StateApi;

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Request-Method: GET");

include_once("include/autoloader.php");

$city = $_GET['city']??'';
$state =  $_GET['state']??'';


$state = new StateApi();
if(empty($city)){
print_r( json_encode($state->getAllState()));

}


?>