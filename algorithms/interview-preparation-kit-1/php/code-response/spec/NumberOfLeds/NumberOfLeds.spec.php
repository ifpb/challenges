<?php

use \NumberOfLeds\NumberOfLeds;

describe('Number of Leds', function () {

  it('number of leds needed to set 1', function () {
    expect(NumberOfLeds::calc('1'))->toBe(2);
  });

  it('number of leds needed to set 2', function () {
    expect(NumberOfLeds::calc('2'))->toBe(5);
  });

  it('number of leds needed to set 115380', function () {
    expect(NumberOfLeds::calc('115380'))->toBe(27);
  });

  it('number of leds needed to set 2819311', function () {
    expect(NumberOfLeds::calc('2819311'))->toBe(29);
  });

  it('number of leds needed to set 23456', function () {
    expect(NumberOfLeds::calc('23456'))->toBe(25);
  });
});
