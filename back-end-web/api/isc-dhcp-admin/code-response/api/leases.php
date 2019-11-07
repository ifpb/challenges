<?php
$dhcpdLeases = `dhcp-lease-list --parsable --all`;
$result = [];

$pattern = "/MAC (\S*) IP (\S*) HOSTNAME (\S*) BEGIN (\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}) END (\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}) MANUFACTURER (.*)?/";
preg_match_all($pattern, $dhcpdLeases, $matches);

foreach ($matches[0] as $index => $matche) {
  $result[] = [
    "mac" => $matches[1][$index],
    "ip" => $matches[2][$index],
    "hostname" => $matches[3][$index],
    "valid" => $matches[5][$index],
    "manufacturer" => $matches[6][$index]
  ];
}

header("Content-type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
echo json_encode($result);