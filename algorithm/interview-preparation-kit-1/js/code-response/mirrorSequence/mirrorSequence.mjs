function mirrorSequence(a, b) {
  let temp = [];
  for (var n = a; n <= b; n++) {
    temp.push(n);
  }
  const sequence = temp.join('');
  const mirror = sequence
    .split('')
    .reverse()
    .join('');
  return sequence + mirror;
}

export { mirrorSequence };
