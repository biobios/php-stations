<?php

namespace Src\Station17\Question;

class PianoSound implements SoundInterface
{
    const INSTRUMENT_NAME = 'ピアノ';

    public function isValidatedInput(string $scale): bool
    {
        return in_array($scale, ['ド', 'レ', 'ミ', 'ファ', 'ソ', 'ラ', 'シ']);
    }

    public function sound(string $scale): string 
    {
        return self::INSTRUMENT_NAME . 'の' . $scale;
    }
}