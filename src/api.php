<?php

require_once("../vendor/autoload.php");

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$sampleData = [
  "id"=> 1,
  "title"=> "Sample post",
  "body"=> "this is a sample sey post content body kankalarim",
  "userId"=> 1,
];

if($_SERVER['REQUEST_METHOD'] == 'GET') {
  echo json_encode($sampleData);
}
else {
  http_response_code(405);
  echo json_encode(['error' => 'method not allowed']);
}