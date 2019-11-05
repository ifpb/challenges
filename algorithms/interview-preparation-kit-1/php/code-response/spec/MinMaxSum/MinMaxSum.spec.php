<?php

use \MinMaxSum\MinMaxSum;

describe('Min Max Sum', function () {

  it('min and max of [1, 2, 3, 4, 5]', function () {
    $array = [1, 2, 3, 4, 5];
    $expected = [10, 14];
    expect(MinMaxSum::calc($array))->toEqual($expected);
  });

  it('min and max of [0, 2, 6, 3, 4]', function () {
    $array = [0, 2, 6, 3, 4];
    $expected = [9, 15];
    expect(MinMaxSum::calc($array))->toEqual($expected);
  });

  it('min and max of [10, 23, 61, 37, 41]', function () {
    $array = [10, 23, 61, 37, 41];
    $expected = [111, 162];
    expect(MinMaxSum::calc($array))->toEqual($expected);
  });

});
