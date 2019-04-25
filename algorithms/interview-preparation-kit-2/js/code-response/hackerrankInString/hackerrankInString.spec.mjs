import { hackerrankInString } from './hackerrankInString.mjs';

describe('Hackerrank In String', () => {
  test('hackerrank exist in hereiamstackerrank', () => {
    expect(hackerrankInString('hereiamstackerrank')).toEqual('YES');
  });

  test('hackerrank exist in hackerworld', () => {
    expect(hackerrankInString('hackerworld')).toEqual('NO');
  });

  test('hackerrank exist in hhaacckkekraraannk', () => {
    expect(hackerrankInString('hhaacckkekraraannk')).toEqual('YES');
  });

  test('hackerrank exist in rhbaasdndfsdskgbfefdbrsdfhuyatrjtcrtyytktjjt', () => {
    expect(hackerrankInString('rhbaasdndfsdskgbfefdbrsdfhuyatrjtcrtyytktjjt')).toEqual('NO');
  });
});
