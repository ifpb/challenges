<?php
use \Grammar\Grammar;

describe('Grammar Util', function () {
  xit('spelling "programador"', function () {
    expect(Grammar::spelling('programador'))->toBe('P-R-O-G-R-A-M-A-D-O-R');
  });

  xit('spelling "o dia está chuvoso"', function () {
    expect(Grammar::spelling('o dia está chuvoso'))->toBe('O-D-I-A-E-S-T-Á-C-H-U-V-O-S-O');
  });
});
