<?php
// use StateApi\StateApi;

use StateApi\StateApi;

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Request-Method: GET");

$result = array();
http_response_code(406);
$result['error']= 'opps! seems you\'re in the wrong place. Please use the correct documentation to access this api';

print_r(json_encode($result));
