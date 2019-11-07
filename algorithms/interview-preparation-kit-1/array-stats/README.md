# Array Stats

Receba um array e retorne a proporção de elementos menor, igual e maior que zero (Fonte: [Plus Minus - Hackerrank](https://www.hackerrank.com/challenges/plus-minus/problem)).

Por exemplo, considerando inicialmente os valores `-4, 3, -9, 0, 4, 1` os elementos menor, igual e maior que zero são respectivamente e `-4, -9`, `0` e `3, 4, 1`. Na proporção representam os valores `2/6, 1/6, 3/6` que resultam, na precisão de 6, em `0.333333, 0.166667, 0.500000`.

Para analisar mais exemplos veja a _Tabela 5.1_.

_Tabela 5.1_

| Entrada                     | Saída                          |
| --------------------------- | ------------------------------ |
| `1, 1, 1`                   | `0.000000, 0.000000, 1.000000` |
| `0, 0, 1, 1`                | `0.000000, 0.500000, 0.500000` |
| `-4, 3, -9, 0, 4, 1`        | `0.333333, 0.166667, 0.500000` |
| `1, 2, 3, -1, -2, -3, 0, 0` | `0.375000, 0.250000, 0.375000` |