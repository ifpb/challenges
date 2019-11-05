<?php
namespace MinMaxSum;

class MinMaxSum
{

  public static function calc($array)
  {
    \sort($array);
    $sum = function ($x, $y) {
      return $x + $y;
    };
    $min = \array_reduce(\array_slice($array, 0, -1), $sum);
    $max = \array_reduce(\array_slice($array, 1), $sum);
    return [$min, $max];
  }
}
