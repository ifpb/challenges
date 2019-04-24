<?php

require __DIR__ . '/../../vendor/autoload.php';

use \Vector\ArrayUtil;

// performing 1 left rotations
$arrayUtil = new ArrayUtil([1, 2, 3, 4, 5]);
$expected = [2, 3, 4, 5, 1];
var_dump($arrayUtil->rotLeft(1));
var_dump($expected);

// performing 4 left rotations
$arrayUtil = new ArrayUtil([1, 2, 3, 4, 5]);
$expected = [5, 1, 2, 3, 4];
var_dump($arrayUtil->rotLeft(4));
var_dump($expected);

// performing 10 left rotations
$arrayUtil = new ArrayUtil([41, 73, 89, 7, 10, 1, 59, 58, 84, 77, 77, 97, 58, 1, 86, 58, 26, 10, 86, 51]);
$expected = [77, 97, 58, 1, 86, 58, 26, 10, 86, 51, 41, 73, 89, 7, 10, 1, 59, 58, 84, 77];
var_dump($arrayUtil->rotLeft(10));
var_dump($expected);

// performing 13 left rotations
$arrayUtil = new ArrayUtil([33, 47, 70, 37, 8, 53, 13, 93, 71, 72, 51, 100, 60, 87, 97]);
$expected = [87, 97, 33, 47, 70, 37, 8, 53, 13, 93, 71, 72, 51, 100, 60];
var_dump($arrayUtil->rotLeft(13));
var_dump($expected);

// stats [1, 1, 1]
$arrayUtil = new ArrayUtil([1, 1, 1]);
$expected = ['0.000000', '0.000000', '1.000000'];
var_dump($arrayUtil->stats());
var_dump($expected);

// stats [0, 0, 1, 1]
$arrayUtil = new ArrayUtil([0, 0, 1, 1]);
$expected = ['0.000000', '0.500000', '0.500000'];
var_dump($arrayUtil->stats());
var_dump($expected);

// stats [-4, 3, -9, 0, 4, 1]
$arrayUtil = new ArrayUtil([-4, 3, -9, 0, 4, 1]);
$expected = ['0.333333', '0.166667', '0.500000'];
var_dump($arrayUtil->stats());
var_dump($expected);

// stats [1, 2, 3, -1, -2, -3, 0, 0]
$arrayUtil = new ArrayUtil([1, 2, 3, -1, -2, -3, 0, 0]);
$expected = ['0.375000', '0.250000', '0.375000'];
var_dump($arrayUtil->stats());
var_dump($expected);

// min and max of [1, 2, 3, 4, 5]
$arrayUtil = new ArrayUtil([1, 2, 3, 4, 5]);
$expected = [10, 14];
var_dump($arrayUtil->minMaxSum());
var_dump($expected);

// min and max of [0, 2, 6, 3, 4]
$arrayUtil = new ArrayUtil([0, 2, 6, 3, 4]);
$expected = [9, 15];
var_dump($arrayUtil->minMaxSum());
var_dump($expected);

// min and max of [10, 23, 61, 37, 41]
$arrayUtil = new ArrayUtil([10, 23, 61, 37, 41]);
$expected = [111, 162];
var_dump($arrayUtil->minMaxSum());
var_dump($expected);

// highest frequency of [1, 4, 4, 4, 5, 3]
$arrayUtil = new ArrayUtil([1, 4,  4, 4, 5, 3]);
var_dump($arrayUtil->highestFrequency());
var_dump(4);

// highest frequency of [1, 1, 1, 4, 5, 3]
$arrayUtil = new ArrayUtil([1, 1, 1, 4, 5, 3]);
var_dump($arrayUtil->highestFrequency());
var_dump(1);

// highest frequency of [1, 2, 3, 4, 5, 4, 3, 2, 1, 3, 4]
$arrayUtil = new ArrayUtil([1, 2, 3, 4,  5, 4, 3, 2, 1,   3, 4]);
var_dump($arrayUtil->highestFrequency());
var_dump(3);
