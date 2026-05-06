<?php
declare(strict_types=1);
require __DIR__ . "/../src/DomainReview.php";

use Portfolio\DomainReview;
use Portfolio\DomainReviewLens;

$item = new DomainReview(44, 39, 25, 48);
assert(DomainReviewLens::score($item) === 100);
assert(DomainReviewLens::lane($item) === "hold");
