<?php

namespace CatAndMouse;

class CatAndMouse
{
  public static function result($x, $y, $z)
  {
    $da = \abs($x - $z);
    $db = \abs($y - $z);
    if ($da < $db)
      return 'Cat A';
    else if ($db < $da)
      return 'Cat B';
    else
      return 'Mouse C';
  }
}
