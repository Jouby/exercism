<?php

class Robot
{
    protected $name;

    protected static $previousName = [];

    public function __construct()
    {
        $this->reset();
    }

    public function getName()
    {
        return $this->name;
    }

    public function reset()
    {
        $name = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 2) . rand(0,9). rand(0,9). rand(0,9);

        if (!in_array($name, self::$previousName)) {
            self::$previousName[] = $name;
            $this->name = $name;
        } else {
            $this->reset();
        }
    }
}
