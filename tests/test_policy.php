<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(55, 106, 13, 9, 8);
assert(Policy::score($signal_case_1) === 155);
assert(Policy::classify($signal_case_1) === "review");
$signal_case_2 = new Signal(86, 84, 17, 21, 6);
assert(Policy::score($signal_case_2) === 103);
assert(Policy::classify($signal_case_2) === "review");
$signal_case_3 = new Signal(66, 70, 12, 9, 13);
assert(Policy::score($signal_case_3) === 164);
assert(Policy::classify($signal_case_3) === "review");
