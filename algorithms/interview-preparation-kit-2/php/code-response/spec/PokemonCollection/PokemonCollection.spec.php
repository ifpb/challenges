<?php

use PokemonCollection\PokemonCollection;

describe('Pokemon Collection', function () {
  it('collection with 1 pokemon not including repetitions', function () {
    $pokemons = ['Zubat'];
    expect(PokemonCollection::notCaptured($pokemons))->toBe(150);
  });

  it('collection with 1 pokemon including repetitions', function () {
    $pokemons = ['Zubat', 'Zubat', 'Zubat', 'Zubat', 'Zubat', 'Zubat', 'Zubat', 'Zubat'];
    expect(PokemonCollection::notCaptured($pokemons))->toBe(150);
  });

  it('collection with 2 pokemon including repetitions', function () {
    $pokemons = ['Zubat', 'Pikachu', 'Pikachu'];
    expect(PokemonCollection::notCaptured($pokemons))->toBe(149);
  });

  it('collection with 4 pokemon not including repetitions', function () {
    $pokemons = ['Zubat', 'Charmander', 'Caterpie', 'Pidgeot'];
    expect(PokemonCollection::notCaptured($pokemons))->toBe(147);
  });

  it('collection with 5 pokemon including repetitions', function () {
    $pokemons = ['Charmander', 'Caterpie', 'Pidgeot', 'Rattata', 'Zubat', 'Zubat', 'Zubat'];
    expect(PokemonCollection::notCaptured($pokemons))->toBe(146);
  });
});
