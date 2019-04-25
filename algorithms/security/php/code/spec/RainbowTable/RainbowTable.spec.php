<?php

use RainbowTable\RainbowTable;

describe('RainbowTable', function () {
  xit('decripting text with rot13', function () {
    expect(RainbowTable::cracker('0cc175b9c0f1b6a831c399e269772661', 1))->toBe('a');
  });

  xit('decripting text with rot13', function () {
    expect(RainbowTable::cracker('534b9a3588bdd87bf7c3b9d650e43e46', 2))->toBe('pu');
  });
});
