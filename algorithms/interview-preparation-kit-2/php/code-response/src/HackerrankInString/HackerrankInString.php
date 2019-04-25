<?php

namespace HackerrankInString;

class HackerrankInString
{
  public static function check($s)
  {
    $hackerrank = 'hackerrank';
    for ($i = 0, $index = 0; $i < strlen($s); $i++) {
      if (\substr($s, $i, 1) === \substr($hackerrank, $index, 1)) {
        $index++;
      }
      if ($index == strlen($hackerrank)) {
        return 'YES';
      }
    }
    return 'NO';
  }
}
