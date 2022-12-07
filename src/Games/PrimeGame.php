<?php

namespace BrainGames\Games\PrimeGame;

use function BrainGames\Engine\startGame;

function isPrime(int $number): bool
{
    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function runPrimeGame()
{
    $taskText = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $questionAndRightAnswer = function () {
        $number = rand(2, 100);
        $question = $number;
        $rightAnswer = isPrime($number) ? 'yes' : 'no';
        return [$question, $rightAnswer];
    };

    startGame($taskText, $questionAndRightAnswer);
}
