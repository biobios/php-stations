<?php

namespace Src\Station10;

class Question
{
    public function main(string $animal): string
    {
        return $this->getAnimalName($animal);
    }

    private function getAnimalName(string $animal): string
    {
        switch ($animal) {
            case '猫':
                return 'ミケ';
            case '犬':
                return 'ポチ';
            default:
                return 'わかりません';
        }
    }
}
