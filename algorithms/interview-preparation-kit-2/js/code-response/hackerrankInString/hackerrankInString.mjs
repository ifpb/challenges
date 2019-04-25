function hackerrankInString(s) {
  const hackerrank = 'hackerrank';
  for (let i = 0, index = 0; i < s.length; i++) {
    if (s.charAt(i) === hackerrank.charAt(index)) {
      index++;
    }
    if (index == hackerrank.length) {
      return 'YES';
    }
  }
  return 'NO';
}

export { hackerrankInString };
