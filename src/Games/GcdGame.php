<?php

namespace BrainGames\Games\GcdGame;

use function BrainGames\Engine\startGame;

function gcd(int $number1, int $number2): int
{
    if ($number1 === 0) {
        return $number2;
    }
    if ($number2 === 0) {
        return $number1;
    }

    if ($number1 > $number2) {
        $dividend = $number1;
        $divider = $number2;
    } else {
        $dividend = $number2;
        $divider = $number1;
    }

    $modulo = $dividend % $divider;
    $dividend = $divider;
    $divider = $modulo;
    while ($modulo !== 0) {
        $modulo = $dividend % $divider;
        $dividend = $divider;
        $divider = $modulo;
    }

    return $dividend;
}

function runGcdGame()
{
    $taskText = 'Find the greatest common divisor of given numbers.';

    $questionAndRightAnswer = function () {
        $number1 = rand(0, 100);
        $number2 = rand(0, 100);
        $question = $number1 . ' ' . $number2;
        $rightAnswer = gcd($number1, $number2);
        return [$question, (string)$rightAnswer];
    };

    startGame($taskText, $questionAndRightAnswer);
}
