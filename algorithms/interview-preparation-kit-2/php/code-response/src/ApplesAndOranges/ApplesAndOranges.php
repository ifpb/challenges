<?php

namespace ApplesAndOranges;

class ApplesAndOranges
{
  public static function count($s, $t, $a, $b, $apples, $oranges)
  {
    $countA = 0;
    $countB = 0;

    foreach ($apples as $apple) {
      $position = $apple + $a;
      if ($position >= $s & $position <= $t)
        $countA++;
    }

    foreach ($oranges as $orange) {
      $position = $orange + $b;
      if ($position >= $s & $position <= $t)
        $countB++;
    }

    return [$countA, $countB];
  }
}
