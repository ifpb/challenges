<?php

namespace Challenge;

class HighestFrequency
{

  public static function calc($array)
  {
    $count = [];
    $highestFreq = 1;
    foreach ($array as $type) {
      if (isset($count[$type]))
        $count[$type] += 1;
      else
        $count[$type] = 1;
    }
    foreach ($count as $type => $times) {
      if ($times > $count[$highestFreq]) {
        $highestFreq = $type;
      }
    }
    return $highestFreq;
  }
}
