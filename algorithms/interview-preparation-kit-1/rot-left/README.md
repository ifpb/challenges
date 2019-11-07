# Left Rotation

Crie um algoritmo que rotacione os elementos de um array `a` em `d` saltos (Fonte: [Arrays: Left Rotation - Hackerrank](https://www.hackerrank.com/challenges/ctci-array-left-rotation/problem)). Por exemplo, caso receba um array com so valores `1, 2, 3, 4, 5` e precisasse realizar 4 rotacionamentos o processamento seria:

```
[1, 2, 3, 4, 5]
[2, 3, 4, 5, 1] (1º salto: o elemento 1 foi para o final do array)
[3, 4, 5, 1, 2] (2º salto: o elemento 2 foi para o final do array)
[4, 5, 1, 2, 3] (3º salto: o elemento 3 foi para o final do array)
[5, 1, 2, 3, 4] (4º salto: o elemento 4 foi para o final do array)
```

Para analisar mais exemplos veja a _Tabela 4.1_.

_Tabela 4.1_

| Entrada                                                                             | Saída                                                                         |
| ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------- |
| `1, 2, 3, 4, 5`, `1`                                                                | `2, 3, 4, 5, 1`                                                               |
| `1, 2, 3, 4, 5`, `4`                                                                | `5, 1, 2, 3, 4`                                                               |
| `41, 73, 89, 7, 10, 1, 59, 58, 84, 77, 77, 97, 58, 1, 86, 58, 26, 10, 86, 51`, `10` | `77, 97, 58, 1, 86, 58, 26, 10, 86, 51, 41, 73, 89, 7, 10, 1, 59, 58, 84, 77` |
| `33, 47, 70, 37, 8, 53, 13, 93, 71, 72, 51, 100, 60, 87, 97`, `13`                  | `87, 97, 33, 47, 70, 37, 8, 53, 13, 93, 71, 72, 51, 100, 60`                  |