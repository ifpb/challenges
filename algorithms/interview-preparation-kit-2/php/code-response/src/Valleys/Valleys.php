<?php

namespace Valleys;

class Valleys
{

  public static function count($steps)
  {
    $level = 0;
    $count = 0;
    foreach (\str_split($steps) as $step) {
      $valeyOut = false;
      if ($level < 0)
        $valeyOut = false;
      $level += $step === 'U' ? +1 : -1;
      if ($valeyOut === false && $level === 0 && $step === 'U')
        $valeyOut = true;
      if ($valeyOut)
        $count++;
    }
    return $count;
  }
}
