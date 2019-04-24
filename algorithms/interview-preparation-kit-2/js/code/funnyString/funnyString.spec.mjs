import { funnyString } from './funnyString.mjs';

describe('Funny String', () => {
  test('the string abc is funny', () => {
    expect(funnyString('abc')).toEqual('Funny');
  });

  test.skip('the string abd is not funny', () => {
    expect(funnyString('abd')).toEqual('Not Funny');
  });

  test.skip('the string acxz is funny', () => {
    expect(funnyString('acxz')).toEqual('Funny');
  });

  test.skip('the string bcxz is not funny', () => {
    expect(funnyString('bcxz')).toEqual('Not Funny');
  });
});
