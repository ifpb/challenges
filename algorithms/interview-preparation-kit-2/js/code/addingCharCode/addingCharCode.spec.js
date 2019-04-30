import { addingCharCode } from './addingCharCode.js';

describe('Char Code', () => {
  test.skip('adding char code of "a"', () => {
    expect(addingCharCode('a')).toEqual(97);
  });

  test.skip('adding char code of "b"', () => {
    expect(addingCharCode('b')).toEqual(98);
  });

  test.skip('adding char code of "A"', () => {
    expect(addingCharCode('A')).toEqual(65);
  });

  test.skip('adding char code of "ifpb"', () => {
    expect(addingCharCode('ifpb')).toEqual(417);
  });

  test.skip('adding char code of "lorem"', () => {
    expect(addingCharCode('lorem')).toEqual(543);
  });

  test.skip('addinging Codechar code of "lorem ipsum"', () => {
    expect(addingCharCode('lorem ipsum')).toEqual(1133);
  });
});
