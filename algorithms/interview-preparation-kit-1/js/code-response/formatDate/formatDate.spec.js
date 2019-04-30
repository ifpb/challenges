import { longFormat } from './formatDate.js';

describe('Format Date', () => {
  test('long format of 29/10/1969', () => {
    expect(longFormat('29/10/1969')).toBe('29 de outubro de 1969');
  });

  test('long format of 01/01/1970', () => {
    expect(longFormat('01/01/1970')).toBe('01 de janeiro de 1970');
  });

  test('long format of 15/09/1975', () => {
    expect(longFormat('15/09/1975')).toBe('15 de setembro de 1975');
  });

  test('long format of 01/04/1976', () => {
    expect(longFormat('01/04/1976')).toBe('01 de abril de 1976');
  });

  test('long format of 01-04-1976', () => {
    expect(longFormat('01-04-1976')).toBe('Invalid data input');
  });

  test('long format of 1976', () => {
    expect(longFormat('1976')).toBe('Invalid data input');
  });

  test('long format of aaa', () => {
    expect(longFormat('aaa')).toBe('Invalid data input');
  });
});
