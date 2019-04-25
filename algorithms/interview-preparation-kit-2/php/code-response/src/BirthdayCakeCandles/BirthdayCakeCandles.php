<?php

namespace BirthdayCakeCandles;

class BirthdayCakeCandles
{
  public static function blowOut($candles)
  {
    $max = \max($candles);
    $total = 0;
    foreach ($candles as $candle) {
      if ($candle === $max)
        $total++;
    }
    return $total;
  }
}
