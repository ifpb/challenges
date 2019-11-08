<?php
$command = $_GET['command'] ?? 'status';
$format = $_GET['format'] ?? 'json';

// /bin/systemctl
// echo "www-data ALL=(ALL) NOPASSWD: /bin/systemctl" | sudo tee --append /etc/sudoers

// ./scripts/dhcp-service.sh
// sudo chmod +x /var/www/html/api/scripts/dhcp-service.sh
// echo "www-data ALL=(ALL) NOPASSWD: /var/www/html/api/scripts/dhcp-service.sh" | sudo tee --append /etc/sudoers

if (in_array($command, ['status', 'start', 'stop'])) {
  $dhcpdService = shell_exec("sudo ./scripts/dhcp-service.sh $command");
}

if ($format === 'json') {
  if ($command === 'status') {
    $pattern = '/Active: (\w*)/';
    preg_match($pattern, $dhcpdService, $match);
    $result = ["status" => $match[1]];
  } else {
    $result = ["action" => $command];
  }
  header("Content-type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Origin: *");
  echo json_encode($result);
} else {
  echo $dhcpdService;
}