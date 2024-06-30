<?php

namespace Src\Station15\Question;

class Calculator
{

    public function __construct()
    {
    }

    public function multiply($multiplieds, $multiplier)
    {
        if (count($multiplieds) === 0) {
            return false;
        }

        return array_map(function ($multiplied) use ($multiplier) {
            return $multiplied * $multiplier;
        }, $multiplieds );
    }
}