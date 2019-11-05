<?php
namespace NumberOfLeds;

class NumberOfLeds
{

  public static function calc($number)
  {
    $led = [6, 2, 5, 5, 4, 5, 6, 3, 7, 6];
    $total = \array_reduce(
      \str_split((string)$number),
      function ($t, $l) use ($led) {
        return $t + $led[$l];
      },
      0
    );
    return $total;
  }
}
