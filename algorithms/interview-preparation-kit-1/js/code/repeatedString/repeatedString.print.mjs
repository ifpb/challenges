import { repeatedString } from './repeatedString.mjs';

console.log(repeatedString('a', 10));
console.log(10);

console.log(repeatedString('b', 10));
console.log(0);

console.log(repeatedString('aba', 10));
console.log(7);

console.log(repeatedString('a', 1000000000000));
console.log(1000000000000);
