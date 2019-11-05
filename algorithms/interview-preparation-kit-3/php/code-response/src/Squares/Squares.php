<?php

namespace Squares;

class Squares
{

  public static function squareOfSum($number)
  {
    return array_sum(range(1, $number)) ** 2;
  }

  public static function sumOfSquares($number)
  {
    return array_reduce(
      range(1, $number),
      function ($sum, $number) {
        return $sum + $number ** 2;
      },
      0
    );
  }

  public static function difference($number)
  {
    return self::squareOfSum($number) - self::sumOfSquares($number);
  }
}
