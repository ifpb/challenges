<?php

use Valleys\Valleys;

describe('Valleys', function () {
  xit('counting valleys (1)', function () {
    expect(Valleys::count('DU'))->toEqual(1);
  });

  xit('counting valleys (2)', function () {
    expect(Valleys::count('DUDU'))->toEqual(2);
  });

  xit('counting valleys (3)', function () {
    expect(Valleys::count('UUUDU'))->toEqual(0);
  });

  xit('counting valleys (4)', function () {
    expect(Valleys::count('UDDDUDUU'))->toEqual(1);
  });

  xit('counting valleys (5)', function () {
    expect(Valleys::count('DDUUDDUDUUUD'))->toEqual(2);
  });
});
