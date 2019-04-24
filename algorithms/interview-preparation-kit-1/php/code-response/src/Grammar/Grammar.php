<?php
namespace Grammar;

class Grammar
{
  public static function spelling($word)
  {
    $word = \preg_split('//u', $word, -1, PREG_SPLIT_NO_EMPTY);
    $filted = \array_filter($word, function ($w) {
      return $w !== ' ';
    });
    $map = \array_map(function ($w) {
      return \mb_strtoupper($w);
    }, $filted);
    return \join('-', $map);
  }
}
