<?php

namespace App;

class BowlingGame {

    private int $score = 0;
    private int $frame = 0;
    private int $ball = 1;

    public function Roll(int $pins)
    {
        if($this->frame == 10) {
            $this->score += $pins;
        }

        if($this->ball == 3) {
            $this->ball = 1;
            $this->frame = 0;
        }

        if($this->ball == 1 && $this->frame < 10) {
            $this->frame += $pins;
        }

        if($this->ball == 2 && $this->frame < 10) {
            $this->frame += $pins;
            $this->score += $this->frame;
        }

        $this->ball++;

    }

    public function Score() : int
    {
        return $this->score;
    }

} 

?>