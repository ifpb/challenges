<?php

namespace Cipher;

function array_rotate($array, $n)
{
  $length = sizeof($array);
  return \array_merge(\array_slice($array, $n, $length), \array_slice($array, 0, $n));
}

class Cipher
{
  public static function complent($rotate)
  {
    $complent = [];
    $inputChars = \str_split('abcdefghijklmnopqrstuvwxyz');
    $outputChars = array_rotate($inputChars, $rotate);

    foreach ($inputChars as $index => $char) {
      $complent[\strtolower($char)] = \strtolower($outputChars[$index]);
      $complent[\strtoupper($char)] = \strtoupper($outputChars[$index]);
    }

    return $complent;
  }

  public static function rot($str, $rotate = 13)
  {
    $substitution = self::complent($rotate);
    $encode = array_map(
      function ($char) use ($substitution) {
        return $substitution[$char] ?? $char;
      },
      \str_split($str)
    );
    return \join('', $encode);
  }

  public static function allRots($str)
  {
    $rots = [];

    for ($rot = 1; $rot < 26; $rot++) {
      $rots["rot${rot}"] = Cipher::rot($str, $rot);
    }

    return $rots;
  }
}
