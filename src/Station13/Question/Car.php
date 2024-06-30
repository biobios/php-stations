<?php

namespace Src\Station13\Question;

class Car extends Vehicle
{
    public function __construct()
    {}

    protected function run(): void 
    {
        $this->maxSpeed = 60;
        parent::run();
    }

    protected function back(): void 
    {
        $this->hazard();
        parent::back();
    }

    public function hazard(): void 
    {
        echo 'ハザードランプを点灯する';
    }
}