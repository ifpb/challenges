# Number of Leds

Receber um número e retorno o total de LEDs necessário para exibi-lo. Lembrando que conforme a _Figura 11.1_ exibe, cada número exige uma quantidade de LEDs específica (Fonte: [Led - URI Online Judge](https://www.urionlinejudge.com.br/judge/en/problems/view/1168)).

_Figura 11.1 - Representação dos números em LED_<br>
<img alt="Representação dos números em LED" src="https://resources.urionlinejudge.com.br/gallery/images/problems/UOJ_1168.png" style="width: 500px; height: 95px;"><br>
(Fonte: [Led - URI Online Judge](https://www.urionlinejudge.com.br/judge/en/problems/view/1168))

Então, seguindo o raciocínio, o dígito `1` precisa de 2 LEDs, o `2` de 5 e assim sucessivamente. Já o número `115380` é formado pelos dígitos `{1, 1, 5, 3, 8, 0}` e exige respectivamente a seguinte quantia de LEDs `{2, 2, 5, 5, 7, 6}`, que resulta em um total de 27 LEDs.

Para analisar mais exemplos veja a _Tabela 11.1_.

_Tabela 11.1_

| Entrada   | Saída |
| --------- | ----- |
| `1`       | `2`   |
| `2`       | `5`   |
| `23456`   | `25`  |
| `115380`  | `27`  |
| `2819311` | `29`  |