import { createPokemonsCards } from './pokemon-card-view.js';
import { createCart } from './pokemon-cart-view.js';
import { storePokemons, getPokemons } from './pokemon-storage.js';
import { createNavTop } from './nav-to-top.js';
import { createToolbar } from './toolbar.js';

loadPokemons();

function loadPokemons() {
  fetch('data/pokeshop.json')
    .then(res => res.json())
    .then(json => {
      storePokemons(json);
      createPokemonsCards(getPokemons());
      createCart();
      createNavTop();
      createToolbar();
    });
}
