<?php

use \Challenge\SockMerchant;

describe('Sock Merchant', function () {
  it('number of matching pairs of [1, 2, 3]', function () {
    $arr = [1, 2, 3];
    expect(SockMerchant::pairs($arr))->toBe(0);
  });

  it('number of matching pairs of [1, 1, 1, 2]', function () {
    $arr = [1, 1, 1, 2];
    expect(SockMerchant::pairs($arr))->toBe(1);
  });

  it('number of matching pairs of [1, 2, 1, 2, 1, 3, 2]', function () {
    $arr = [1, 2, 1, 2, 1, 3, 2];
    expect(SockMerchant::pairs($arr))->toBe(2);
  });

  it('number of matching pairs of [10, 20, 20, 10, 10, 30, 50, 10, 20]', function () {
    $arr = [10, 20, 20, 10, 10, 30, 50, 10, 20];
    expect(SockMerchant::pairs($arr))->toBe(3);
  });
});
