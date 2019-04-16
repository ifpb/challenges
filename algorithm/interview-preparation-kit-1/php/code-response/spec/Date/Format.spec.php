<?php
use \Date\Format;

describe('Format Date', function () {
  it('long format of 29/10/1969', function () {
    expect(Format::long('29/10/1969'))->toBe('29 de outubro de 1969');
  });

  it('long format of 01/01/1970', function () {
    expect(Format::long('01/01/1970'))->toBe('01 de janeiro de 1970');
  });

  it('long format of 15/09/1975', function () {
    expect(Format::long('15/09/1975'))->toBe('15 de setembro de 1975');
  });

  it('long format of 01/04/1976', function () {
    expect(Format::long('01/04/1976'))->toBe('01 de abril de 1976');
  });

  it('long format of 01-04-1976', function () {
    expect(Format::long('01-04-1976'))->toBe('Invalid data input');
  });

  it('long format of 1976', function () {
    expect(Format::long('1976'))->toBe('Invalid data input');
  });

  it('long format of aaa', function () {
    expect(Format::long('aaa'))->toBe('Invalid data input');
  });
});
