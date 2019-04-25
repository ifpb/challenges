import { funnyString } from './funnyString.mjs';

describe('Funny String', () => {
  test('the string abc is funny', () => {
    expect(funnyString('abc')).toEqual('Funny');
  });

  test('the string abd is not funny', () => {
    expect(funnyString('abd')).toEqual('Not Funny');
  });

  test('the string acxz is funny', () => {
    expect(funnyString('acxz')).toEqual('Funny');
  });

  test('the string bcxz is not funny', () => {
    expect(funnyString('bcxz')).toEqual('Not Funny');
  });
});
