<?php

use FunnyString\FunnyString;;

describe('Funny String', function () {
  xit('the string abc is funny', function () {
    expect(FunnyString::check('abc'))->toEqual('Funny');
  });

  xit('the string abd is not funny', function () {
    expect(FunnyString::check('abd'))->toEqual('Not Funny');
  });

  xit('the string acxz is funny', function () {
    expect(FunnyString::check('acxz'))->toEqual('Funny');
  });

  xit('the string bcxz is not funny', function () {
    expect(FunnyString::check('bcxz'))->toEqual('Not Funny');
  });
});
