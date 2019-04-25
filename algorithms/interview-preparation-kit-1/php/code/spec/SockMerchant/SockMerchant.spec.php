<?php

use \SockMerchant\SockMerchant;

describe('Sock Merchant', function () {
  xit('number of matching pairs of [1, 2, 3]', function () {
    $arr = [1, 2, 3];
    expect(SockMerchant::sockMerchant($arr))->toBe(0);
  });

  xit('number of matching pairs of [1, 1, 1, 2]', function () {
    $arr = [1, 1, 1, 2];
    expect(SockMerchant::sockMerchant($arr))->toBe(1);
  });

  xit('number of matching pairs of [1, 2, 1, 2, 1, 3, 2]', function () {
    $arr = [1, 2, 1, 2, 1, 3, 2];
    expect(SockMerchant::sockMerchant($arr))->toBe(2);
  });

  xit('number of matching pairs of [10, 20, 20, 10, 10, 30, 50, 10, 20]', function () {
    $arr = [10, 20, 20, 10, 10, 30, 50, 10, 20];
    expect(SockMerchant::sockMerchant($arr))->toBe(3);
  });
});
