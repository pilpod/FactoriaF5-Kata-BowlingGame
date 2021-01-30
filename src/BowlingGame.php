<?php

namespace App;

class BowlingGame {

    private int $score = 0;
    private int $frame = 0;
    private int $ball = 1;

    public function Roll(int $pins)
    {
        $this->score += $pins;

    }

    public function Score() : int
    {
        return $this->score;
    }

} 

?>