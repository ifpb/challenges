<?php

namespace FunnyString;

class FunnyString
{
  public static function check($s)
  {
    $codes = [];
    foreach (\str_split($s) as $char) {
      $codes[] = \ord($char);
    }
    $reverse = \array_reverse($codes);
    for ($i = 0; $i < strlen($s) - 1; $i++) {
      if (\abs($codes[$i + 1] - $codes[$i]) !== \abs($reverse[$i + 1] - $reverse[$i]))
        return 'Not Funny';
    }
    return 'Funny';
  }
}
