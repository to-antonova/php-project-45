<?php

namespace BrainGames\Games\PrimeGame;

use function BrainGames\Engine\startGame;

define("TASK_TEXT_PRIME", 'Answer "yes" if given number is prime. Otherwise answer "no".');

function isPrime(int $number): bool
{
    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function runGame()
{
    $questionAndRightAnswer = function () {
        $number = rand(2, 100);
        $question = $number;
        $rightAnswer = isPrime($number) ? 'yes' : 'no';
        return [$question, $rightAnswer];
    };

    startGame(TASK_TEXT_PRIME, $questionAndRightAnswer);
}
