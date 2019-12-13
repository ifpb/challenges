# Barato Coletivo

## Descrição

---

A empresa [Barato Coletivo](https://www.baratocoletivo.com.br) está em busca de um profissional Front-end, para isto ela criou o [Desafio Frontend Barato Coletivo 2019](https://github.com/baratodev/desafio-frontend) que pretende exibir um catálogo de ofertas baseado no arquivo `offers.json` ([online](https://playground.barato.com.br/desafio-front/api/offers) ou [local](code/data/offers.json)).

Para ajudar a inicialização do desafio foi definido uma proposta de layout estático disponível no arquivo [code.zip](code.zip) e ilustrado na Figura 1.

*Figura 1 - Layout da página de ofertas. (HTML estático: [code/index.html](code/index.html))*
![](assets/layout-offers.jpg)

A seguir será descrito alguns componentes para auxiliar a geração dinâmica da página usando as informações do arquivo JSON.

## Componentes

---

**COMPONENTE 1 -** No arquivo JSON, `offers.json`, existe um Array de ofertas que possui várias informação como título, descrição, preço e imagem:

> Links:
>
> - [https://playground.barato.com.br/desafio-front/api/offers](https://playground.barato.com.br/desafio-front/api/offers) (online):
> - [code/data/offers.json](code/data/offers.json) (local):

```json
[
  {
    "id": "23186",
    "title": "Você no Paraíso Canoa Quebrada! 2 diárias para 2 adultos + café da manhã de R$600 por apenas R$499 na Hotel e Pousada Tatajuba",
    "description": "Check in às 14h / Check out às 12h. <b>Validade do cupom:</b> 30/06/2019, check in de domingo à quarta (exceto feriados e datas comemorativas). <b>Agendamento:</b> após a compra, agende imediatamente através do e-mail: reservastatajuba@gmail.com e telefone (88) 3421-7401. Sujeito a disponibilidade. Desmarcar com 7 dias de antecedência, caso contrário, o cupom será dado como utilizado. Será permitido apenas uma remarcação, de acordo com a disponibilidade do hotel. ",
    "price": "499",
    "market_price": "600",
    "image": {
      "url": "https://static.baratocoletivo.com.br/2019/0402/10019408/g_hotel-e-pousada-tatajuba9992ddb878.jpg"
    }
  },
  {
    "id": "23185",
    "title": "RELÂMPAGO: 2 diárias para 4 adultos e 1 criança em Chalé Duplex por apenas R$399 ",
    "description": "A oferta inclui: Diárias para até 4 adultos e 1 criança em Chalé Duplex a partir de R$399 na Pousada Sirius Canoa. <b>Escolha a opção de sua preferência no ato da compra.</b> <b>Chalé Duplex:</b> 02 Suítes com camas individuais/casal, ar condicionado e varanda. Sala ampla com TV e banheiro, Cozinha com completa e garagem. <b>Para a opção RELÂMPAGO a validade do cupom é EXCLUSIVAMENTE para o final de semana do dia 26 a 28/04/2019.</b> <b>Validade do cupom: 31/05/2019, todos os dias (exceto feriados e datas comemorativas).</b> <b>Agendamento:</b> após a compra, agende imediatamente através dos telefones (85) 99117.7414 / (88) 99985.2377. Sujeito a disponibilidade. NÃO inclui café da manhã. Chalés com cozinha completa. O check out deverá ser realizado até 12h (meio dia). Não inclui despesas com o frigobar. ",
    "price": "399",
    "market_price": "399",
    "image": {
      "url": "https://static.baratocoletivo.com.br/2019/0410/10019588/g_pousada-sirius-canoa3effdb397e.jpg"
    }
  },
  ...
  {
    "id": "22995",
    "title": "2 diárias de segunda a quinta para até 6 pessoas de R$500 por apenas R$199",
    "description": "A oferta inclui: 2 diárias para até 6 pessoas com duas opções de check-in segunda a quinta ou sexta a domingo no Chalés da Marambaia a partir de R$199.<b> Escolha a opção de sua preferência no ato da compra.</b> Check-in às 12h e check-out às 16h. <b>Validade do cupom:</b> até 28/06/2019.</b> (exceto feriados e datas comemorativas). <b>Agendamento:</b> após a compra, agende imediatamente através do telefone: (85) 99784-1711 / (85) 98818-7544. Sujeito a disponibilidade. Proibido qualquer tipo de som alto, sujeito a multa. Não inclui café da manhã. ",
    "price": "199",
    "market_price": "500",
    "image": {
      "url": "https://static.baratocoletivo.com.br/2019/0405/10019503/g_chales-marambaia2b4024b376.jpg"
    }
  }
]
```

Usando esses dados crie uma lista de ofertas conforme ilustra à *Figura 2*.

*Figura 2 - Lista de ofertas*<br>
![](assets/offers.png)

Também considere que o HTML necessário para compor esta lista de ofertas deve seguir este formato:

```html
<div id="offer-23186" class="card card-block offer">
  <div class="offer-thumb" style="background-image: url(https://static.baratocoletivo.com.br/2019/0402/10019408/g_hotel-e-pousada-tatajuba9992ddb878.jpg)"></div>
  <div class="offer-content p-4">
    <div class="offer-title">Você no Paraíso Canoa Quebrada! 2 diárias para 2 adultos + café da manhã de R$600 por apenas R$499 na Hotel e Pousada Tatajuba</div>
    <div class="offer-price"><span>R$</span> 499,00</div>
    <div class="offer-market-price"><span>R$</span> 600,00</div>
  </div>
</div>
```

**Dica**, para exibir o preço do imóvel no formato brasileiro, use o seguinte código:

```js
const price = "643000"
console.log(Number(price).toLocaleString('pt-BR', { minimumFractionDigits: 2 }))
//=> 643.000,00
```

**COMPONENTE 2 -** As ofertas do arquivo `offers.json` são classificados por categorias na empresa, para auxílio esse segmentação utilize o arquivo `categories.json`:

> [code/data/categories.json](code/data/categories.json) (local):

```json
{
  "22995": "hoteis",
  "22997": "hoteis",
  "23001": "hoteis",
  "23083": "hoteis",
  ...
  "23086": "saude",
  "23177": "saude",
  "23179": "saude",
  "23034": "servicos"
}
```

Usando a combinação dos arquivos JSON, crie a exibição categorizada das ofertas conforme a *Figura 1*:

- Viagens e Hotéis (hoteis)
- Gastronomia (gastronomia)
- Tortas e Doces (tortas)
- Entretenimento (entretenimento)
- Saúde e Estética (saude)
- Serviços (servicos)

Também considere que o HTML necessário para compor esta lista de ofertas categorizadas deve seguir este formato:

```html
<main class="container-fluid p-0">
  <section id="hoteis">
    <h1 class="pt-4">Viagens e Hotéis</h1>
    <div class="container-fluid p-5">
      <div class="row flex-row flex-nowrap overflow-auto"></div>
    </div>
  </section>
  <section id="gastronomia">
    <h1 class="pt-4">Gastronomia</h1>
    <div class="container-fluid p-5">
      <div class="row flex-row flex-nowrap overflow-auto"></div>
    </div>
  </section>
  <section id="tortas">
    <h1 class="pt-4">Tortas e Doces</h1>
    <div class="container-fluid p-5">
      <div class="row flex-row flex-nowrap overflow-auto"></div>
    </div>
  </section>
  <section id="entretenimento">
    <h1 class="pt-4">Entretenimento</h1>
    <div class="container-fluid p-5">
      <div class="row flex-row flex-nowrap overflow-auto"></div>
    </div>
  </section>
  <section id="saude">
    <h1 class="pt-4">Saúde e Estética</h1>
    <div class="container-flui5 p-4">
      <div class="row flex-row flex-nowrap overflow-auto"></div>
    </div>
  </section>
  <section id="servicos">
    <h1 class="pt-4">Serviços</h1>
    <div class="container-fluid p-4">
      <div class="row flex-row flex-nowrap overflow-auto"></div>
    </div>
  </section>
</main>
```

**COMPONENTE 3 -** Exiba uma página de detalhe da oferta conforme a *Figura 3*.

*Figura 3 - Layout da página de uma oferta específica. (HTML estático: [code/offer.html](code/offer.html))*
![](assets/layout-offer.png)

A construção da página da oferta exige a obtenção do seu `id` para resgatar os seus dados usando a URL neste formato:

> Links:
>
> - [https://playground.barato.com.br/desafio-front/api/offer/23186](https://playground.barato.com.br/desafio-front/api/offer/23186) (online):
> - [code/data/offer/23186.json](code/data/offer/23186.json) (local):

```json
{
  "id": "23186",
  "title": "Você no Paraíso Canoa Quebrada! 2 diárias para 2 adultos + café da manhã de R$600 por apenas R$499 na Hotel e Pousada Tatajuba",
  "description": "Check in às 14h / Check out às 12h. <b>Validade do cupom:</b> 30/06/2019, check in de domingo à quarta (exceto feriados e datas comemorativas). <b>Agendamento:</b> após a compra, agende imediatamente através do e-mail: reservastatajuba@gmail.com e telefone (88) 3421-7401. Sujeito a disponibilidade. Desmarcar com 7 dias de antecedência, caso contrário, o cupom será dado como utilizado. Será permitido apenas uma remarcação, de acordo com a disponibilidade do hotel. ",
  "price": "499",
  "market_price": "600",
  "category": "Hotéis",
  "images": [
    {
      "url": "https://static.baratocoletivo.com.br/2019/0402/10019408/g_hotel-e-pousada-tatajuba9992ddb878.jpg"
    },
    {
      "url": "https://static.baratocoletivo.com.br/2019/0402/10019408/g_hotel-e-pousada-tatajuba4a09942b19.jpg"
    },
    {
      "url": "https://static.baratocoletivo.com.br/2019/0402/10019408/g_hotel-e-pousada-tatajuba65aedcffc2.jpg"
    },
    {
      "url": "https://static.baratocoletivo.com.br/2019/0402/10019408/g_hotel-e-pousada-tatajuba257480bebc.jpg"
    },
    {
      "url": "https://static.baratocoletivo.com.br/2019/0402/10019408/g_hotel-e-pousada-tatajuba870fe27af9.jpg"
    },
    {
      "url": "https://static.baratocoletivo.com.br/2019/0402/10019408/g_hotel-e-pousada-tatajubaf9c4f5b7ba.jpg"
    },
    {
      "url": "https://static.baratocoletivo.com.br/2019/0402/10019408/g_hotel-e-pousada-tatajubab00177f689.jpg"
    },
    {
      "url": "https://static.baratocoletivo.com.br/2019/0402/10019408/g_hotel-e-pousada-tatajubab38b46f660.jpg"
    },
    {
      "url": "https://static.baratocoletivo.com.br/2019/0402/10019408/g_hotel-e-pousada-tatajuba8dd449df57.jpg"
    },
    {
      "url": "https://static.baratocoletivo.com.br/2019/0"
    }
  ]
}
```

Também considere que o HTML necessário para compor a oferta deve seguir este formato:

```html
<h1 class="pt-4 pb-2 mb-4 border-bottom">Você no Paraíso Canoa Quebrada! 2 diárias para 2 adultos + café da manhã de R$600 por apenas R$499 na Hotel e Pousada Tatajuba</h1>
<div class="row">
  <div class="col-7">
    <div id="carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item">
          <img src="https://static.baratocoletivo.com.br/2019/0402/10019408/g_hotel-e-pousada-tatajuba9992ddb878.jpg" class="d-block w-100" alt="Imagem da Oferta">
        </div>
        <div class="carousel-item active">
          <img src="https://static.baratocoletivo.com.br/2019/0402/10019408/g_hotel-e-pousada-tatajuba4a09942b19.jpg" class="d-block w-100" alt="Imagem da Oferta">
        </div>
        <div class="carousel-item">
          <img src="https://static.baratocoletivo.com.br/2019/0402/10019408/g_hotel-e-pousada-tatajuba65aedcffc2.jpg" class="d-block w-100" alt="Imagem da Oferta">
        </div>
        <div class="carousel-item">
          <img src="https://static.baratocoletivo.com.br/2019/0402/10019408/g_hotel-e-pousada-tatajuba257480bebc.jpg" class="d-block w-100" alt="Imagem da Oferta">
        </div>
        <div class="carousel-item">
          <img src="https://static.baratocoletivo.com.br/2019/0402/10019408/g_hotel-e-pousada-tatajuba870fe27af9.jpg" class="d-block w-100" alt="Imagem da Oferta">
        </div>
        <div class="carousel-item">
          <img src="https://static.baratocoletivo.com.br/2019/0402/10019408/g_hotel-e-pousada-tatajubaf9c4f5b7ba.jpg" class="d-block w-100" alt="Imagem da Oferta">
        </div>
        <div class="carousel-item">
          <img src="https://static.baratocoletivo.com.br/2019/0402/10019408/g_hotel-e-pousada-tatajubab00177f689.jpg" class="d-block w-100" alt="Imagem da Oferta">
        </div>
        <div class="carousel-item">
          <img src="https://static.baratocoletivo.com.br/2019/0402/10019408/g_hotel-e-pousada-tatajubab38b46f660.jpg" class="d-block w-100" alt="Imagem da Oferta">
        </div>
        <div class="carousel-item">
          <img src="https://static.baratocoletivo.com.br/2019/0402/10019408/g_hotel-e-pousada-tatajuba8dd449df57.jpg" class="d-block w-100" alt="Imagem da Oferta">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-5 text-center pt-5 offer-values">
    <p class="m-0 offer-option">Opções a partir de</p>
    <p class="m-0 offer-price"><span style="font-size: 1.5rem;">R$</span>499,00</p>
    <p class="m-0 offer-market-price">de <span>R$</span> 600,00</p>
    <p class="offer-discount-value">Economize <b>R$ 101,00</b></p>
    <a href="#" class="btn btn-warning btn-lg px-5 mb-5">Escolher opção</a>
    <p class="offer-discount-percent">20% de desconto</p>
  </div>
</div>
<div class="row">
  <div class="col">
    <h2 class="mt-5 mb-3">Detalhes da Oferta</h2>
    <p class="offer-description">
      Check in às 14h / Check out às 12h.
      <b>Validade do cupom:</b> 30/06/2019, check in de domingo à quarta (exceto feriados e datas comemorativas).
      <b>Agendamento:</b> após a compra, agende imediatamente através do e-mail: reservastatajuba@gmail.com e telefone (88) 3421-7401. Sujeito a disponibilidade. 
      Desmarcar com 7 dias de antecedência, caso contrário, o cupom será dado como utilizado. 
      Será permitido apenas uma remarcação, de acordo com a disponibilidade do hotel.
    </p>
  </div>
</div>
```

Veja na *Figura 5* que as imagens da oferta utilizam o componente [carousel do Boostrap](https://getbootstrap.com/docs/4.1/components/carousel/):

*Figura 5 - Componente Carousel com as imagens de uma oferta.*
<video width="100%" height="100%" autoplay loop controls>
  <source src="assets/offer-carousel.mp4" type="video/mp4">
</video>

**COMPONENTE 4 -** A galeria de ofertas da *Figura 1* deve habilitar o acesso aos detalhes da oferta usando as páginas no formato da *Figura 3*. Para viabilizar este mecanismo ative o evento de clique para cada oferta conforme a *Figura 6*:

*Figura 6 - Evento de clique das ofertas.*
<video width="100%" height="100%" autoplay loop controls>
  <source src="assets/offer-click.mp4" type="video/mp4">
</video>

Uma sugestão para este mecanismo consistem em armazenar a identificação de cada oferta no atributo `id` do seu `.card`, e ao configurar o clique da tag `.card` use a seguinte lógica:

```js
// a variável offer representa a tag .card com o atributo id
const url = `offer.html?offer=${offer.id}`;
window.open(url);
```

Na página da oferta específica, para resgatar o `id` da URL utilize esta outra lógica:

```js
// a variável offerId acessará o valor do parâmetro id da URL
const url = new URL(location);
const offerId = url.searchParams.get('offer');
```

**COMPONENTE 5 -** Algumas ofertas possuem o mesmo valor nas propriedades `price` e `market_price`, visualmente esses casos não irão representar desconto real. Para fazer essa diferenciação visual, nas páginas da listagem de ofertas e de uma oferta específica, considere o tratamento visual das *Figuras 7 e 8*.

*Figura 7 - Comparação visual da exibição dos preços com e sem desconto na página das ofertas.*
![](assets/offers-discount.png)

*Figura 8 - Comparação visual da exibição dos preços com e sem desconto na página de uma oferta específica.*
![](assets/offer-discount.png)

<br>
<br>
<br>

> [Alternativa de resposta](response/)