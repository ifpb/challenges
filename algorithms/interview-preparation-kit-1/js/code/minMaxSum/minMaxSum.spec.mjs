import { minMaxSum } from './minMaxSum.mjs';

describe('Array Utils', () => {
  test.skip('min and max of [1, 2, 3, 4, 5]', () => {
    const arr = [1, 2, 3, 4, 5];
    const expected = [10, 14];
    expect(minMaxSum(arr)).toEqual(expected);
  });

  test.skip('min and max of [0, 2, 6, 3, 4]', () => {
    const arr = [0, 2, 6, 3, 4];
    const expected = [9, 15];
    expect(minMaxSum(arr)).toEqual(expected);
  });

  test.skip('min and max of [10, 23, 61, 37, 41]', () => {
    const arr = [10, 23, 61, 37, 41];
    const expected = [111, 162];
    expect(minMaxSum(arr)).toEqual(expected);
  });
});
