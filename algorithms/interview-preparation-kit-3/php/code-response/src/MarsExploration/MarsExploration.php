<?php

namespace MarsExploration;

class MarsExploration
{
  public static function check($message)
  {
    $count = 0;
    $sos = 'SOS';
    for ($index = 0; $index < strlen($message); $index++){
      if ($message[$index] !== $sos[$index % 3])
        $count++;
    }
    return $count;
  }
}
