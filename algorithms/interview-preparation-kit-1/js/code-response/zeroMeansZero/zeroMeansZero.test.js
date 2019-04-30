import { zeroMeansZero } from './zeroMeansZero.js';

describe('String Utils', () => {
  test('remove zero of 7 + 8', () => {
    expect(zeroMeansZero(7, 8)).toBe('15');
  });

  test('remove zero of 15 + 5', () => {
    expect(zeroMeansZero(15, 5)).toBe('2');
  });

  test('remove zero of 99 + 6', () => {
    expect(zeroMeansZero(99, 6)).toBe('15');
  });
});
