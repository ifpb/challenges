import { rotLeft } from './rotLeft.js';

describe('Array Utils', () => {
  test.skip('performing 1 left rotations', () => {
    const arr = [1, 2, 3, 4, 5];
    const expected = [2, 3, 4, 5, 1];
    expect(rotLeft(arr, 1)).toEqual(expected);
  });

  test.skip('performing 4 left rotations', () => {
    const arr = [1, 2, 3, 4, 5];
    const expected = [5, 1, 2, 3, 4];
    expect(rotLeft(arr, 4)).toEqual(expected);
  });

  test.skip('performing 10 left rotations', () => {
    const arr = [41, 73, 89, 7, 10, 1, 59, 58, 84, 77, 77, 97, 58, 1, 86, 58, 26, 10, 86, 51];
    const expected = [77, 97, 58, 1, 86, 58, 26, 10, 86, 51, 41, 73, 89, 7, 10, 1, 59, 58, 84, 77];
    expect(rotLeft(arr, 10)).toEqual(expected);
  });

  test.skip('performing 13 left rotations', () => {
    const arr = [33, 47, 70, 37, 8, 53, 13, 93, 71, 72, 51, 100, 60, 87, 97];
    const expected = [87, 97, 33, 47, 70, 37, 8, 53, 13, 93, 71, 72, 51, 100, 60];
    expect(rotLeft(arr, 13)).toEqual(expected);
  });
});
