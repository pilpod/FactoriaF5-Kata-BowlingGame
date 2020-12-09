<?php

namespace App;

class BowlingGame {

    private int $pinsPerBall;
    private int $scoreResult;
    private int $scoreCurrent;
    private int $ballCount;

    public function __construct()
    {
        $this->pinsPerBall = 0;
        $this->scoreResult = 0;
        $this->scoreCurrent = 0;
        $this->ballCount = 0; 
    }

    public function roll(int $pinsDown): void
    {
        $this->ballCount++;
        $this->pinsPerBall += $pinsDown;
        
        if($this->ballCount == 2 && $this->pinsPerBall < 10) {
            $this->scoreCurrent = $this->pinsPerBall;
            $this->ballCount = 0;
        }
        
        if($this->pinsPerBall == 10 && $this->ballCount == 2) {
            $this->ballCount = 0;
        }

        if($this->pinsPerBall > 10 && $this->ballCount == 1) {
            $this->scoreCurrent += $this->pinsPerBall;
        }
    }

    public function score(): int
    {
        $this->scoreResult = $this->scoreCurrent;
        return $this->scoreResult;
    }

} 

?>