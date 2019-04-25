import { highestFrequency } from './highestFrequency.mjs';

describe('Array Utils', () => {
  test.skip('highest frequency of [1, 4, 4, 4, 5, 3]', () => {
    const arr = [1, 4, 4, 4, 5, 3];
    expect(highestFrequency(arr)).toBe(4);
  });

  test.skip('highest frequency of [1, 1, 1, 4, 5, 3]', () => {
    const arr = [1, 1, 1, 4, 5, 3];
    expect(highestFrequency(arr)).toBe(1);
  });

  test.skip('highest frequency of [1, 2, 3, 4, 5, 4, 3, 2, 1, 3, 4]', () => {
    const arr = [1, 2, 3, 4, 5, 4, 3, 2, 1, 3, 4];
    expect(highestFrequency(arr)).toBe(3);
  });
});
