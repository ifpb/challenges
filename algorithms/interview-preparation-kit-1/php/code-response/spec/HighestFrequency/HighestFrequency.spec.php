<?php

use \HighestFrequency\HighestFrequency;

describe('Highest Frequency', function () {

  it('highest frequency of [1, 4, 4, 4, 5, 3]', function () {
    $array = [1, 4,  4, 4, 5, 3];
    expect(HighestFrequency::calc($array))->toEqual(4);
  });

  it('highest frequency of [1, 1, 1, 4, 5, 3]', function () {
    $array = [1, 1, 1, 4, 5, 3];
    expect(HighestFrequency::calc($array))->toEqual(1);
  });

  it('highest frequency of [1, 2, 3, 4, 5, 4, 3, 2, 1, 3, 4]', function () {
    $array = [1, 2, 3, 4, 5, 4, 3, 2, 1, 3, 4];
    expect(HighestFrequency::calc($array))->toEqual(3);
  });

});
