import { mirrorSequence } from './mirrorSequence.mjs';

describe('String Utils', () => {
  test('mirror sequence of 1 to 5', () => {
    expect(mirrorSequence(1, 5)).toBe('1234554321');
  });

  test('mirror sequence of 10 to 13', () => {
    expect(mirrorSequence(10, 13)).toBe('1011121331211101');
  });

  test('mirror sequence of 98 to 101', () => {
    expect(mirrorSequence(98, 101)).toBe('98991001011010019989');
  });
});
