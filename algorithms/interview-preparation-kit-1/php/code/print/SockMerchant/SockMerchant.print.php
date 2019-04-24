<?php
require __DIR__ . '/../../vendor/autoload.php';

use \SockMerchant\SockMerchant;

// Sock Merchant
// number of matching pairs of [1, 2, 3]
$arr = [1, 2, 3];
var_dump(SockMerchant::sockMerchant($arr));
var_dump(0);

// number of matching pairs of [1, 1, 1, 2]
$arr = [1, 1, 1, 2];
var_dump(SockMerchant::sockMerchant($arr));
var_dump(1);

// number of matching pairs of [1, 2, 1, 2, 1, 3, 2]
$arr = [1, 2, 1, 2, 1, 3, 2];
var_dump(SockMerchant::sockMerchant($arr));
var_dump(2);

// number of matching pairs of [10, 20, 20, 10, 10, 30, 50, 10, 20]
$arr = [10, 20, 20, 10, 10, 30, 50, 10, 20];
var_dump(SockMerchant::sockMerchant($arr));
var_dump(3);
