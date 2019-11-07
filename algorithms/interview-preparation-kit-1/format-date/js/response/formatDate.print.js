import { longFormat } from './formatDate.js';

console.log(longFormat('29/10/1969'));
console.log('29 de outubro de 1969');

console.log(longFormat('01/01/1970'));
console.log('01 de janeiro de 1970');

console.log(longFormat('15/09/1975'));
console.log('15 de setembro de 1975');

console.log(longFormat('01/04/1976'));
console.log('01 de abril de 1976');

console.log(longFormat('01-04-1976'));
console.log('Invalid data input');

console.log(longFormat('1976'));
console.log('Invalid data input');

console.log(longFormat('aaa'));
console.log('Invalid data input');
