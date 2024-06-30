<?php

namespace Src\Station17\Question;

class Keyboard
{
    public function play(SoundInterface $sound, string $scale): void 
    {
        if ($sound->isValidatedInput($scale)) {
            echo $sound->sound($scale) . 'を鳴らします';
        } else {
            echo 'この音を鳴らすことはできません';
        }
    }
}
