import { hackerrankInString } from './hackerrankInString.mjs';

describe('Hackerrank In String', () => {
  test.skip('hackerrank exist in hereiamstackerrank', () => {
    expect(hackerrankInString('hereiamstackerrank')).toEqual('YES');
  });

  test.skip('hackerrank exist in hackerworld', () => {
    expect(hackerrankInString('hackerworld')).toEqual('NO');
  });

  test.skip('hackerrank exist in hhaacckkekraraannk', () => {
    expect(hackerrankInString('hhaacckkekraraannk')).toEqual('YES');
  });

  test.skip('hackerrank exist in rhbaasdndfsdskgbfefdbrsdfhuyatrjtcrtyytktjjt', () => {
    expect(hackerrankInString('rhbaasdndfsdskgbfefdbrsdfhuyatrjtcrtyytktjjt')).toEqual('NO');
  });
});
