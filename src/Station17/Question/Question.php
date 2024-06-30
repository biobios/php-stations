<?php

namespace Src\Station17\Question;

class Question
{
    public function main(): void
    {
        $keyboard = new Keyboard();
        $guitarSound = new GuitarSound();
        $pianoSound = new PianoSound();

        $keyboard->play($pianoSound, 'ド');
        $keyboard->play($guitarSound, 'C');
    }
}
