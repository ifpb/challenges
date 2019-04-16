# Preparação de Entrevista 1

## DESCRIÇÃO

---

Cada vez mais os processos seletivos estão utilizando resolução de problemas para analisar o nível de compreensão dos conceitos de programação. Para simular esse processo será exigido a entrega de no **mínimo três** dos algoritmos descritos a seguir.

Detalhe, as questões já possuem esboços disponíveis em arquivos dependendo da linguagem. Para maiores detalhes veja a **seção CÓDIGO**.

## QUESTÕES

---

**QUESTÃO 1** - Crie um algoritmo que recebe uma data no formato "dd/mm/aaaa" e escreva a data por extenso. Então, a entrada será uma data no formato de texto usando o separador de barra (`/`) entre os campos da data. Já a saída deve possuir o formato por extenso da a entrada, por exemplo, na data `01/01/1970` deve ser retornado `01 de janeiro de 1970`.

_Tabela 1.1:_

| Entrada      | Saída                    |
| ------------ | ------------------------ |
| `29/10/1969` | `29 de outubro de 1969`  |
| `01/01/1970` | `01 de janeiro de 1970`  |
| `15/09/1975` | `15 de setembro de 1975` |
| `01/04/1976` | `01 de abril de 1976`    |
| `01-04-1976` | `Invalid data input`     |
| `1976`       | `Invalid data input`     |
| `aaa`        | `Invalid data input`     |

<!-- http://www.computinghistory.org.uk/cgi/computing-timeline.pl -->

**QUESTÃO 2** - Ao receber um texto transforme seu conteúdo para que as letras sejam exibidas em maiúsculo e separadas por hífen (`-`), contudo os espaços em branco devem ser desconsiderados. Veja alguns exemplos deste processamento na _Tabela 2.1_:

_Tabela 2.1:_

| Entrada              | Saída                           |
| -------------------- | ------------------------------- |
| `programador`        | `P-R-O-G-R-A-M-A-D-O-R`         |
| `o dia está chuvoso` | `O-D-I-A-E-S-T-Á-C-H-U-V-O-S-O` |

**QUESTÃO 3** - Crie um programa que ao receber um conjunto de meias identificadas por números retorne quantos pares do mesmo tipo é possível montar (Fonte: [Sock merchant - Hackerrank](https://www.hackerrank.com/challenges/sock-merchant/problem)).

Por exemplo, ao receber o conjunto de meias {1, 2, 1, 2, 1, 3, 2} veja que do total existem 3 tipos de meias {1, 2, 3}. Ao se agrupar em pares é possível formar 1 par do tipo de meia `1`, e 1 do `2`, o que totaliza 2 pares. Conforme é possível ver nas meias destacadas {**1**, **2**, **1**, **2**, 1, 3, 2}.

Do mesmo modo, ao receber o conjunto de meias {10, 20, 20, 10, 10, 30, 50, 10, 20} irão existir esses 4 tipos de meias {10, 20, 30, 50} que ao se agrupar em pares é possível formar 2 pares do tipo de meia `10`, e 1 do `20`, o que totalizam 3 pares. Conforme é possível ver nas meias destacadas {**10**, **20**, **20**, **10**, **10**, 30, 50, **10**, 20}.

Para ilustrar mais exemplos veja a _Tabela 3.1_.

_Tabela 3.1_

| Entrada                              | Saída |
| ------------------------------------ | ----- |
| `1, 2, 3`                            | `0`   |
| `1, 1, 1, 2`                         | `1`   |
| `1, 2, 1, 2, 1, 3, 2`                | `2`   |
| `10, 20, 20, 10, 10, 30, 50, 10, 20` | `3`   |

**QUESTÃO 4** - Crie um algoritmo que rotacione os elementos de um array `a` em `d` saltos (Fonte: [Arrays: Left Rotation - Hackerrank](https://www.hackerrank.com/challenges/ctci-array-left-rotation/problem)). Por exemplo, caso receba um array com so valores `1, 2, 3, 4, 5` e precisasse realizar 4 rotacionamentos o processamento seria:

```
[1, 2, 3, 4, 5]
[2, 3, 4, 5, 1] (1º salto: o elemento 1 foi para o final do array)
[3, 4, 5, 1, 2] (2º salto: o elemento 2 foi para o final do array)
[4, 5, 1, 2, 3] (3º salto: o elemento 3 foi para o final do array)
[5, 1, 2, 3, 4] (4º salto: o elemento 4 foi para o final do array)
```

Para ilustrar mais exemplos veja a _Tabela 4.1_.

_Tabela 4.1_

| Entrada                                                                             | Saída                                                                         |
| ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------- |
| `1, 2, 3, 4, 5`, `1`                                                                | `2, 3, 4, 5, 1`                                                               |
| `1, 2, 3, 4, 5`, `4`                                                                | `5, 1, 2, 3, 4`                                                               |
| `41, 73, 89, 7, 10, 1, 59, 58, 84, 77, 77, 97, 58, 1, 86, 58, 26, 10, 86, 51`, `10` | `77, 97, 58, 1, 86, 58, 26, 10, 86, 51, 41, 73, 89, 7, 10, 1, 59, 58, 84, 77` |
| `33, 47, 70, 37, 8, 53, 13, 93, 71, 72, 51, 100, 60, 87, 97`, `13`                  | `87, 97, 33, 47, 70, 37, 8, 53, 13, 93, 71, 72, 51, 100, 60`                  |

**QUESTÃO 5** - Receba um array e retornar a proporção de elementos menor, igual e maior que zero (Fonte: [Plus Minus - Hackerrank](https://www.hackerrank.com/challenges/plus-minus/problem)).

Por exemplo, considerando inicialmente os valores `-4, 3, -9, 0, 4, 1` os elementos menor, igual e maior que zero são respectivamente e `-4, -9`, `0` e `3, 4, 1`. Na proporção representam os valores `2/6, 1/6, 3/6` que resultam, na precisão de 6, em `0.333333, 0.166667, 0.500000`.

Para ilustrar mais exemplos veja a _Tabela 5.1_.

_Tabela 5.1_

| Entrada                     | Saída                          |
| --------------------------- | ------------------------------ |
| `1, 1, 1`                   | `0.000000, 0.000000, 1.000000` |
| `0, 0, 1, 1`                | `0.000000, 0.500000, 0.500000` |
| `-4, 3, -9, 0, 4, 1`        | `0.333333, 0.166667, 0.500000` |
| `1, 2, 3, -1, -2, -3, 0, 0` | `0.375000, 0.250000, 0.375000` |

**QUESTÃO 6** - Receba um array de tamanho 5 e retorna o valor mínimo e máximo da soma de 4 elementos do array (Fonte: [Mini-Max Sum - Hackerrank](https://www.hackerrank.com/challenges/mini-max-sum/problem)).

Por exemplo, considerando inicialmente os valores `1, 2, 3, 4, 5`, então os 4 menores elementos são `1, 2, 3, 4`, já os 4 maiores são `2, 3, 4, 5`, logo suas respectivas somas serão `10` e `14`.

Para ilustrar mais exemplos veja a _Tabela 6.1_.

_Tabela 6.1_

| Entrada              | Saída    |
| -------------------- | -------- |
| `1, 2, 3, 4, 5`      | `10, 14` |
| `0, 2, 6, 3, 4`      | `9, 15`  |
| `10, 23, 61, 37, 41` | `9, 15`  |

**QUESTÃO 7** - Detecte o elemento de maior frequência de um array (Fonte: [Migratory Birds - Hackerrank](https://www.hackerrank.com/challenges/migratory-birds/problem)).

Por exemplo, no caso do array `1, 4, 4, 4, 5, 3` os elementos `1, 3, 4, 5` existem na frequência de `1, 1, 3, 1`, logo percebe-se que o elemento 4 possui a maior frequência.

Para ilustrar mais exemplos veja a _Tabela 7.1_.

_Tabela 7.1_

| Entrada                           | Saída |
| --------------------------------- | ----- |
| `1, 4, 4, 4, 5, 3`                | `4`   |
| `1, 1, 1, 4, 5, 3`                | `1`   |
| `1, 2, 3, 4, 5, 4, 3, 2, 1, 3, 4` | `3`   |

**QUESTÃO 8** - Crie um algoritmo que receba a string `s` e tenta repeti-la várias vezes até ficar com um tamanho de `n`, e seu retorno deve trazer a quantidade de vezes que aparece a letra `a` (Fonte: [Repeated String - Hackerrank](https://www.hackerrank.com/challenges/repeated-string/problem)).

Por exemplo, se a string `aba` for repetida 4 vezes ela ficará `abaabaabaaba`, mas para ficar com um tamanho de 10 será necessário remover algumas letras no final, gerando a string `abaabaabaa`. Ao contabilizar a ocorrência da letra `a` o resultado será 7.

Para ilustrar mais exemplos veja a _Tabela 8.1_.

_Tabela 8.1_

| Entrada              | Saída           |
| -------------------- | --------------- |
| `a`, `10`            | `10`            |
| `b`, `10`            | `0`             |
| `aba`, `10`          | `7`             |
| `a`, `1000000000000` | `1000000000000` |

**QUESTÃO 9** - Retornar a sequência linear de `a` até `b`, e em seguida, a sequência será espelhada (Fonte: [Mirror Sequence - URI Online Judge](https://www.urionlinejudge.com.br/judge/en/problems/view/2157)).

Por exemplo, a sequência de `1` até `5` é `12345`, e seu reflexo é `54321`, juntando os dois segmento obtem-se o valor `1234554321`.

Para ilustrar mais exemplos veja a _Tabela 9.1_.

_Tabela 9.1_

| Entrada     | Saída                  |
| ----------- | ---------------------- |
| `1`, `5`    | `1234554321`           |
| `10`, `13`  | `1011121331211101`     |
| `98`, `101` | `98991001011010019989` |

**QUESTÃO 10** - Retonar a soma dos valores `a` e `b` sem o dígito `0` caso exista (Fonte: [Zero means Zero - URI Online Judge](https://www.urionlinejudge.com.br/judge/en/problems/view/1871)).

Por exemplo, a soma de 7 mais 8 é igual a 15, logo o retorno será 15 pois não existe o dígito `0`. Já a soma de 15 mais 5 é igual a 20, logo o retorno será 2 pois será removido o dígito `0`.

Para ilustrar mais exemplos veja a _Tabela 10.1_.

_Tabela 10.1_

| Entrada   | Saída |
| --------- | ----- |
| `7`, `8`  | `15`  |
| `15`, `5` | `2`   |
| `99`, `6` | `15`  |

**QUESTÃO 11** - Receber um número e retorno o total de LEDs necessário para exibi-lo. Lembrando que conforme a _Figura 11.1_ exibe, cada número exige uma quantidade de LEDs específica (Fonte: [Led - URI Online Judge](https://www.urionlinejudge.com.br/judge/en/problems/view/1168)).

_Figura 11.1 - Representação dos números em LED_<br>
<img alt="Representação dos números em LED" src="https://resources.urionlinejudge.com.br/gallery/images/problems/UOJ_1168.png" style="width: 500px; height: 95px;"><br>
(Fonte: [Led - URI Online Judge](https://www.urionlinejudge.com.br/judge/en/problems/view/1168))

Então, seguindo o raciocínio, o dígito `1` precisa de 2 LEDs, o `2` de 5 e assim sucessivamente. Já o número `115380` é formado pelos dígitos `{1, 1, 5, 3, 8, 0}` e exige respectivamente a seguinte quantia de LEDs `{2, 2, 5, 5, 7, 6}`, que resulta em um total de 27 LEDs.

Para ilustrar mais exemplos veja a _Tabela 11.1_.

_Tabela 11.1_

| Entrada   | Saída |
| --------- | ----- |
| `1`       | `2`   |
| `2`       | `5`   |
| `23456`   | `25`  |
| `115380`  | `27`  |
| `2819311` | `29`  |

## CÓDIGO

---

Veja esta relação de código inical e alternativa de resposta disponíveis nestas linguagens:

| Linguagem  | Código inicial           | Alternativa de Resposta               |
| ---------- | ------------------------ | ------------------------------------- |
| Javascript | [code.zip](js/code.zip)  | [code-response.zip](js/response.zip)  |
| PHP        | [code.zip](php/code.zip) | [code-response.zip](php/response.zip) |

Já para facilitar o mapeamento das questões com o código inicial veja esta outra relação:

| Questão | Javascript               | PHP                      |
| ------- | ------------------------ | ------------------------ |
| 1       | `code/formatDate/`       | `code/src/Date/`         |
| 2       | `code/grammar/`          | `code/src/Grammar/`      |
| 3       | `code/sockMerchant/`     | `code/src/SockMerchant/` |
| 4       | `code/rotLeft/`          | `code/src/String/`       |
| 5       | `code/arrayStats/`       | `code/src/String/`       |
| 6       | `code/minMaxSum/`        | `code/src/String/`       |
| 7       | `code/highestFrequency/` | `code/src/String/`       |
| 8       | `code/repeatedString/`   | `code/src/Vector/`       |
| 9       | `code/mirrorSequence/`   | `code/src/Vector/`       |
| 10      | `code/zeroMeansZero/`    | `code/src/Vector/`       |
| 11      | `code/numberOfLeds/`     | `code/src/Vector/`       |
