<?php
// /bin/cat
// echo "www-data ALL=(ALL) NOPASSWD: /bin/cat" | sudo tee --append /etc/sudoers

// ./scripts/dhcp-log.sh
// sudo chmod +x /var/www/html/api/scripts/dhcp-log.sh
// echo "www-data ALL=(ALL) NOPASSWD: /var/www/html/api/scripts/dhcp-log.sh" | sudo tee --append /etc/sudoers

$dhcpdLog = shell_exec("sudo ./scripts/dhcp-log.sh");

header("Content-type: text/plain");
echo $dhcpdLog;