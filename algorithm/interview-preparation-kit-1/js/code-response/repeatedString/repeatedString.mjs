function repeatedString(s, n) {
  const size = s.length;
  const repeat = Math.floor(n / size);
  const remainder = n % size;
  const count = s.split('a').length - 1;
  const countRemainer = s.slice(0, remainder).split('a').length - 1;
  return count * repeat + countRemainer;
}

export { repeatedString };
