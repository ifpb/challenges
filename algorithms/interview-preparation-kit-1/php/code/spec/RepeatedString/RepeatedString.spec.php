<?php

use \RepeatedString\RepeatedString;

describe('Repeated String', function () {

  it('number of letter a in the first 10 repeated string', function () {
    expect(RepeatedString::calc('a', 10))->toBe(10);
  });

  xit('number of letter a in the first 10 repeated string', function () {
    expect(RepeatedString::calc('b', 10))->toBe(0);
  });

  xit('number of letter a in the first 10 repeated string', function () {
    expect(RepeatedString::calc('aba', 10))->toBe(7);
  });

  xit('number of letter a in the first 1000000000000 repeated string', function () {
    expect(RepeatedString::calc('a', 1000000000000))->toBe(1000000000000);
  });

});
