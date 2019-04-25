import { md5 } from './md5.mjs';
import { combination } from './array-combination.mjs';

Array.prototype.combination = function(length) {
  return combination(this, length);
};

Array.letters = function() {
  return 'abcdefghijklmnopqrstuvwxyz'.split('');
};

class RainbowTable {
  // TODO
}

export { RainbowTable };
