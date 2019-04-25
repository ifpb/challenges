<?php

use BirthdayCakeCandles\BirthdayCakeCandles;

describe('Birthday Cake Candles', function () {
  xit('1 candles that can be blown in [1, 1, 1, 3]', function () {
    expect(BirthdayCakeCandles::blowOut([1, 1, 1, 3]))->toBe(1);
  });

  xit('2 candles that can be blown in [1, 3, 1, 3]', function () {
    expect(BirthdayCakeCandles::blowOut([1, 3, 1, 3]))->toBe(2);
  });

  xit('3 candles that can be blown in [1, 3, 3, 3]', function () {
    expect(BirthdayCakeCandles::blowOut([1, 3, 3, 3]))->toBe(3);
  });

  xit('2 candles that can be blown in [3, 2, 1, 3]', function () {
    expect(BirthdayCakeCandles::blowOut([3, 2, 1, 3]))->toBe(2);
  });

  xit('5 candles that can be blown in [18, 90, 90, 75, 90, 8, 90, 43]', function () {
    expect(BirthdayCakeCandles::blowOut([18, 90, 90, 13, 90, 75, 90, 8, 90, 43]))->toBe(5);
  });
});
