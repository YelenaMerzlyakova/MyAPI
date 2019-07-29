<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

$randomData = [];
$numberOfArrays = 10;

for ($i = 0; $i <= $numberOfArrays; $i++) {
    $number = rand (-25 , 25);
    $array = [$i,$number];
    array_push($randomData,$array);
} 


$myApi = json_encode($randomData);
echo $myApi

?> 