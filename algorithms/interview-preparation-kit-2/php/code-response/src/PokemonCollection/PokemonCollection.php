<?php

namespace PokemonCollection;

class PokemonCollection
{
  public static function notCaptured($pokemons)
  {
    $uniq = array_unique($pokemons);
    return 151 - sizeof($uniq);
  }
}
