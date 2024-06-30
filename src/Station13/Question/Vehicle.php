<?php

namespace Src\Station13\Question;

class Vehicle
{

    protected $name = '';
    protected $maxSpeed = 0;

    public function __construct()
    {
    }

    protected function run(): void {
        echo 'アクセルを踏む';
    }

    private function stop(): void {
        echo 'ブレーキを踏む';
    }

    private function right(): void {
        echo '右にハンドルを回す';
    }

    private function left(): void {
        echo '左にハンドルを回す';
    }

    protected function back(): void {
        echo 'バックする';
    }

    public function turnRight(): void {
        $this->stop();
        $this->right();
        $this->run();
    }

    public function backLeft(): void {
        $this->stop();
        $this->left();
        $this->back();
    }
}
