<?php

namespace Src\Station12\Question;

use Carbon\CarbonImmutable;

class Food extends Product
{

    // property はアクセス修飾子・型定義不問、 __construct での定義でなくとも良い
    public function __construct(int $originalPrice, protected readonly CarbonImmutable $useByDate)
    {
        parent::__construct($originalPrice);
    }

    public function price() : int
    {
        if ($this->useByDate->diffInHours(CarbonImmutable::now()) < 5) {
            return $this->originalPrice / 2;
        }
        return $this->originalPrice;
    }
}
