<?php

use HackerrankInString\HackerrankInString;

describe('Hackerrank In String', function () {
  xit('hackerrank exist in hereiamstackerrank', function () {
    expect(HackerrankInString::check('hereiamstackerrank'))->toEqual('YES');
  });

  xit('hackerrank exist in hackerworld', function () {
    expect(HackerrankInString::check('hackerworld'))->toEqual('NO');
  });

  xit('hackerrank exist in hhaacckkekraraannk', function () {
    expect(HackerrankInString::check('hhaacckkekraraannk'))->toEqual('YES');
  });

  xit('hackerrank exist in rhbaasdndfsdskgbfefdbrsdfhuyatrjtcrtyytktjjt', function () {
    expect(HackerrankInString::check('rhbaasdndfsdskgbfefdbrsdfhuyatrjtcrtyytktjjt'))->toEqual('NO');
  });
});
