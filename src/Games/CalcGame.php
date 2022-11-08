#!/usr/bin/env php
<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function resultOfCalculation($number1, $number2, $sign): int
{
    switch ($sign) {
        case '-':
            return $number1 - $number2;
        case '*':
            return $number1 * $number2;
        default:
            return $number1 + $number2;
    }
}

function writeExpression($number1, $number2, $sign) : string
{
    return $number1 . $sign . $number2;
}

function calcGame(): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('What is the result of the expression?');
    for ($i = 0; $i < 3; $i++) {
        $number1 = rand(0, 10);
//        echo $number1 . PHP_EOL;
        $number2 = rand(0, 10);
//        echo $number2 . PHP_EOL;
        $signArray = array('+', '-', '*');
        $sign = $signArray[rand(0, 2)];
//        echo $sign . PHP_EOL;
        $rightAnswerCalc = resultOfCalculation($number1, $number2, $sign);
        $expression = writeExpression($number1, $number2, $sign);
        line('Question: %s', $expression);
        $answerCalc = prompt('Your answer: ');
        if ($rightAnswerCalc === (int)$answerCalc) { //поменять местами if/else
            line("Correct!");
            if ($i === 2) {
                line('Congratulations, %s!', $name);
            }
        } else {
            line("'{$answerCalc}' is wrong answer ;(. Correct answer was '{$rightAnswerCalc}'.");
            line("Let's try again, %s!", $name);
            break;
        }
    }
}
