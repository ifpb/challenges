<?php

use FunnyString\FunnyString;;

describe('Funny String', function () {
  it('the string abc is funny', function () {
    expect(FunnyString::check('abc'))->toEqual('Funny');
  });

  it('the string abd is not funny', function () {
    expect(FunnyString::check('abd'))->toEqual('Not Funny');
  });

  it('the string acxz is funny', function () {
    expect(FunnyString::check('acxz'))->toEqual('Funny');
  });

  it('the string bcxz is not funny', function () {
    expect(FunnyString::check('bcxz'))->toEqual('Not Funny');
  });
});
