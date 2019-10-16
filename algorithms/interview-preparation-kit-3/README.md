# Preparação de Entrevista 3

## DESCRIÇÃO

---

Cada vez mais os processos seletivos estão utilizando resolução de problemas para analisar o nível de compreensão dos conceitos de programação do candidato. Para simular esse processo será exigido a entrega de no **mínimo três** dos algoritmos descritos a seguir.

Detalhe, as questões já possuem esboços disponíveis em arquivos dependendo da linguagem. Para maiores detalhes veja a **seção CÓDIGO**.

## QUESTÕES

---

**QUESTÃO 1** - Crie um algoritmo para calcular a diferença dos quadrados de um número natural `n`. Então, ao receber um `n` deve-se calcular o quadrado da soma menos a soma dos quadrados (Fonte: [Difference Of Squares - Exercism](https://exercism.io/tracks/php/exercises/difference-of-squares/)). No caso de `n` ser 5 o resultado será definido pela variável `resultado` em:

```
quadradoDaSoma = (1 + 2 + 3 + 4 + 5)² = 225
somaDosQuadrados = 1² + 2² + 3² + 4² + 5² = 55
resultado = quadradoDaSoma - somaDosQuadrados = 225 - 55 = 170
```

Para analisar mais exemplos veja a _Tabela 1.1_.

_Tabela 1.1: Entradas e Saídas_

| Entrada | Saída      |
| ------- | ---------- |
| `1`     | `0`        |
| `5`     | `170`      |
| `10`    | `2640`     |
| `100`   | `25164150` |

**QUESTÃO 2** - O [Pangrama](https://pt.wikipedia.org/wiki/Pangrama) é uma frase que usa todas as letras do alfabeto de determinada língua. Portanto, a frase `Jane quer LP, fax, CD, giz, TV e bom whisky.` é considerado um Pangrama porque utiliza todas as letras do alfabeto conforme ilustra a _Tabela 2.1_. (Fonte: [Pangram - Exercism](https://exercism.io/tracks/php/exercises/pangram/))

_Tabela 2.1: Frequência das letras._

| Letra | Frequência |
| ----- | ---------- |
| a     | 2          |
| b     | 1          |
| c     | 1          |
| d     | 1          |
| e     | 3          |
| f     | 1          |
| g     | 1          |
| h     | 1          |
| i     | 2          |
| j     | 1          |
| k     | 1          |
| l     | 1          |
| m     | 1          |
| n     | 1          |
| o     | 1          |
| p     | 1          |
| q     | 1          |
| r     | 1          |
| s     | 1          |
| t     | 1          |
| u     | 1          |
| v     | 1          |
| w     | 1          |
| x     | 1          |
| y     | 1          |
| z     | 1          |

Nas entradas, as frases serão elaboradas com os caracteres do alfabeto `abcdefghijklmnopqrstuvwxyz`, e não serão utilizados caracteres com acentuação. Para analisar mais exemplos veja a _Tabela 2.2_.

_Tabela 2.2: Entradas e Saídas_

| Entrada                                                       | Saída   |
| ------------------------------------------------------------- | ------- |
| `Jane quer LP, fax, CD, giz, TV e bom whisky`                 | `true`  |
| `the quick brown fox jumps over the lazy dog`                 | `true`  |
| `a quick movement of the enemy will jeopardize five gunboats` | `false` |
| `the quick brown fish jumps over the lazy dog`                | `false` |
| `the_quick_brown_fox_jumps_over_the_lazy_dog`                 | `true`  |
| `the 1 quick brown fox jumps over the 2 lazy dogs`            | `true`  |
| `7h3 qu1ck brown fox jumps ov3r 7h3 lazy dog`                 | `false` |
| `"Five quacking Zephyrs jolt my wax bed."`                    | `true`  |
| `the quick brown fox jumped over the lazy FOX`                | `false` |

**QUESTÃO 3** - Converta um número em uma string de modo que o conteúdo dependerá de sua divisibilidade (Fonte: [Raindrops - Exercism](https://exercism.io/tracks/ruby/exercises/raindrops/)). Então dependendo do tipo de divisibilidade a string de retorno deve conter as palavras da _Tabela 3.1_:

_Tabela 3.1: Mapeamento da divisibilidade e palavra de retorno_

| Divibilidade | Palavra |
| ------------ | ------- |
| `3`          | `Pling` |
| `5`          | `Plang` |
| `7`          | `Plong` |

Portanto, o número `9` deve retorna a string `Pling`, e `15` retorna `PlingPlong`, contudo quando o número não for divisível com algum dos números da _Tabela 3.1_ a string retornada será o próprio número. Para analisar mais exemplos veja a _Tabela 3.2_.

_Tabela 3.2: Entradas e Saídas_

| Entrada | Saída             |
| ------- | ----------------- |
| `1`     | `1`               |
| `3`     | `Pling`           |
| `5`     | `Plang`           |
| `7`     | `Plong`           |
| `6`     | `Pling`           |
| `8`     | `8`               |
| `9`     | `Pling`           |
| `10`    | `Plang`           |
| `14`    | `Plong`           |
| `15`    | `PlingPlang`      |
| `21`    | `PlingPlong`      |
| `25`    | `Plang`           |
| `27`    | `Pling`           |
| `35`    | `PlangPlong`      |
| `49`    | `Plong`           |
| `52`    | `52`              |
| `105`   | `PlingPlangPlong` |
| `3125`  | `Plang`           |

**QUESTÃO 4** - A Sonda espacial Sami quebrou em Marte e está enviando mensagens `SOS` para a Terra (Fonte: [Mars Exploration - Hackerrank](https://www.hackerrank.com/challenges/mars-exploration/problem)). Contudo, algumas letras foram alteradas devido a radiação cósmica durante o envio da mensagem. Sua missão consiste em determinar quantas letras no envio da mensagem foi alterado.

No envio da mensagem `SOS` nenhum caractere foi alterado, porém na mensagem `SOSSOT` uma letra foi alterada. Para analisar mais exemplos veja a _Tabela 4.1_.

_Tabela 4.1: Entradas e Saídas_

| Entrada        | Saída |
| -------------- | ----- |
| `SOS`          | `0`   |
| `SOA`          | `1`   |
| `SOSSPSSQSSOR` | `3`   |
| `SOSSOT`       | `1`   |
| `SOSSOSSOS`    | `0`   |

**QUESTÃO 5** - O [Anagrama](https://pt.wikipedia.org/wiki/Anagrama) é uma espécie de jogo de palavras, resultando do rearranjo das letras de uma palavra ou expressão para produzir outras palavras ou expressões, utilizando todas as letras originais. Então a palavra `listen` é considerado um anagrama de `silent` porque as duas palavras possuem as mesmas letras, só com um arranjo diferente. (Fonte: [Making Anagrams - Hackerrank](https://www.hackerrank.com/challenges/ctci-making-anagrams/problem)).

O seu desafio consiste em receber duas palavras e determinar quantos caracteres são necessários remover para que elas sejam um Anagrama. Então, ao receber as palavras `ab` e `ac` seria necessário remover `2` letras para ter o Anagrama `a`, já as palavras `abc` e `bad` também seria necessário remover `2` letras. Para analisar mais exemplos veja a _Tabela 5.1_.

_Tabela 5.1: Entradas e Saídas_

| Entrada                                                  | Saída |
| -------------------------------------------------------- | ----- |
| `ab`, `ac`                                               | `2`   |
| `abc`, `bad`                                             | `2`   |
| `cde`, `abc`                                             | `4`   |
| `fcrxzwscanmligyxyvym`, `jxwtrhvujlmrpdoqbisbwhmgpmeoke` | `30`  |
| `showman`, `woman`                                       | `2`   |

## CÓDIGO

---

Veja esta relação de código inicial e alternativa de resposta disponíveis nestas linguagens:

| Linguagem  | Código inicial           | Alternativa de Resposta |
| ---------- | ------------------------ | ----------------------- |
| Javascript |                          |                         |
| PHP        | [code.zip](php/code.zip) |                         |
| Python     |                          |                         |
| Ruby       |                          |                         |

Já para facilitar o mapeamento das questões com o código inicial veja esta outra relação:

| Questão | Nome da Pasta     |
| ------- | ----------------- |
| 1       | `Squares`         |
| 2       | `Pangram`         |
| 3       | `Raindrops`       |
| 4       | `MarsExploration` |
| 5       | `Anagram`         |

Se seu PC não possui PHP, composer e kahlan, mas possui o docker, veja que o projeto existe um `Dockerfile`. Então, para executar os testes basta executar os seguintes comandos:

```
$ cd code
$ docker build -t php:kahlan .
$ docker run -it --rm -w /app -v "$PWD":/app php:kahlan sh
# composer install
# kahlan --spec=spec/Squares/Squares.spec.php
```
