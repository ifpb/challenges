Array.prototype.rotate = function(n) {
  return this.slice(n, this.length).concat(this.slice(0, n));
};

class Cipher {
  // TODO
}

export { Cipher };
