<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\BowlingGame;

use function PHPUnit\Framework\assertEquals;

class BowlingGameTest extends TestCase {

	public function test_player_finished_the_game_with_zero_point()
	{
		$game = new BowlingGame();
		$expected = 0;

		for( $i = 0; $i < 20; $i++) {
			$game->Roll(0);
		}

		$score = $game->Score();

		$this->assertEquals($expected, $score);
	}

	public function test_player_do_ones_in_all_roll()
	{
		$game = new BowlingGame();
		$expected = 20;

		for( $i = 0; $i < 20; $i++) {
			$game->Roll(1);
		}

		$score = $game->Score();

		$this->assertEquals($expected, $score);
	}
	
	public function test_player_do_one_spare()
	{
		$game = new BowlingGame();
		$expected = 12;

		$game->Roll(4); //frame 4
		$game->Roll(6); //frame 10 -> score 10
		$game->Roll(1); //frame 0 -> waiting frame

		for ($i=0; $i < 18; $i++) { 
			$game->Roll(0);
		}

		$score = $game->Score();

		$this->assertEquals($expected, $score);
	}

	

}


