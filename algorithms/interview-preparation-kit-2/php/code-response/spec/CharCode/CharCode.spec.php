<?php

use CharCode\CharCode;

describe('Char Code', function () {
  it('adding char code of "a"', function () {
    expect(CharCode::sum('a'))->toEqual(97);
  });

  it('adding char code of "b"', function () {
    expect(CharCode::sum('b'))->toEqual(98);
  });

  it('adding char code of "A"', function () {
    expect(CharCode::sum('A'))->toEqual(65);
  });

  it('adding char code of "ifpb"', function () {
    expect(CharCode::sum('ifpb'))->toEqual(417);
  });

  it('adding char code of "lorem"', function () {
    expect(CharCode::sum('lorem'))->toEqual(543);
  });

  it('addinging Codechar code of "lorem ipsum"', function () {
    expect(CharCode::sum('lorem ipsum'))->toEqual(1133);
  });
});
