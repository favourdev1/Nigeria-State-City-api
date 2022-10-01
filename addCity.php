<?php

use StateApi\StateApi;

include_once("include/autoloader.php");
$arr = array();
$arr = json_decode('[
    "Bakura",
    "Birnin Magaji/Kiyaw",
    "Bukkuyum",
    "Bungudu",
    "Gummi",
    "Gusau",
    "Kaura Namoda",
    "Maradun",
    "Maru",
    "Shinkafi",
    "Talata Mafara",
    "Chafe",
    "Zurmi"
  ]',true);





$state = new StateApi();

foreach ($arr as $key => $value) {
    $state->addCity('Zamfara',$value);
print_r($value);
}
// print_r( json_encode($state->getAllState()));

// var_dump(json_encode($arr[0]));
// print_r( array_keys($arr[0]));
