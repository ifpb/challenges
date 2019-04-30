function pokemonCollection(pokemons) {
  const uniq = pokemons.filter((v, i, a) => a.indexOf(v) === i);
  return 151 - uniq.length;
}

export { pokemonCollection };
