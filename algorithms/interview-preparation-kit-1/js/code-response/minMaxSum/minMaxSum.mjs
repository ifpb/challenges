function minMaxSum(arr) {
  arr.sort();
  const sum = (x, y) => x + y;
  const result = [arr.slice(0, -1).reduce(sum), arr.slice(1).reduce(sum)];
  return result;
}

export { minMaxSum };
