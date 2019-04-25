<?php

use \String\StringUtil;

describe('String Utils', function () {

  xit('number of letter a in the first 10 repeated string', function () {
    expect(StringUtil::repeatedString('a', 10))->toBe(10);
  });

  xit('number of letter a in the first 10 repeated string', function () {
    expect(StringUtil::repeatedString('b', 10))->toBe(0);
  });

  xit('number of letter a in the first 10 repeated string', function () {
    expect(StringUtil::repeatedString('aba', 10))->toBe(7);
  });

  xit('number of letter a in the first 1000000000000 repeated string', function () {
    expect(StringUtil::repeatedString('a', 1000000000000))->toBe(1000000000000);
  });

  xit('mirror sequence of 1 to 5', function () {
    expect(StringUtil::mirrorSequence(1, 5))->toBe('1234554321');
  });

  xit('mirror sequence of 10 to 13', function () {
    expect(StringUtil::mirrorSequence(10, 13))->toBe('1011121331211101');
  });

  xit('mirror sequence of 98 to 101', function () {
    expect(StringUtil::mirrorSequence(98, 101))->toBe('98991001011010019989');
  });

  xit('remove zero of 7 + 8', function () {
    expect(StringUtil::zeroMeansZero(7, 8))->toBe('15');
  });

  xit('remove zero of 15 + 5', function () {
    expect(StringUtil::zeroMeansZero(15, 5))->toBe('2');
  });

  xit('remove zero of 99 + 6', function () {
    expect(StringUtil::zeroMeansZero(99, 6))->toBe('15');
  });

  xit('number of leds needed to set 1', function () {
    expect(StringUtil::numberOfLeds('1'))->toBe(2);
  });

  xit('number of leds needed to set 2', function () {
    expect(StringUtil::numberOfLeds('2'))->toBe(5);
  });

  xit('number of leds needed to set 115380', function () {
    expect(StringUtil::numberOfLeds('115380'))->toBe(27);
  });

  xit('number of leds needed to set 2819311', function () {
    expect(StringUtil::numberOfLeds('2819311'))->toBe(29);
  });

  xit('number of leds needed to set 23456', function () {
    expect(StringUtil::numberOfLeds('23456'))->toBe(25);
  });
});
