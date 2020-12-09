<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\BowlingGame;

class BowlingGameTest extends TestCase {

	public function test_player_knocked_down_2_and_3_pins_with_2_ball()
	{
		$game = new BowlingGame();
		$game->roll(2);
		$game->roll(3);
		$result = $game->score();

		$this->assertEquals(5, $result);
	}

	public function test_player_make_a_spare()
	{
		//given
		$game = new BowlingGame;
		//when
		$game->roll(4);
		$game->roll(6);
		$game->roll(1);
		$game->roll(4);
		$result = $game->score();
		//then
		$this->assertEquals(11, $result);
	}

}


