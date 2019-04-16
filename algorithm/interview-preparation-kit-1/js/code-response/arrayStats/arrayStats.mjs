function stats(arr) {
  const stat = [0, 0, 0];
  arr.forEach(e => {
    if (e < 0) stat[0] += 1;
    else if (e === 0) stat[1] += 1;
    else stat[2] += 1;
  });

  return stat.map(e => Number(e / arr.length).toFixed(6));
}

export { stats };
