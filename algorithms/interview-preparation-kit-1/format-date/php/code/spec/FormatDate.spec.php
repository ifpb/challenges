<?php
use \Challenge\FormatDate;

describe('Format Date', function () {

  it('long format of 29/10/1969', function () {
    expect(FormatDate::check('29/10/1969'))->toBe('29 de outubro de 1969');
  });

  xit('long format of 01/01/1970', function () {
    expect(FormatDate::check('01/01/1970'))->toBe('01 de janeiro de 1970');
  });

  xit('long format of 15/09/1975', function () {
    expect(FormatDate::check('15/09/1975'))->toBe('15 de setembro de 1975');
  });

  xit('long format of 01/04/1976', function () {
    expect(FormatDate::check('01/04/1976'))->toBe('01 de abril de 1976');
  });

  xit('long format of 01-04-1976', function () {
    expect(FormatDate::check('01-04-1976'))->toBe('Invalid data input');
  });

  xit('long format of 1976', function () {
    expect(FormatDate::check('1976'))->toBe('Invalid data input');
  });

  xit('long format of aaa', function () {
    expect(FormatDate::check('aaa'))->toBe('Invalid data input');
  });
});
