<?php

namespace RainbowTable;

function array_sampling($chars, $size, $combinations = [])
{
  if (empty($combinations)) {
    $combinations = $chars;
  }

  if ($size == 1) {
    return $combinations;
  }

  $new_combinations = [];

  foreach ($combinations as $combination) {
    foreach ($chars as $char) {
      $new_combinations[] = $combination . $char;
    }
  }

  return array_sampling($chars, $size - 1, $new_combinations);
}

class RainbowTable
{
  // TODO
}
