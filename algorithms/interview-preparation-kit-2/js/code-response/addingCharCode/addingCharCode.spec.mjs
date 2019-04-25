import { addingCharCode } from './addingCharCode.mjs';

describe('Char Code', () => {
  test('adding char code of "a"', () => {
    expect(addingCharCode('a')).toEqual(97);
  });

  test('adding char code of "b"', () => {
    expect(addingCharCode('b')).toEqual(98);
  });

  test('adding char code of "A"', () => {
    expect(addingCharCode('A')).toEqual(65);
  });

  test('adding char code of "ifpb"', () => {
    expect(addingCharCode('ifpb')).toEqual(417);
  });

  test('adding char code of "lorem"', () => {
    expect(addingCharCode('lorem')).toEqual(543);
  });

  test('addinging Codechar code of "lorem ipsum"', () => {
    expect(addingCharCode('lorem ipsum')).toEqual(1133);
  });
});
