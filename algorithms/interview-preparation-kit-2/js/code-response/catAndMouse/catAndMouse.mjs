function catAndMouse(x, y, z) {
  const da = Math.abs(x - z);
  const db = Math.abs(y - z);
  if (da < db) return 'Cat A';
  else if (db < da) return 'Cat B';
  else return 'Mouse C';
}

export { catAndMouse };
