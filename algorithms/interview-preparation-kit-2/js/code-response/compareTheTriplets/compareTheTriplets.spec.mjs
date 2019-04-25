import { compareTheTriplets } from './compareTheTriplets.mjs';

describe('Compare the Triplets', () => {
  test('comparing the triples 1, 1, 1 and 0, 0, 0', () => {
    expect(compareTheTriplets(1, 1, 1, 0, 0, 0)).toEqual([3, 0]);
  });

  test('comparing the triples 0, 0, 0 and 1, 1, 1', () => {
    expect(compareTheTriplets(0, 0, 0, 1, 1, 1)).toEqual([0, 3]);
  });

  test('comparing the triples 17, 28, 30 and 99, 16, 8', () => {
    expect(compareTheTriplets(17, 28, 30, 99, 16, 8)).toEqual([2, 1]);
  });

  test('comparing the triples 5, 6, 7 and 3, 6, 10', () => {
    expect(compareTheTriplets(5, 6, 7, 3, 6, 10)).toEqual([1, 1]);
  });
});
