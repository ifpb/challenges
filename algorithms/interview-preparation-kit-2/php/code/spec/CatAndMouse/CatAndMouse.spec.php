<?php

use CatAndMouse\CatAndMouse;

describe('Cat and Mouse', function () {
  xit('positions 1 for cats A and B, and for mouse C', function () {
    expect(CatAndMouse::result(1, 2, 3))->toEqual('Cat B');
  });

  xit('positions 2 for cats A and B, and for mouse C', function () {
    expect(CatAndMouse::result(1, 3, 2))->toEqual('Mouse C');
  });

  xit('positions 2 for cats A and B, and for mouse C', function () {
    expect(CatAndMouse::result(1, 4, 2))->toEqual('Cat A');
  });
});
