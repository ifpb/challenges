<?php

$result = '{
   "active_leases": [
         { "ip":"192.168.1.10", "macaddress":"08:00:27:81:9c:76" }
   ],
   "subnets": [
         { "location":"office", "range":"10.0.0.1 - 10.0.0.126", "defined":126, "used":0, "touched":0, "free":126 },
         { "location":"office", "range":"10.0.0.129 - 10.0.0.254", "defined":126, "used":0, "touched":0, "free":126 },
         { "location":"All networks", "range":"192.168.1.10 - 192.168.1.100", "defined":91, "used":1, "touched":0, "free":90 },
         { "location":"All networks", "range":"192.168.2.10 - 192.168.2.100", "defined":91, "used":0, "touched":0, "free":91 }
   ],
   "shared-networks": [
         { "location":"office", "defined":252, "used":0, "touched":0, "free":252 }
   ],
   "summary": {
         "location":"All networks",
         "defined":434,
         "used":1,
         "touched":0,
         "free":433
   }
}';

header("Content-type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
echo $result;
