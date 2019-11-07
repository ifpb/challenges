<?php

use \Challenge\ArrayStats;

describe('Array Stats', function () {

  it('stats [1, 1, 1]', function () {
    $array = [1, 1, 1];
    $expected = ['0.000000', '0.000000', '1.000000'];
    expect(ArrayStats::stats($array))->toEqual($expected);
  });

  it('stats [0, 0, 1, 1]', function () {
    $array = [0, 0, 1, 1];
    $expected = ['0.000000', '0.500000', '0.500000'];
    expect(ArrayStats::stats($array))->toEqual($expected);
  });

  it('stats [-4, 3, -9, 0, 4, 1]', function () {
    $array = [-4, 3, -9, 0, 4, 1];
    $expected = ['0.333333', '0.166667', '0.500000'];
    expect(ArrayStats::stats($array))->toEqual($expected);
  });

  it('stats [1, 2, 3, -1, -2, -3, 0, 0]', function () {
    $array = [1, 2, 3, -1, -2, -3, 0, 0];
    $expected = ['0.375000', '0.250000', '0.375000'];
    expect(ArrayStats::stats($array))->toEqual($expected);
  });

});
