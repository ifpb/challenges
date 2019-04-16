function numberOfLeds(number) {
  const led = [6, 2, 5, 5, 4, 5, 6, 3, 7, 6];
  const total = number.split('').reduce((t, l) => t + led[l], 0);
  return total;
}

export { numberOfLeds };
