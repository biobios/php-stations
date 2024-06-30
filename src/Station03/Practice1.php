<?php

namespace Src\Station03;

class Practice1
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $a = 'bar';
        switch ($a) {
            case 'foo':
                echo '$aは foo です' . PHP_EOL;
                break;
            case 'bar':
            case 'baz':
                echo '$aは bar または baz です' . PHP_EOL;
                break;
            default:
                echo '$aは foo, bar, baz 以外です' . PHP_EOL;
        }
    }
}

(new Practice1())->main();
