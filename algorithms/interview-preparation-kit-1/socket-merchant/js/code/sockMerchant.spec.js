import { sockMerchant } from './sockMerchant.js';

describe('Sock Merchant', () => {
  test.skip('number of matching pairs of [1, 2, 3]', () => {
    let arr = [1, 2, 3];
    expect(sockMerchant(arr)).toBe(0);
  });

  test.skip('number of matching pairs of [1, 1, 1, 2]', () => {
    let arr = [1, 1, 1, 2];
    expect(sockMerchant(arr)).toBe(1);
  });

  test.skip('number of matching pairs of [1, 2, 1, 2, 1, 3, 2]', () => {
    let arr = [1, 2, 1, 2, 1, 3, 2];
    expect(sockMerchant(arr)).toBe(2);
  });

  test.skip('number of matching pairs of [10, 20, 20, 10, 10, 30, 50, 10, 20]', () => {
    let arr = [10, 20, 20, 10, 10, 30, 50, 10, 20];
    expect(sockMerchant(arr)).toBe(3);
  });
});
