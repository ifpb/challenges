# Repeated String

Crie um algoritmo que receba a string `s` e tenta repeti-la várias vezes até ficar com um tamanho de `n`, e seu retorno deve trazer a quantidade de vezes que aparece a letra `a` (Fonte: [Repeated String - Hackerrank](https://www.hackerrank.com/challenges/repeated-string/problem)).

Por exemplo, se a string `aba` for repetida 4 vezes ela ficará `abaabaabaaba`, mas para ficar com um tamanho de 10 será necessário remover algumas letras no final, gerando a string `abaabaabaa`. Ao contabilizar a ocorrência da letra `a` o resultado será 7.

Para analisar mais exemplos veja a _Tabela 8.1_.

_Tabela 8.1_

| Entrada              | Saída           |
| -------------------- | --------------- |
| `a`, `10`            | `10`            |
| `b`, `10`            | `0`             |
| `aba`, `10`          | `7`             |
| `a`, `1000000000000` | `1000000000000` |