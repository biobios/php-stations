<?php

namespace Src\Station06;

class Question
{
    public function main(): array
    {
        $array = ['red', 'blue', 'yellow'];
        array_pop($array);
        array_splice($array, 1, 0, 'green');
        array_splice($array, 0, 0, ['white', 'black']);
        return $array;
    }
}
