Array.prototype.uniq = function() {
  let uniq = [];
  let values = this;

  values.forEach(function(v) {
    if (!uniq.includes(v)) uniq.push(v);
  });

  return uniq;
};

class WordFrequency {
  // TODO
}

export { WordFrequency };
