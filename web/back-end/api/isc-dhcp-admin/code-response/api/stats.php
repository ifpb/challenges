<?php
$stats = [];
$dhcpdLeases = `dhcp-lease-list --parsable`;

$pattern = "/MANUFACTURER (.*)?/";
preg_match_all($pattern, $dhcpdLeases, $match);

$manufacturers = [];
foreach ($match[1] as $manufacturer) {
  $m = $manufacturer === '' ? 'others' : $manufacturer;
  if (isset($manufacturers[$m])) {
    $manufacturers[$m] += 1;  
  } else {
    $manufacturers[$m] = 1;  
  }
}

$stats['manufacturers'] = [];
foreach ($manufacturers as $manufacturer => $count) {
  $stats['manufacturers'][] = [
    'type' => $manufacturer,
    'count' => $count
  ];
}

header("Content-type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
echo json_encode($stats);