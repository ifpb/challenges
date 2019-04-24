function zeroMeansZero(a, b) {
  let sum = (a + b).toString();
  while (sum.includes('0')) sum = sum.replace('0', '');
  return sum;
}

export { zeroMeansZero };
