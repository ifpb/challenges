<?php

$dhcpdPools = `dhcpd-pools -l /var/lib/dhcp/dhcpd.leases -c /etc/dhcp/dhcpd.conf -f J`;

header("Content-type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
echo $dhcpdPools;
