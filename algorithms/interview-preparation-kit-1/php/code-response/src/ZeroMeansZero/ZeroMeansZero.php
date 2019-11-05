<?php

namespace ZeroMeansZero;

class ZeroMeansZero
{

  public static function change($a, $b)
  {
    $sum = (string)($a + $b);
    while (\strpos($sum, '0') !== false)
      $sum = \str_replace('0', '', $sum);
    return $sum;
  }

}
