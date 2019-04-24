import { stats } from './arrayStats.mjs';

describe('Array Utils', () => {
  test('stats [1, 1, 1]', () => {
    const arr = [1, 1, 1];
    const expected = ['0.000000', '0.000000', '1.000000'];
    expect(stats(arr)).toEqual(expected);
  });

  test.skip('stats [0, 0, 1, 1]', () => {
    const arr = [0, 0, 1, 1];
    const expected = ['0.000000', '0.500000', '0.500000'];
    expect(stats(arr)).toEqual(expected);
  });

  test.skip('stats [-4, 3, -9, 0, 4, 1]', () => {
    const arr = [-4, 3, -9, 0, 4, 1];
    const expected = ['0.333333', '0.166667', '0.500000'];
    expect(stats(arr)).toEqual(expected);
  });

  test.skip('stats [1, 2, 3, -1, -2, -3, 0, 0]', () => {
    const arr = [1, 2, 3, -1, -2, -3, 0, 0];
    const expected = ['0.375000', '0.250000', '0.375000'];
    expect(stats(arr)).toEqual(expected);
  });
});
