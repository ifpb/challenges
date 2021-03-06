<?php

use Pangram\Pangram;

describe('Pangram', function () {
  it('check case 0', function () {
    expect(Pangram::check(''))->toBeFalsy();
  });

  it('check case 1', function () {
    expect(Pangram::check('Jane quer LP, fax, CD, giz, TV e bom whisky'))->toBeTruthy();
  });

  it('check case 2', function () {
    expect(Pangram::check('the quick brown fox jumps over the lazy dog'))->toBeTruthy();
  });

  it('check case 3', function () {
    expect(Pangram::check('a quick movement of the enemy will jeopardize five gunboats'))->toBeFalsy();
  });

  it('check case 4', function () {
    expect(Pangram::check('the quick brown fish jumps over the lazy dog'))->toBeFalsy();
  });

  it('check case 5', function () {
    expect(Pangram::check('the_quick_brown_fox_jumps_over_the_lazy_dog'))->toBeTruthy();
  });

  it('check case 6', function () {
    expect(Pangram::check('the 1 quick brown fox jumps over the 2 lazy dogs'))->toBeTruthy();
  });

  it('check case 7', function () {
    expect(Pangram::check('7h3 qu1ck brown fox jumps ov3r 7h3 lazy dog'))->toBeFalsy();
  });

  it('check case 8', function () {
    expect(Pangram::check('"Five quacking Zephyrs jolt my wax bed."'))->toBeTruthy();
  });

  it('check case 9', function () {
    expect(Pangram::check('the quick brown fox jumped over the lazy FOX'))->toBeFalsy();
  });
});
