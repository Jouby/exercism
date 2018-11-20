<?php

class Clock
{
    protected $hours = 0;
    protected $minutes = 0;

    public function __construct($hours, $minutes = 0)
    {
        $this->hours = $hours%24;
        if ($this->hours < 0) {
            $this->hours = 24 + $this->hours;
        }

        if ($minutes > 0) {
            $this->add($minutes);
        } else {
            $this->sub(abs($minutes));
        }
    }

    public function add($minutes)
    {
        $addHours = floor($minutes/60);
        $addMinutes = $minutes - $addHours*60;
        $addHours = $addHours%24;

        if ($addMinutes + $this->minutes >= 60) {
            $addHours++;
            $addMinutes -= 60;
        }
        if ($addHours + $this->hours >= 24) {
            $addHours -= 24;
        }

        $this->hours += $addHours;
        $this->minutes += $addMinutes;

        return $this;
    }

    public function sub($minutes)
    {
        $subHours = floor($minutes/60);
        $subMinutes = $minutes - $subHours*60;
        $subHours = $subHours%24;

        if ($this->minutes - $subMinutes < 0) {
            $subHours++;
            $subMinutes -= 60;
        }
        if ($this->hours - $subHours < 0) {
            $subHours -= 24;
        }

        $this->hours -= $subHours;
        $this->minutes -= $subMinutes;

        return $this;
    }

    public function __toString()
    {
        return str_pad($this->hours, 2, '0', STR_PAD_LEFT)
            .':'
            .str_pad($this->minutes, 2, '0', STR_PAD_LEFT);
    }
}
