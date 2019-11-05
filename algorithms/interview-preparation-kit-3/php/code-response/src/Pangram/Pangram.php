<?php

namespace Pangram;

class Pangram
{
  public static function check($sentence)
  {
    $alpha = range('a', 'z');
    $sentence_array = str_split(strtolower($sentence));
    return empty(array_diff($alpha, $sentence_array));
  }
}
