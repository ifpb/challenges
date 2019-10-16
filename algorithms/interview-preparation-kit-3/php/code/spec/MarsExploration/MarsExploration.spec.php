<?php

use MarsExploration\MarsExploration;

describe('MarsExploration', function () {
  it('check case 0', function () {
    expect(MarsExploration::check('SOS'))->toEqual(0);
  });

  xit('check case 1', function () {
    expect(MarsExploration::check('SOA'))->toEqual(1);
  });

  xit('check case 2', function () {
    expect(MarsExploration::check('SOSSPSSQSSOR'))->toEqual(3);
  });

  xit('check case 3', function () {
    expect(MarsExploration::check('SOSSOT'))->toEqual(1);
  });

  xit('check case 4', function () {
    expect(MarsExploration::check('SOSSOSSOS'))->toEqual(0);
  });
});
