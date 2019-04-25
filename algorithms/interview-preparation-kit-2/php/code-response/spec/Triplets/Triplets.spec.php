<?php

use Triplets\Triplets;

describe('Compare the Triplets', function () {
  it('comparing the triples 1, 1, 1 and 0, 0, 0', function () {
    expect(Triplets::compare(1, 1, 1, 0, 0, 0))->toEqual([3, 0]);
  });

  it('comparing the triples 0, 0, 0 and 1, 1, 1', function () {
    expect(Triplets::compare(0, 0, 0, 1, 1, 1))->toEqual([0, 3]);
  });

  it('comparing the triples 17, 28, 30 and 99, 16, 8', function () {
    expect(Triplets::compare(17, 28, 30, 99, 16, 8))->toEqual([2, 1]);
  });

  it('comparing the triples 5, 6, 7 and 3, 6, 10', function () {
    expect(Triplets::compare(5, 6, 7, 3, 6, 10))->toEqual([1, 1]);
  });
});
