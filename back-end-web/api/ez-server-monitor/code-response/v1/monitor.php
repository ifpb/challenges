<?php
  require 'util.php';

  $info = $_GET['info'] ?? 'system';

  $response = [];

  // TODO Adapter Mac OS, Ubuntu
  if($info == 'system'){
    $response = systemInfo();
  } else if($info == 'network') {
    $response = networkInfo();
  } else if($info == 'memory') {
    $response = memoryInfo();
  } else if($info == 'service') {
    $response = serviceStatus();
  } else if($info == 'disk') {
    $response = diskInfo();
  }

  if(empty($response)) {
    $response = ["error" => "Unknown info"];
    http_response_code(500);
  }

  header("Content-type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Origin: *");
  echo json_encode($response);
