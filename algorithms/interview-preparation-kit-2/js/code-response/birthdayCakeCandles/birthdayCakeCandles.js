function birthdayCakeCandles(candles) {
  let total = 0;
  let max = candles[0];
  for (const e of candles) {
    if (e > max) max = e;
  }
  for (const e of candles) {
    if (e === max) total++;
  }
  return total;
}

export { birthdayCakeCandles };
