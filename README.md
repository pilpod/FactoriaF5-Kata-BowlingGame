phpunit setup
==========

This is a simple bootstrap project for PHP with phpunit

For PHP 7.2 or above just run:

```
./composer install

```

To run the tests just run:

```
phpunit --bootstrap vendor/autoload.php tests --filter testNotFailing
```
You need PHP 7.2 or above.


If you have legacy version of php please change composer.json file
and include the version that is compatible with you version of PHP


If you change the phpunit version do not forget to run:

```
./composer update --with-dependencies

```

# run from docker

```
'./test.sh'
```

# Bowling Game Kata

Bowling Rules:
----------------------------------

The game consists of 10 frames. In each frame the player has two rolls to knock down 10 pins. The score for the frame is the total number of pins knocked down, plus bonuses for strikes and spares.

A spare is when the player knocks down all 10 pins in two rolls. The bonus for that frame is the number of pins knocked down by the next roll.

A strike is when the player knocks down all 10 pins on his first roll. The frame is then completed with a single roll. The bonus for that frame is the value of the next two rolls.

In the tenth frame a player who rolls a spare or strike is allowed to roll the extra balls to complete the frame. However no more than three balls can be rolled in tenth frame.

Requirements:
----------------------------------------

Write a class Game that has two methods

    1. void roll(int) is called each time the player rolls a ball. The argument is the number of pins knocked down.
    2. int score() returns the total score for that game.
