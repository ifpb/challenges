<?php

$result = '[
  {
    "icon": "alert-circle",
    "bg": "bg-danger",
    "name": "Leases Per Second / Minute",
    "value": "0.005/0.28"
  },
  {
    "icon": "pie-chart",
    "bg": "bg-info",
    "name": "Total Leases",
    "value": 1
  },
  {
    "icon": "cpu",
    "bg": "bg-primary",
    "name": "CPU",
    "value": 3.7
  },
  {
    "icon": "server",
    "bg": "bg-success",
    "name": "SERVER",
    "value": "dhcpserver "
  }
]';
    
header("Content-type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
echo $result;