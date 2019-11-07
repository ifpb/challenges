<?php

namespace Challenge;

class RepeatedString
{

  public static function calc($s, $n): int
  {
    $size = \strlen($s);
    $repeat = \floor($n / $size);
    $remainder = $n % $size;
    $count = \sizeof(\explode('a', $s)) - 1;
    $countRemainer = \sizeof(\explode('a', \substr($s, 0, $remainder))) - 1;
    return $count * $repeat + $countRemainer;
  }

}
