<?php

namespace Cipher;

function array_rotate($array, $n)
{
  $length = sizeof($array);
  return \array_merge(\array_slice($array, $n, $length), \array_slice($array, 0, $n));
}

class Cipher
{
  // TODO
}
