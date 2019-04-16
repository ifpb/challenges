<?php
require __DIR__ . '/../../vendor/autoload.php';

use \Date\Format;

// Format Date

var_dump(Format::long('29/10/1969'));
var_dump('29 de outubro de 1969');

var_dump(Format::long('01/01/1970'));
var_dump('01 de janeiro de 1970');

var_dump(Format::long('15/09/1975'));
var_dump('15 de setembro de 1975');

var_dump(Format::long('01/04/1976'));
var_dump('01 de abril de 1976');

var_dump(Format::long('01-04-1976'));
var_dump('Invalid data input');

var_dump(Format::long('1976'));
var_dump('Invalid data input');

var_dump(Format::long('aaa'));
var_dump('Invalid data input');
