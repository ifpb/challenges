require_relative "../../src/PokemonCollection/pokemon_collection"

describe "Pokemon Collection" do
  context "collection with 1 pokemon not including repetitions" do
    it "it 150" do
      pokemons = ['Zubat'];
      expect(PokemonCollection.notCaptured(pokemons)).to eq(150)
    end
  end    

  xcontext "collection with 1 pokemon including repetitions" do
    it "it 150" do
      pokemons = ['Zubat', 'Zubat', 'Zubat', 'Zubat', 'Zubat', 'Zubat', 'Zubat', 'Zubat'];
      expect(PokemonCollection.notCaptured(pokemons)).to eq(150)
    end
  end    

  xcontext "collection with 2 pokemon including repetitions" do
    it "it 149" do
      pokemons = ['Zubat', 'Pikachu', 'Pikachu'];
      expect(PokemonCollection.notCaptured(pokemons)).to eq(149)
    end
  end    

  xcontext "collection with 4 pokemon not including repetitions" do
    it "it 147" do
      pokemons = ['Zubat', 'Charmander', 'Caterpie', 'Pidgeot'];
      expect(PokemonCollection.notCaptured(pokemons)).to eq(147)
    end
  end    

  xcontext "collection with 5 pokemon including repetitions" do
    it "it 146" do
      pokemons = ['Charmander', 'Caterpie', 'Pidgeot', 'Rattata', 'Zubat', 'Zubat', 'Zubat'];
      expect(PokemonCollection.notCaptured(pokemons)).to eq(146)
    end
  end    
end

