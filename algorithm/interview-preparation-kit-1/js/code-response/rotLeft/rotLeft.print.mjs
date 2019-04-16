import { rotLeft } from './rotLeft.mjs';

let arr = [1, 2, 3, 4, 5];
console.log(rotLeft(arr, 1));
console.log([2, 3, 4, 5, 1]);

let arr = [1, 2, 3, 4, 5];
console.log(rotLeft(arr, 4));
console.log([5, 1, 2, 3, 4]);

arr = [41, 73, 89, 7, 10, 1, 59, 58, 84, 77, 77, 97, 58, 1, 86, 58, 26, 10, 86, 51];
console.log(rotLeft(arr, 10));
console.log([77, 97, 58, 1, 86, 58, 26, 10, 86, 51, 41, 73, 89, 7, 10, 1, 59, 58, 84, 77]);

arr = [33, 47, 70, 37, 8, 53, 13, 93, 71, 72, 51, 100, 60, 87, 97];
console.log(rotLeft(arr, 13));
console.log([87, 97, 33, 47, 70, 37, 8, 53, 13, 93, 71, 72, 51, 100, 60]);
