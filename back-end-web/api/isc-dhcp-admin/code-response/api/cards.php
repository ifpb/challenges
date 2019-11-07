<?php
// SERVER
$hostname = `hostname`;

// CPU
$top = `top -b n1 | head -n 3 | tail -n 1`;
$pattern = "/, ([\d\.]*) id,/";
preg_match($pattern, $top, $match);
$cpu = round(100 - $match[1], 1);

// Total Leases
$dhcpdLeases = `dhcp-lease-list`;
$pattern = "/..(:..){5}/";
preg_match_all($pattern, $dhcpdLeases, $matches);
$totalLeases = sizeof($matches[0]) ?? 0;

// Leases Per Second / Minute
$dhcpdLeases = `dhcp-lease-list --parsable --all`;

$pattern = "/BEGIN (\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2})/";
preg_match($pattern, $dhcpdLeases, $match);

$pattern = "/END (\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2})/";
preg_match_all($pattern, $dhcpdLeases, $matches);

if (isset($match)) {
  $start_date = strtotime($match[1]);
  $end_date = strtotime(end($matches[1]));
  
  $diff = abs($end_date - $start_date);
  $leases_sec = round(sizeof($matches) / $diff, 3);
  $leases_min = round(sizeof($matches) / ($diff / 60), 3);
  
  $leasesByTime = "{$leases_sec}/{$leases_min}";
} else {
  $leasesByTime = "0/0";
}

$result = [
  [
    "icon" => "alert-circle",
    "bg" => "bg-danger",
    "name" => "Leases Per Second / Minute",
    "value" => $leasesByTime
  ],
  [
    "icon" => "pie-chart",
    "bg" => "bg-info",
    "name" => "Total Leases",
    "value" => $totalLeases
  ],
  [
    "icon" => "cpu",
    "bg" => "bg-primary",
    "name" => "CPU",
    "value" => $cpu
  ],
  [
    "icon" => "server",
    "bg" => "bg-success",
    "name" => "SERVER",
    "value" => $hostname
  ]
];
    
header("Content-type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
echo json_encode($result);