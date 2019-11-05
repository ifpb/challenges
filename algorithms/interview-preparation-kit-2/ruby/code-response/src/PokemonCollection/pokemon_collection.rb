class PokemonCollection
  def PokemonCollection.notCaptured(pokemons) 
    uniq = pokemons.uniq
    151 - uniq.length
  end
end
