<pre>
<?php

$command = $_GET['command'] ?? 'status';

// /bin/systemctl
// echo "www-data ALL=(ALL) NOPASSWD: /bin/systemctl" | sudo tee --append /etc/sudoers

// ./service-dhcp.sh
// sudo chmod +x /var/www/html/api/scripts/service-dhcp.sh
// echo "www-data ALL=(ALL) NOPASSWD: /var/www/html/api/scripts/service-dhcp.sh" | sudo tee --append /etc/sudoers

if (in_array($command, ['status', 'start', 'stop'])) {
  $dhcpdService = shell_exec("sudo ./scripts/service-dhcp.sh $command");
  echo $dhcpdService;
}