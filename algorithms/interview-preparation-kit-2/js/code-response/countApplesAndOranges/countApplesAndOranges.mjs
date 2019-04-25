function countApplesAndOranges(s, t, a, b, apples, oranges) {
  const applesLength = apples.map(apple => apple + a).filter(apple => (apple >= s) & (apple <= t))
    .length;
  const orangesLength = oranges
    .map(orange => orange + b)
    .filter(orange => (orange >= s) & (orange <= t)).length;
  console.log([applesLength, orangesLength]);
  return [applesLength, orangesLength];
}

export { countApplesAndOranges };
