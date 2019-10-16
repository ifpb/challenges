<?php

use Squares\Squares;

describe('Squares', function () {
  it('square of sum 1', function () {
    expect(Squares::squareOfSum(1))->toEqual(1);
  });

  xit('square of sum 5', function () {
    expect(Squares::squareOfSum(5))->toEqual(225);
  });

  xit('square of sum 10', function () {
    expect(Squares::squareOfSum(10))->toEqual(3025);
  });

  xit('square of sum 100', function () {
    expect(Squares::squareOfSum(100))->toEqual(25502500);
  });

  xit('sum of squares 1', function () {
    expect(Squares::sumOfSquares(1))->toEqual(1);
  });

  xit('sum of squares 5', function () {
    expect(Squares::sumOfSquares(5))->toEqual(55);
  });

  xit('sum of squares 10', function () {
    expect(Squares::sumOfSquares(10))->toEqual(385);
  });

  xit('sum of squares 100', function () {
    expect(Squares::sumOfSquares(100))->toEqual(338350);
  });

  xit('difference of squares 1', function () {
    expect(Squares::difference(1))->toEqual(0);
  });

  xit('difference of squares 5', function () {
    expect(Squares::difference(5))->toEqual(170);
  });

  xit('difference of squares 10', function () {
    expect(Squares::difference(10))->toEqual(2640);
  });

  xit('difference of squares 100', function () {
    expect(Squares::difference(100))->toEqual(25164150);
  });
});
