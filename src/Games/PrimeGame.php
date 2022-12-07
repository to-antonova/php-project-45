<?php

namespace BrainGames\Games\PrimeGame;

use function BrainGames\Engine\startGame;

function isPrime(int $number): bool
{
    $check = 0;
    for ($i = 2; ($i * $i <= $number) && ($check !== 1); $i++) {
        if ($number % $i === 0) {
            $check = 1;
        }
    }

    return ($check !== 1);
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
