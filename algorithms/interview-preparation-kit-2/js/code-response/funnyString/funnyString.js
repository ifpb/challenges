function funnyString(s) {
  const r = s.split('').map(l => l.charCodeAt());
  s = s.split('').map(l => l.charCodeAt());
  r.reverse();
  for (let i = 0; i < s.length - 1; i++) {
    if (Math.abs(s[i + 1] - s[i]) !== Math.abs(r[i + 1] - r[i])) return 'Not Funny';
  }
  return 'Funny';
}

export { funnyString };
