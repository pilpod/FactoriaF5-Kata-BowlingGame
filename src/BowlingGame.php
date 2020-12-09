<?php

namespace App;

class BowlingGame {

    private int $pinsPerBall;
    private int $scoreResult;
    private int $scoreCurrent;
    private int $ballCount;
    private string $flag;

    public function __construct()
    {
        $this->pinsPerBall = 0;
        $this->scoreResult = 0;
        $this->scoreCurrent = 0;
        $this->ballCount = 0;
        $this->flag = '';
    }

    public function roll(int $pinsDown): void
    {   
        $this->ballCount++;
        $this->pinsPerBall += $pinsDown;
        
        if($this->pinsPerBall < 10 && $this->ballCount == 2) {
            $this->scoreCurrent = $this->pinsPerBall;
            $this->ballCount = 0;
        }

        if($this->pinsPerBall == 10 && $this->ballCount == 2) {
            $this->ballCount = 0;
            $this->flag = 'spare';
        }

        if($this->pinsPerBall > 10 && $this->ballCount == 1 && $this->flag == 'spare') {
            $this->scoreCurrent += $this->pinsPerBall;
        }

        if($this->pinsPerBall > 10 && $this->ballCount == 2 && $this->flag == 'strike') {
            $this->scoreCurrent += $this->pinsPerBall;
        }

        if($this->pinsPerBall == 10 && $this->ballCount == 1) {
            $this->ballCount = 0;
            $this->flag = 'strike';
        }
    }

    public function score(): int
    {
        $this->scoreResult = $this->scoreCurrent;
        return $this->scoreResult;
    }

} 

?>