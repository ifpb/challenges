import { birthdayCakeCandles } from './birthdayCakeCandles.mjs';

describe('Birthday Cake Candles', () => {
  test('1 candles that can be blown in [1, 1, 1, 3]', () => {
    expect(birthdayCakeCandles([1, 1, 1, 3])).toBe(1);
  });

  test('2 candles that can be blown in [1, 3, 1, 3]', () => {
    expect(birthdayCakeCandles([1, 3, 1, 3])).toBe(2);
  });

  test('3 candles that can be blown in [1, 3, 3, 3]', () => {
    expect(birthdayCakeCandles([1, 3, 3, 3])).toBe(3);
  });

  test('2 candles that can be blown in [3, 2, 1, 3]', () => {
    expect(birthdayCakeCandles([3, 2, 1, 3])).toBe(2);
  });

  test('5 candles that can be blown in [18, 90, 90, 75, 90, 8, 90, 43]', () => {
    expect(birthdayCakeCandles([18, 90, 90, 13, 90, 75, 90, 8, 90, 43])).toBe(5);
  });
});
