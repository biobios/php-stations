<?php

namespace Src\Station14\Question;

class Car
{
    public const DOOR = 5;
    public static $passenger = 0;

    public static function getPassenger(): void 
    {
        echo self::$passenger;
    }

    public static function pickup(): void 
    {
        self::$passenger++;
        self::getPassenger();
    }

    public static function getDoors(): void 
    {
        echo self::DOOR;
    }
}