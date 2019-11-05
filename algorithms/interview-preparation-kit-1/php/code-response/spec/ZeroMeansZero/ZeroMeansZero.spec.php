<?php

use \ZeroMeansZero\ZeroMeansZero;

describe('Zero means Zero', function () {

  it('remove zero of 7 + 8', function () {
    expect(ZeroMeansZero::change(7, 8))->toBe('15');
  });

  it('remove zero of 15 + 5', function () {
    expect(ZeroMeansZero::change(15, 5))->toBe('2');
  });

  it('remove zero of 99 + 6', function () {
    expect(ZeroMeansZero::change(99, 6))->toBe('15');
  });

});
