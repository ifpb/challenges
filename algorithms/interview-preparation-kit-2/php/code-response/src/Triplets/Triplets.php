<?php

namespace Triplets;

class Triplets
{
  public static function compare($a0, $a1, $a2, $b0, $b1, $b2)
  {
    $a = [$a0, $a1, $a2];
    $b = [$b0, $b1, $b2];
    $totalA = 0;
    $totalB = 0;
    foreach ($a as $i => $e) {
      if ($e > $b[$i])
        $totalA += 1;
      if ($e < $b[$i])
        $totalB += 1;
    }
    return [$totalA, $totalB];
  }
}
