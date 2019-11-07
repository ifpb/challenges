<?php

use \Challenge\MirrorSequence;

describe('Mirror Sequence', function () {

  it('mirror sequence of 1 to 5', function () {
    expect(MirrorSequence::generate(1, 5))->toBe('1234554321');
  });

  xit('mirror sequence of 10 to 13', function () {
    expect(MirrorSequence::generate(10, 13))->toBe('1011121331211101');
  });

  xit('mirror sequence of 98 to 101', function () {
    expect(MirrorSequence::generate(98, 101))->toBe('98991001011010019989');
  });

});
