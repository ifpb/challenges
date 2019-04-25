<?php

use ApplesAndOranges\ApplesAndOranges;

describe('Apples and Oranges', function () {
  it('count fruits 1', function () {
    expect(ApplesAndOranges::count(5, 10, 0, 15, [0, 3, 6], [17, 20]))->toEqual([1, 0]);
  });

  it('count fruits 2', function () {
    expect(ApplesAndOranges::count(7, 11, 5, 15, [-2, 2, 1], [5, -6]))->toEqual([1, 1]);
  });

  it('count fruits 3', function () {
    expect(ApplesAndOranges::count(8, 9, -1, 15, [-2, 2, 10], [20, 21]))->toEqual([1, 0]);
  });
});
