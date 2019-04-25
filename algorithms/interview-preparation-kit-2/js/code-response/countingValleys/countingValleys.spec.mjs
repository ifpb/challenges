import { countingValleys } from './countingValleys.mjs';

describe('Valleys', () => {
  test('counting valleys (1)', () => {
    expect(countingValleys('DU')).toEqual(1);
  });

  test('counting valleys (2)', () => {
    expect(countingValleys('DUDU')).toEqual(2);
  });

  test('counting valleys (3)', () => {
    expect(countingValleys('UUUDU')).toEqual(0);
  });

  test('counting valleys (4)', () => {
    expect(countingValleys('UDDDUDUU')).toEqual(1);
  });

  test('counting valleys (5)', () => {
    expect(countingValleys('DDUUDDUDUUUD')).toEqual(2);
  });
});
