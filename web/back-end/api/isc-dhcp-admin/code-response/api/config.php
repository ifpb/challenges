<?php
// /bin/cat
// echo "www-data ALL=(ALL) NOPASSWD: /bin/cat" | sudo tee --append /etc/sudoers

// ./scripts/dhcp-conf.sh
// sudo chmod +x /var/www/html/api/scripts/dhcp-conf.sh
// echo "www-data ALL=(ALL) NOPASSWD: /var/www/html/api/scripts/dhcp-conf.sh" | sudo tee --append /etc/sudoers

$dhcpdConf = shell_exec("sudo ./scripts/dhcp-conf.sh");

header("Content-type: text/plain");
echo $dhcpdConf;