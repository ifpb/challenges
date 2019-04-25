<?php

use CharCode\CharCode;

describe('Char Code', function () {
  xit('adding char code of "a"', function () {
    expect(CharCode::sum('a'))->toEqual(97);
  });

  xit('adding char code of "b"', function () {
    expect(CharCode::sum('b'))->toEqual(98);
  });

  xit('adding char code of "A"', function () {
    expect(CharCode::sum('A'))->toEqual(65);
  });

  xit('adding char code of "ifpb"', function () {
    expect(CharCode::sum('ifpb'))->toEqual(417);
  });

  xit('adding char code of "lorem"', function () {
    expect(CharCode::sum('lorem'))->toEqual(543);
  });

  xit('addinging Codechar code of "lorem ipsum"', function () {
    expect(CharCode::sum('lorem ipsum'))->toEqual(1133);
  });
});
