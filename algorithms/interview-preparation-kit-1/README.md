# Preparação de Entrevista 1

## DESCRIÇÃO

---

Cada vez mais os processos seletivos estão utilizando resolução de problemas para analisar o nível de compreensão dos conceitos de programação do candidato. Para simular esse processo será exigido a entrega de no **mínimo três** dos algoritmos descritos a seguir.

Detalhe, as questões já possuem esboços disponíveis em arquivos dependendo da linguagem. Para maiores detalhes veja a **seção CÓDIGO**.

## QUESTÕES

---

| #   | Questões                                | js                                                                                   | php                                                                                    | ruby                                                                                     |
| --- | --------------------------------------- | ------------------------------------------------------------------------------------ | -------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| 1   | [format-date](format-date/)             | [code](format-date/js/code.zip), [response](format-date/js/response.zip)             | [code](format-date/php/code.zip), [response](format-date/php/response.zip)             | [code](format-date/ruby/code.zip), [response](format-date/ruby/response.zip)             |
| 2   | [grammar](grammar/)                     | [code](grammar/js/code.zip), [response](grammar/js/response.zip)                     | [code](grammar/php/code.zip), [response](grammar/php/response.zip)                     | [code](grammar/ruby/code.zip), [response](grammar/ruby/response.zip)                     |
| 3   | [socket-merchant](socket-merchant/)     | [code](socket-merchant/js/code.zip), [response](socket-merchant/js/response.zip)     | [code](socket-merchant/php/code.zip), [response](socket-merchant/php/response.zip)     | [code](socket-merchant/ruby/code.zip), [response](socket-merchant/ruby/response.zip)     |
| 4   | [rot-left](rot-left/)                   | [code](rot-left/js/code.zip), [response](rot-left/js/response.zip)                   | [code](rot-left/php/code.zip), [response](rot-left/php/response.zip)                   | [code](rot-left/ruby/code.zip), [response](rot-left/ruby/response.zip)                   |
| 5   | [array-stats](array-stats/)             | [code](array-stats/js/code.zip), [response](array-stats/js/response.zip)             | [code](array-stats/php/code.zip), [response](array-stats/php/response.zip)             | [code](array-stats/ruby/code.zip), [response](array-stats/ruby/response.zip)             |
| 6   | [min-max-sum](min-max-sum/)             | [code](min-max-sum/js/code.zip), [response](min-max-sum/js/response.zip)             | [code](min-max-sum/php/code.zip), [response](min-max-sum/php/response.zip)             | [code](min-max-sum/ruby/code.zip), [response](min-max-sum/ruby/response.zip)             |
| 7   | [highest-frequency](highest-frequency/) | [code](highest-frequency/js/code.zip), [response](highest-frequency/js/response.zip) | [code](highest-frequency/php/code.zip), [response](highest-frequency/php/response.zip) | [code](highest-frequency/ruby/code.zip), [response](highest-frequency/ruby/response.zip) |
| 8   | [repeated-string](repeated-string/)     | [code](repeated-string/js/code.zip), [response](repeated-string/js/response.zip)     | [code](repeated-string/php/code.zip), [response](repeated-string/php/response.zip)     | [code](repeated-string/ruby/code.zip), [response](repeated-string/ruby/response.zip)     |
| 9   | [mirror-sequence](mirror-sequence/)     | [code](mirror-sequence/js/code.zip), [response](mirror-sequence/js/response.zip)     | [code](mirror-sequence/php/code.zip), [response](mirror-sequence/php/response.zip)     | [code](mirror-sequence/ruby/code.zip), [response](mirror-sequence/ruby/response.zip)     |
| 10  | [zero-means-zero](zero-means-zero/)     | [code](zero-means-zero/js/code.zip), [response](zero-means-zero/js/response.zip)     | [code](zero-means-zero/php/code.zip), [response](zero-means-zero/php/response.zip)     | [code](zero-means-zero/ruby/code.zip), [response](zero-means-zero/ruby/response.zip)     |
| 11  | [number-of-leds](number-of-leds/)       | [code](number-of-leds/js/code.zip), [response](number-of-leds/js/response.zip)       | [code](number-of-leds/php/code.zip), [response](number-of-leds/php/response.zip)       | [code](number-of-leds/ruby/code.zip), [response](number-of-leds/ruby/response.zip)       |

## CÓDIGO

---

### Javascript

Se seu PC não possui Javascript e Jest, mas possui o docker, veja que o projeto existe um `Dockerfile`. Então, para executar os testes basta executar os seguintes comandos:

```
$ cd code
$ docker build -t node:jest .
$ docker run -it --rm -w /app -v "$PWD":/app node:jest sh
# jest arrayStats.spec.js
# jest
```

### PHP

Se seu PC não possui PHP, composer e kahlan, mas possui o docker, veja que o projeto existe um `Dockerfile`. Então, para executar os testes basta executar os seguintes comandos:

```
$ cd code
$ docker build -t php:kahlan .
$ docker run -it --rm -w /app -v "$PWD"/src:/app/src -v "$PWD"/spec:/app/spec -v "$PWD"/composer.json:/app/composer.json php:kahlan sh
# composer install
# kahlan --spec=spec/ArrayStats.spec.php
# kahlan --spec=spec/
```

### Ruby

Se seu PC não possui Ruby e rspec, mas possui o docker, veja que o projeto existe um `Dockerfile`. Então, para executar os testes basta executar os seguintes comandos:

```
$ cd code
$ docker build -t ruby:rspec .
$ docker run -it --rm -w /app -v "$PWD":/app ruby:rspec sh
# rspec spec/array_stats.spec.rb
# rspec spec/*.spec.rb
```
