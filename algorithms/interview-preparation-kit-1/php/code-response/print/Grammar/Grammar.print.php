<?php
require __DIR__ . '/../../vendor/autoload.php';
use \Grammar\Grammar;

// Grammar Util

// spelling "programador"
var_dump(Grammar::spelling('programador'));
var_dump('P-R-O-G-R-A-M-A-D-O-R');

// spelling "o dia está chuvoso"
var_dump(Grammar::spelling('o dia está chuvoso'));
var_dump('O-D-I-A-E-S-T-Á-C-H-U-V-O-S-O');
