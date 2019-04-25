<?php

use Library\Library;

describe('The Library of Mr Severino', function () {
  it('sort codes collection 3000, 2000, 1000', function () {
    $codes = ['3000', '2000', '1000'];
    $expected = ['1000', '2000', '3000'];
    expect(Library::sort($codes))->toEqual($expected);
  });

  it('sort codes collection 1233, 0015, 0100', function () {
    $codes = ['1233', '0015', '0100'];
    $expected = ['0015', '0100', '1233'];
    expect(Library::sort($codes))->toEqual($expected);
  });

  it('sort codes collection 0752, 1110, 0001, 6322, 8000, 6321, 0000', function () {
    $codes = ['0752', '1110', '0001', '6322', '8000', '6321', '0000'];
    $expected = ['0000', '0001', '0752', '1110', '6321', '6322', '8000'];
    expect(Library::sort($codes))->toEqual($expected);
  });
});
