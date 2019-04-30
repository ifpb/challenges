import { md5 } from './md5.js';
import { combination } from './array-combination.js';

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
