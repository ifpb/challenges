import { pokemonCollection } from './pokemonCollection.mjs';

describe('Pokemon Collection', () => {
  test.skip('collection with 1 pokemon not including repetitions', () => {
    const pokemons = ['Zubat'];
    expect(pokemonCollection(pokemons)).toBe(150);
  });

  test.skip('collection with 1 pokemon including repetitions', () => {
    const pokemons = ['Zubat', 'Zubat', 'Zubat', 'Zubat', 'Zubat', 'Zubat', 'Zubat', 'Zubat'];
    expect(pokemonCollection(pokemons)).toBe(150);
  });

  test.skip('collection with 2 pokemon including repetitions', () => {
    const pokemons = ['Zubat', 'Pikachu', 'Pikachu'];
    expect(pokemonCollection(pokemons)).toBe(149);
  });

  test.skip('collection with 4 pokemon not including repetitions', () => {
    const pokemons = ['Zubat', 'Charmander', 'Caterpie', 'Pidgeot'];
    expect(pokemonCollection(pokemons)).toBe(147);
  });

  test.skip('collection with 5 pokemon including repetitions', () => {
    const pokemons = ['Charmander', 'Caterpie', 'Pidgeot', 'Rattata', 'Zubat', 'Zubat', 'Zubat'];
    expect(pokemonCollection(pokemons)).toBe(146);
  });
});
