def pokemon_collection(pokemons) 
  uniq = pokemons.uniq
  return 151 - uniq.length;
end
