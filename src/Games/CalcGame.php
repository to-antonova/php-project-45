<?php

namespace BrainGames\Cli;

function getResultOfCalculation($number1, $number2, $sign): int
{
    switch ($sign) {
        case '-':
            return $number1 - $number2;
        case '*':
            return $number1 * $number2;
        case '+':
            return $number1 + $number2;
    }
    return 0;
}

function runCalcGame(): void
{
    $taskText = 'What is the result of the expression?';

    $questionAndRightAnswer = function () {
        $number1 = rand(0, 10);
        $number2 = rand(0, 10);
        $signArray = array('+', '-', '*');
        $sign = $signArray[rand(0, 2)];
        $question = $number1 . $sign . $number2;
        $rightAnswer = getResultOfCalculation($number1, $number2, $sign);
        return [$question, (string)$rightAnswer];
    };

    startGame($taskText, $questionAndRightAnswer);
}
