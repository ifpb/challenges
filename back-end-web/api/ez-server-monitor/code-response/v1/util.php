<?php

function systemInfo() {
  $hostname = trim(`hostname`);
  $os = trim(str_replace("Distributor ID:\t", "", `lsb_release -i`))." ".
          str_replace("Codename:\t", "", trim(`lsb_release -c`));
  $osVersion = str_replace("Release:\t", "", trim(`lsb_release -r`));
  $kernelVersion = trim(`uname -o`)." ".trim(`uname -r`);
  $uptime = str_replace("up ", "", trim(`uptime -p`));
  $lastBoot = preg_replace("/system boot\s+/", "", trim(`who -b`));

  return [
    "hostname"=> $hostname,
    "os"=> $os,
    "osVersion"=> $osVersion,
    "kernelVersion"=> $kernelVersion,
    "uptime"=> $uptime,
    "lastBoot"=> $lastBoot,
  ];
}

function networkInfo() {
  $result = [];
  $ifconfigAll = `ifconfig -a`;
  
  $regex = "/(\w+)\s+Link/";
  preg_match_all($regex, $ifconfigAll, $interfaces);
  
  $regex = "/inet addr:([^ ]+)\s+?(Bcast|Mask)/";
  preg_match_all($regex, $ifconfigAll, $addresses);
  
  $regex = "/RX bytes:.+?\((.+?)\)/";
  preg_match_all($regex, $ifconfigAll, $receives);
  
  $regex = "/TX bytes:.+?\((.+?)\)/";
  preg_match_all($regex, $ifconfigAll, $transmits);

  foreach ($interfaces[1] as $index => $interface) {
    $result[] = [
      "interface"=> $interfaces[1][$index],
      "address"=> $addresses[1][$index],
      "receive"=> $receives[1][$index],
      "transmit"=> $transmits[1][$index],
    ];
  }

  return $result;
}

function memoryInfo() {
  $free = `free`;

  $regex = "/Mem:\s+(\S+)\s+(\S+)\s+(\S+)/";
  preg_match($regex, $free, $matches);
  
  $used = $matches[2];
  $free = $matches[3];
  $total = $matches[1];
  $usedPercent = abs($used - $free) / $total;

  $free = `free -h`;

  $regex = "/Mem:\s+(\S+)\s+(\S+)\s+(\S+)/";
  preg_match($regex, $free, $matches);
  
  $used = preg_replace("/(\d+)/", "$1 ", $matches[2]."B");
  $free = preg_replace("/(\d+)/", "$1 ", $matches[3]."B");
  $total = preg_replace("/(\d+)/", "$1 ", $matches[1]."B");

  return [
    "usedPercent"=> round($usedPercent, 2),
    "used" => $used,
    "free" => $free,
    "total" => $total,
  ];
}

function serviceStatus() {
  $result = [];

  $connection = ssh2_connect('localhost', 22);
  ssh2_auth_password($connection, 'vagrant', 'vagrant');
  $stream = ssh2_exec($connection, 'sudo service --status-all');
  stream_set_blocking($stream, true);
  $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
  $status = stream_get_contents($stream_out);

  $regex = "/\[ (.) \]  (.+)/";
  preg_match_all($regex, $status, $matches);

  foreach ($matches[2] as $index => $services) {
    $result[] = [
      "status" => $matches[1][$index] === '+' ? 'up' : 'down',
      "service" => $services,
    ];
  }

  return $result;
}

function diskInfo() {
  $result = [];

  $df = `df -h | tail -n +2`;
  $regex = "/(\S+)\s+(\S+)\s+(\S+)\s+(\S+)\s+(\S+)\s+(.+)/";
  preg_match_all($regex, $df, $matches);

  foreach ($matches[1] as $index => $size) {
    if ($matches[1][$index] !== "none")
      $result[] = [
        "filesystem" => $matches[1][$index],
        "mount" => $matches[6][$index],
        "use" => str_replace("%", "", $matches[5][$index]),
        "free" => preg_replace("/(\d+)/", "$1 ", $matches[4][$index]."B"),
        "used" => preg_replace("/(\d+)/", "$1 ", $matches[3][$index]."B"),
        "total" => preg_replace("/(\d+)/", "$1 ", $matches[2][$index]."B"),
      ];
  }
  return $result;
}

?>