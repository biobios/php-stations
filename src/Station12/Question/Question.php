<?php

namespace Src\Station12\Question;

use Carbon\CarbonImmutable;

class Question
{
    public function main(int $originalPrice, CarbonImmutable $useByDate): int
    {
        return (new Food($originalPrice, $useByDate))->price();
    }
}
