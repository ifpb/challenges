import { md5 } from './md5.js';
import { combination } from './array-combination.js';

Array.prototype.combination = function(length) {
  return combination(this, length);
};

Array.letters = function() {
  return 'abcdefghijklmnopqrstuvwxyz'.split('');
};

class RainbowTable {
  constructor(length) {
    this.table(length);
  }

  table(length) {
    Array.letters()
      .combination(length)
      .forEach(combination => {
        this.table[md5(combination)] = combination;
      });
  }

  cracker(hash) {
    return this.table[hash];
  }
}

export { RainbowTable };
