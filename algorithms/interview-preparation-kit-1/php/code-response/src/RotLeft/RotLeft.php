<?php
namespace RotLeft;

class RotLeft
{

  public static function rot($array, $d)
  {
    return \array_merge(\array_slice($array, $d), \array_slice($array, 0, $d));
  }

}
