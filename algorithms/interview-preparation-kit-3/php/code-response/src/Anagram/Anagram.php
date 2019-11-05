<?php

namespace Anagram;

class Anagram
{
  public static function check($a, $b)
  {
    $frequencyA = [];
    $frequencyB = [];
    $deletions = 0;
    
    foreach (str_split($a) as $l) {
      $frequencyA[$l] = isset($frequencyA[$l]) ? $frequencyA[$l] + 1 : 1;
    }
    foreach (str_split($b) as $l) {
      $frequencyB[$l] = isset($frequencyB[$l]) ? $frequencyB[$l] + 1 : 1;
    }
    foreach (str_split('abcdefghijklmnopqrstuvwxyz') as $l) {
      $deletions += abs(($frequencyA[$l] ?? 0) - ($frequencyB[$l] ?? 0));
    }
  
    return $deletions;
  }
}
