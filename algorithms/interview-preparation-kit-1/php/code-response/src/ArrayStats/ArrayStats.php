<?php

namespace ArrayStats;

class ArrayStats
{

  public static function stats($array)
  {
    $stat = [0, 0, 0];
    foreach ($array as $e) {
      if ($e < 0)
        $stat[0] += 1;
      else if ($e === 0)
        $stat[1] += 1;
      else
        $stat[2] += 1;
    }

    return \array_map(
      function ($e) use ($array) {
        return \number_format($e / sizeof($array), 6);
      },
      $stat
    );
  }
  
}
