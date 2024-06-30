<?php

namespace Src\Station04;

class Question
{
    public function main(): int
    {
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

        $sum = 0;

        foreach ($array as $value) {
            if ($value % 4 === 0 && $value !== 4) {
                break;
            }

            $sum += $value;
        }

        return $sum;
    }
}
