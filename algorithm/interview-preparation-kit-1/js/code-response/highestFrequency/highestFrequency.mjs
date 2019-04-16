function highestFrequency(types) {
  const count = [];
  let highestFrequency = 1;
  for (const type of types) {
    if (count[type]) count[type] += 1;
    else count[type] = 1;
  }
  for (const type in count) {
    if (count[type] > count[highestFrequency]) {
      highestFrequency = +type;
    }
  }
  return highestFrequency;
}

export { highestFrequency };
