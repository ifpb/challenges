<?php

use Anagram\Anagram;

describe('Anagram', function () {
  it('check case 0', function () {
    expect(Anagram::check('ab', 'ac'))->toEqual(2);
  });

  it('check case 1', function () {
    expect(Anagram::check('abc', 'bad'))->toEqual(2);
  });

  it('check case 2', function () {
    expect(Anagram::check('cde', 'abc'))->toEqual(4);
  });

  it('check case 3', function () {
    expect(Anagram::check('fcrxzwscanmligyxyvym', 'jxwtrhvujlmrpdoqbisbwhmgpmeoke'))->toEqual(30);
  });

  it('check case 4', function () {
    expect(Anagram::check('showman', 'woman'))->toEqual(2);
  });
});
