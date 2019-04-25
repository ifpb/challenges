function compareTheTriplets(a0, a1, a2, b0, b1, b2) {
  const a = [a0, a1, a2];
  const b = [b0, b1, b2];
  let totalA = 0;
  let totalB = 0;
  a.forEach((e, i) => {
    if (e > b[i]) totalA += 1;
    if (e < b[i]) totalB += 1;
  });
  return [totalA, totalB];
}

export { compareTheTriplets };
