<?php

namespace CharCode;

class CharCode
{
  public static function sum($s)
  {
    $sum = 0;
    foreach (\str_split($s) as $code) {
      $sum += \ord($code);
    }
    return $sum;
  }
}
