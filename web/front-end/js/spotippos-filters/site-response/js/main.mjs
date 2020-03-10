import { loadFilters, exibeImoveis } from './lib.js';

loadFilters();

fetch('data/imoveis.json')
  .then(res => res.json())
  .then(json => exibeImoveis(json));
