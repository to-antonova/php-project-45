<?php

namespace BrainGames\Games;

use Exception;

use function BrainGames\startGame;

function getResultOfCalculation(int $number1, int $number2, string $sign): int
{
    switch ($sign) {
        case ' + ':
            return $number1 + $number2;
        case ' - ':
            return $number1 - $number2;
        case ' * ':
            return $number1 * $number2;
        default:
            throw new Exception('Error! Unknown math sign: "' . $sign . '"!' . PHP_EOL);
    }
}

function runCalcGame(): void
{
    $taskText = 'What is the result of the expression?';

    $questionAndRightAnswer = function () {
        $number1 = rand(0, 10);
        $number2 = rand(0, 10);
        $signArray = [' + ', ' - ', ' * '];
        $sign = $signArray[rand(0, 2)];
        $question = $number1 . $sign . $number2;
        $rightAnswer = getResultOfCalculation($number1, $number2, $sign);
        return [$question, (string)$rightAnswer];
    };

    startGame($taskText, $questionAndRightAnswer);
}
