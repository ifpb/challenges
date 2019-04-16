function rotLeft(a, d) {
  return a.slice(d).concat(a.slice(0, d));
}

export { rotLeft };
