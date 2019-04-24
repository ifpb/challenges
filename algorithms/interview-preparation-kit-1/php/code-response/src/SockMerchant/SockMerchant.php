<?php
namespace SockMerchant;

class SockMerchant
{
  public static function sockMerchant($socks): int
  {
    $countSocks = [];
    foreach ($socks as $s) {
      $countSocks[$s] = isset($countSocks[$s]) ? $countSocks[$s] + 1 : 1;
    }
    return array_reduce(
      $countSocks,
      function ($t, $c) {
        return $t + \floor($c / 2);
      },
      0
    );
  }
}
