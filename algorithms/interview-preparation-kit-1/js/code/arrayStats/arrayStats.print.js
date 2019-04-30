import { stats } from './arrayStats.js';

console.log(stats([1, 1, 1]));
console.log(['0.000000', '0.000000', '1.000000']);

console.log(stats([0, 0, 1, 1]));
console.log(['0.000000', '0.500000', '0.500000']);

console.log(stats([-4, 3, -9, 0, 4, 1]));
console.log(['0.333333', '0.166667', '0.500000']);

console.log(stats([1, 2, 3, -1, -2, -3, 0, 0]));
console.log(['0.375000', '0.250000', '0.375000']);
