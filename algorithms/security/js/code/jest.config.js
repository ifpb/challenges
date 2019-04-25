// For a detailed explanation regarding each configuration property, visit:
// https://jestjs.io/docs/en/configuration.html

module.exports = {
  testEnvironment: 'node',
  moduleFileExtensions: ['js', 'mjs', 'json', 'jsx', 'ts', 'tsx', 'node'],
  testMatch: ['**/?(*.)+(spec|test).mjs'],
  transform: {
    '^.+\\.mjs$': 'babel-jest',
  },
};
