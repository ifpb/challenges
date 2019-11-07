import { numberOfLeds } from './numberOfLeds.js';

describe('String Utils', () => {
  test.skip('number of leds needed to set 1', () => {
    expect(numberOfLeds('1')).toBe(2);
  });

  test.skip('number of leds needed to set 2', () => {
    expect(numberOfLeds('2')).toBe(5);
  });

  test.skip('number of leds needed to set 115380', () => {
    expect(numberOfLeds('115380')).toBe(27);
  });

  test.skip('number of leds needed to set 2819311', () => {
    expect(numberOfLeds('2819311')).toBe(29);
  });

  test.skip('number of leds needed to set 23456', () => {
    expect(numberOfLeds('23456')).toBe(25);
  });
});
