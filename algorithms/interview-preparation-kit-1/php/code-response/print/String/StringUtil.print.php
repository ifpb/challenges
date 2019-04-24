<?php
require __DIR__ . '/../../vendor/autoload.php';

use \String\StringUtil;

// String Utils

// number of letter a in the first 10 repeated string
var_dump(StringUtil::repeatedString('a', 10));
var_dump(10);

// number of letter a in the first 10 repeated string
var_dump(StringUtil::repeatedString('b', 10));
var_dump(0);

// number of letter a in the first 10 repeated string
var_dump(StringUtil::repeatedString('aba', 10));
var_dump(7);

// number of letter a in the first 1000000000000 repeated string
var_dump(StringUtil::repeatedString('a', 1000000000000));
var_dump(1000000000000);

// mirror sequence of 1 to 5
var_dump(StringUtil::mirrorSequence(1, 5));
var_dump('1234554321');

// mirror sequence of 10 to 13
var_dump(StringUtil::mirrorSequence(10, 13));
var_dump('1011121331211101');

// mirror sequence of 98 to 101
var_dump(StringUtil::mirrorSequence(98, 101));
var_dump('98991001011010019989');

// remove zero of 7 + 8
var_dump(StringUtil::zeroMeansZero(7, 8));
var_dump('15');

// remove zero of 15 + 5
var_dump(StringUtil::zeroMeansZero(15, 5));
var_dump('2');

// remove zero of 99 + 6
var_dump(StringUtil::zeroMeansZero(99, 6));
var_dump('15');

// number of leds needed to set 1
var_dump(StringUtil::numberOfLeds('1'));
var_dump(2);

// number of leds needed to set 2
var_dump(StringUtil::numberOfLeds('2'));
var_dump(5);

// number of leds needed to set 115380
var_dump(StringUtil::numberOfLeds('115380'));
var_dump(27);

// number of leds needed to set 2819311
var_dump(StringUtil::numberOfLeds('2819311'));
var_dump(29);

// number of leds needed to set 23456
var_dump(StringUtil::numberOfLeds('23456'));
var_dump(25);
