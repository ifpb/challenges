<?php
namespace Vector;

class ArrayUtil
{

  public function __construct($array)
  {
    $this->array = $array;
  }

  public function rotLeft($d)
  {
    return \array_merge(\array_slice($this->array, $d), \array_slice($this->array, 0, $d));
  }

  public function stats()
  {
    $stat = [0, 0, 0];
    foreach ($this->array as $e) {
      if ($e < 0)
        $stat[0] += 1;
      else if ($e === 0)
        $stat[1] += 1;
      else
        $stat[2] += 1;
    }

    return \array_map(
      function ($e) {
        return \number_format($e / sizeof($this->array), 6);
      },
      $stat
    );
  }

  public function minMaxSum()
  {
    \sort($this->array);
    $sum = function ($x, $y) {
      return $x + $y;
    };
    $min = \array_reduce(\array_slice($this->array, 0, -1), $sum);
    $max = \array_reduce(\array_slice($this->array, 1), $sum);
    return [$min, $max];
  }

  public function highestFrequency()
  {
    $count = [];
    $highestFreq = 1;
    foreach ($this->array as $type) {
      if (isset($count[$type]))
        $count[$type] += 1;
      else
        $count[$type] = 1;
    }
    foreach ($count as $type => $times) {
      if ($times > $count[$highestFreq]) {
        $highestFreq = $type;
      }
    }
    return $highestFreq;
  }
}
