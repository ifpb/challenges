<?php

function systemInfo(){
  $operatingSystem = str_replace('Description:	', '', `lsb_release -d`);
  $hostname = `hostname`;
  $username = `whoami`;
  $uptime = str_replace('up ', '', `uptime -p`);

  return [
    'operatingSystem' => trim($operatingSystem),
    'hostname' => trim($hostname),
    'username' => trim($username),
    'uptime' => trim($uptime)
  ];
}

function cpuStatus(){
  $topResult = `top -b -n 1`;

  $regex = '/load average: (.+), (.+), (.+)\n/';
  preg_match($regex, $topResult, $matched);
  $last1 = (float) $matched[1];
  $last10 = (float) $matched[2];
  $last15 = (float) $matched[3];

  $regex = '/: (.+) us, (.+) sy, (.+) ni, (.+) id/';
  preg_match($regex, $topResult, $matched);
  $cpuUsageUser = (float) $matched[1];
  $cpuUsageSys = (float) $matched[2];
  $cpuUsageIdle = (float) $matched[4];

  return [
    'cpuLast' => [
      'last1' => $last1,
      'last10' => $last10,
      'last15' => $last15
    ],
    'cpuUsage' => [
      'cpuUsageUser' => $cpuUsageUser,
      'cpuUsageSys' => $cpuUsageSys,
      'cpuUsageIdle' => $cpuUsageIdle
    ]
  ];
}

function cpuName(){
  $cpuname = `cat /proc/cpuinfo  | grep 'name'`;

  $regex = "/model name\s+: (.+)\n/";
  preg_match($regex, $cpuname, $matched);
  $cpu = $matched[1];

  return [
    'cpu' => $cpu
  ];
}

function memory(){
  $free = `free`;

  $regex = '/Mem:\s+(\d+)\s+(\d+)/';
  preg_match($regex, $free, $matched);
  $memoryUsageUsed = $matched[2]/$matched[1];
  $memoryUsageUnused = 1 - $memoryUsageUsed;

  return [
    'memoryUsageUsed' => (float) number_format(100*$memoryUsageUsed, 1),
    'memoryUsageUnused' => (float) number_format(100*$memoryUsageUnused, 1)
  ];
}
