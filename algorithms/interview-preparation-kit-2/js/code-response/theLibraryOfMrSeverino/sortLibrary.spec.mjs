import { sortLibrary } from './sortLibrary.mjs';

describe('The Library of Mr Severino', () => {
  test('sort codes collection 3000, 2000, 1000', () => {
    const codes = ['3000', '2000', '1000'];
    const expected = ['1000', '2000', '3000'];
    expect(sortLibrary(codes)).toEqual(expected);
  });

  test('sort codes collection 1233, 0015, 0100', () => {
    const codes = ['1233', '0015', '0100'];
    const expected = ['0015', '0100', '1233'];
    expect(sortLibrary(codes)).toEqual(expected);
  });

  test('sort codes collection 0752, 1110, 0001, 6322, 8000, 6321, 0000', () => {
    const codes = ['0752', '1110', '0001', '6322', '8000', '6321', '0000'];
    const expected = ['0000', '0001', '0752', '1110', '6321', '6322', '8000'];
    expect(sortLibrary(codes)).toEqual(expected);
  });
});
