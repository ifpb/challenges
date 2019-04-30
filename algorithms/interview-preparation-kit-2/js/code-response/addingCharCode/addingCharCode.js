function addingCharCode(s) {
  return s
    .split('')
    .map(c => c.charCodeAt())
    .reduce((a, b) => +a + +b, 0);
}

export { addingCharCode };
