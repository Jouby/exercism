<?php

class Game
{
    const DEFAULT_POSSIBLE_FRAME = 10;

    protected $totalScore = 0;
    protected $turnScore = 0;
    protected $turn = 1;
    protected $frame = 1;
    protected $additionalTurn = 0;

    protected $double = [
        1 => 1,
        2 => 1
    ];

    public function roll($pins)
    {
        if ($pins < 0 || $pins > 10) {
            throw new Exception();
        }
        $this->totalScore += $this->double[1]*$pins;
        $this->turnScore += $pins;

        if ($this->turnScore > 10) {
            throw new Exception();
        }

        $this->double[1] = $this->double[2];
        $this->double[2] = 1;

        if ($this->turnScore === 10) {
            if ($this->frame < self::DEFAULT_POSSIBLE_FRAME) {
                $this->double[1]++;
                if ($this->turn === 1) {
                    $this->double[2]++;
                }
            }

            if ($this->frame === self::DEFAULT_POSSIBLE_FRAME) {
                $this->additionalTurn++;
                if ($this->turn === 1) {
                    $this->additionalTurn++;
                }
            }

            $this->endTurn();
        } else {
            if ($this->turn === 2) {
                $this->endTurn();
            } else {
                $this->turn++;
                if ($this->frame > self::DEFAULT_POSSIBLE_FRAME) {
                    $this->frame++;
                }
            }
        }
    }

    protected function endTurn()
    {
        $this->turn = 1;
        $this->turnScore = 0;
        $this->frame++;
    }

    public function score()
    {
        if ($this->frame-1 !== self::DEFAULT_POSSIBLE_FRAME + $this->additionalTurn) {
            throw new Exception();
        }
        $score = $this->totalScore;
        $this->totalScore = 0;
        return $score;
    }
}