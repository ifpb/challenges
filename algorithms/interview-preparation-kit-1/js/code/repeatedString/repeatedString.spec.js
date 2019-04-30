import { repeatedString } from './repeatedString.js';

describe('String Utils', () => {
  test.skip('number of letter a in the first 10 repeated string', () => {
    expect(repeatedString('a', 10)).toBe(10);
  });

  test.skip('number of letter a in the first 10 repeated string', () => {
    expect(repeatedString('b', 10)).toBe(0);
  });

  test.skip('number of letter a in the first 10 repeated string', () => {
    expect(repeatedString('aba', 10)).toBe(7);
  });

  test.skip('number of letter a in the first 1000000000000 repeated string', () => {
    expect(repeatedString('a', 1000000000000)).toBe(1000000000000);
  });
});
