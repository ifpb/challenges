import { catAndMouse } from './catAndMouse.mjs';

describe('Cat and Mouse', () => {
  test('positions 1 for cats A and B, and for mouse C', () => {
    expect(catAndMouse(1, 2, 3)).toEqual('Cat B');
  });

  test.skip('positions 2 for cats A and B, and for mouse C', () => {
    expect(catAndMouse(1, 3, 2)).toEqual('Mouse C');
  });

  test.skip('positions 2 for cats A and B, and for mouse C', () => {
    expect(catAndMouse(1, 4, 2)).toEqual('Cat A');
  });
});
