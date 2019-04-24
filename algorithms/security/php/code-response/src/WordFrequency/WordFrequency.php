<?php

namespace WordFrequency;

function split($str, $len = 1)
{
  $arr = [];
  $length = mb_strlen($str, 'UTF-8');

  for ($i = 0; $i < $length; $i += $len) {
    $arr[] = mb_substr($str, $i, $len, 'UTF-8');
  }

  return $arr;
}

class WordFrequency
{
  public static function stats($message)
  {
    $frequency = [];
    $splited = \preg_split('//u', \strtolower($message), -1, PREG_SPLIT_NO_EMPTY);

    foreach (\array_unique($splited) as $char) {
      $count = \substr_count($message, $char);
      if (isset($frequency[$count])) {
        array_push($frequency[$count], $char);
        \sort($frequency[$count]);
      } else {
        $frequency[$count] = [$char];
      }
    }

    return \ksort($frequency);
  }
}
