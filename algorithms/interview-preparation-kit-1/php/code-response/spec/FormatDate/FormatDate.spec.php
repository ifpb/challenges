<?php
use \FormatDate\FormatDate;

describe('Format Date', function () {

  it('long format of 29/10/1969', function () {
    expect(FormatDate::check('29/10/1969'))->toBe('29 de outubro de 1969');
  });

  it('long format of 01/01/1970', function () {
    expect(FormatDate::check('01/01/1970'))->toBe('01 de janeiro de 1970');
  });

  it('long format of 15/09/1975', function () {
    expect(FormatDate::check('15/09/1975'))->toBe('15 de setembro de 1975');
  });

  it('long format of 01/04/1976', function () {
    expect(FormatDate::check('01/04/1976'))->toBe('01 de abril de 1976');
  });

  it('long format of 01-04-1976', function () {
    expect(FormatDate::check('01-04-1976'))->toBe('Invalid data input');
  });

  it('long format of 1976', function () {
    expect(FormatDate::check('1976'))->toBe('Invalid data input');
  });

  it('long format of aaa', function () {
    expect(FormatDate::check('aaa'))->toBe('Invalid data input');
  });
});
