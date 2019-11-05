<?php
namespace MirrorSequence;

class MirrorSequence
{

  public static function generate($a, $b)
  {
    $temp = [];
    for ($n = $a; $n <= $b; $n++) {
      \array_push($temp, $n);
    }
    $sequence = \join('', $temp);
    $mirror = \array_reverse($temp);
    $mirror = \array_map(
      function ($v) {
        return strrev($v);
      },
      $mirror
    );
    $mirror = \join('', $mirror);
    return $sequence . $mirror;
  }

}
