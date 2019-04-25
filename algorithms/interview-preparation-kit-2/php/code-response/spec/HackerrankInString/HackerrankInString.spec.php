<?php

use HackerrankInString\HackerrankInString;

describe('Hackerrank In String', function () {
  it('hackerrank exist in hereiamstackerrank', function () {
    expect(HackerrankInString::check('hereiamstackerrank'))->toEqual('YES');
  });

  it('hackerrank exist in hackerworld', function () {
    expect(HackerrankInString::check('hackerworld'))->toEqual('NO');
  });

  it('hackerrank exist in hhaacckkekraraannk', function () {
    expect(HackerrankInString::check('hhaacckkekraraannk'))->toEqual('YES');
  });

  it('hackerrank exist in rhbaasdndfsdskgbfefdbrsdfhuyatrjtcrtyytktjjt', function () {
    expect(HackerrankInString::check('rhbaasdndfsdskgbfefdbrsdfhuyatrjtcrtyytktjjt'))->toEqual('NO');
  });
});
