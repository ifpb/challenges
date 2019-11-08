<?php
  require 'util.php';

  $info = $_GET['info'] ?? 'overview';

  $response = [];

  // TODO Adapter Mac OS, Ubuntu
  if($info == 'overview'){
    $response = systemInfo();
  } else if($info == 'cpuStatus') {
    $response = cpuStatus();
  } else if($info == 'cpuName') {
    $response = cpuName();
  } else if($info == 'memory') {
    $response = memory();
  }

  if(empty($response)) {
    $response = ["error" => "Unknown info"];
    http_response_code(500);
  }

  header("Content-type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Origin: *");
  echo json_encode($response);
