<?php

use \RotLeft\RotLeft;

describe('RotLeft', function () {

  it('performing 1 left rotations', function () {
    $array = [1, 2, 3, 4, 5];
    $expected = [2, 3, 4, 5, 1];
    expect(RotLeft::rot($array, 1))->toEqual($expected);
  });

  it('performing 4 left rotations', function () {
    $array = [1, 2, 3, 4, 5];
    $expected = [5, 1, 2, 3, 4];
    expect(RotLeft::rot($array, 4))->toEqual($expected);
  });

  it('performing 10 left rotations', function () {
    $array = [41, 73, 89, 7, 10, 1, 59, 58, 84, 77, 77, 97, 58, 1, 86, 58, 26, 10, 86, 51];
    $expected = [77, 97, 58, 1, 86, 58, 26, 10, 86, 51, 41, 73, 89, 7, 10, 1, 59, 58, 84, 77];
    expect(RotLeft::rot($array, 10))->toEqual($expected);
  });

  it('performing 13 left rotations', function () {
    $array = [33, 47, 70, 37, 8, 53, 13, 93, 71, 72, 51, 100, 60, 87, 97];
    $expected = [87, 97, 33, 47, 70, 37, 8, 53, 13, 93, 71, 72, 51, 100, 60];
    expect(RotLeft::rot($array, 13))->toEqual($expected);
  });

});
