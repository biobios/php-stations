<?php

namespace Src\Station17\Question;

class GuitarSound implements SoundInterface
{
    const INSTRUMENT_NAME = 'ギター';

    public function isValidatedInput(string $scale): bool
    {
        return in_array($scale, ['C', 'D', 'E', 'F', 'G', 'A', 'B']);
    }

    public function sound(string $scale): string
    {
        return $this->effect($scale);
    }

    private function effect(string $scale): string
    {
        return 'エフェクトをかけた' . self::INSTRUMENT_NAME . 'の' . $scale;
    }
}