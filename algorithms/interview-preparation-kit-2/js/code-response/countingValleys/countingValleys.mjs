function countingValleys(s) {
  let level = 0;
  let count = 0;
  for (const step of s) {
    let valeyOut;
    if (level < 0) valeyOut = false;
    level += step === 'U' ? +1 : -1;
    if (valeyOut === false && level === 0) valeyOut = true;
    if (valeyOut) count++;
  }
  return count;
}

export { countingValleys };
