import { countApplesAndOranges } from './countApplesAndOranges.mjs';

describe('Apples and Oranges', () => {
  test('count fruits 1', () => {
    expect(countApplesAndOranges(5, 10, 0, 15, [0, 3, 6], [17, 20])).toEqual([1, 0]);
  });

  test('count fruits 2', () => {
    expect(countApplesAndOranges(7, 11, 5, 15, [-2, 2, 1], [5, -6])).toEqual([1, 1]);
  });

  test('count fruits 3', () => {
    expect(countApplesAndOranges(8, 9, -1, 15, [-2, 2, 10], [20, 21])).toEqual([1, 0]);
  });
});
