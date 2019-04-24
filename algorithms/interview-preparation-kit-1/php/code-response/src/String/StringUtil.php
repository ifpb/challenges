<?php
namespace String;

class StringUtil
{

  public static function repeatedString($s, $n): int
  {
    $size = \strlen($s);
    $repeat = \floor($n / $size);
    $remainder = $n % $size;
    $count = \sizeof(\explode('a', $s)) - 1;
    $countRemainer = \sizeof(\explode('a', \substr($s, 0, $remainder))) - 1;
    return $count * $repeat + $countRemainer;
  }

  public static function mirrorSequence($a, $b)
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

  public static function zeroMeansZero($a, $b)
  {
    $sum = (string)($a + $b);
    while (\strpos($sum, '0') !== false)
      $sum = \str_replace('0', '', $sum);
    return $sum;
  }

  public static function numberOfLeds($number)
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
