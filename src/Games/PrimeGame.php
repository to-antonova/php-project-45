<?php

namespace BrainGames\Cli;

function isPrime(int $number): string
{
    $primeNumbers = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97];
    foreach ($primeNumbers as $primeNumber) {
        if ($number === $primeNumber) {
            return 'yes';
        }
    }
    return 'no';
}

function runPrimeGame()
{
    $taskText = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $questionAndRightAnswer = function () {
        $number = rand(0, 100);
        $question = $number;
        $rightAnswer = isPrime($number);
        return [$question, $rightAnswer];
    };

    startGame($taskText, $questionAndRightAnswer);
}
