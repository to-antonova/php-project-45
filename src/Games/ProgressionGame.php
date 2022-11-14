<?php

namespace BrainGames\Engine;

function getRandomProgression(): array
{
    $progression = [];
    $progression[] = rand(0, 10);
    $countOfNumbers = 10;
    $increment = rand(1, 5);
    for ($i = 1; $i < $countOfNumbers; $i++) {
        $progression[$i] = $progression[$i - 1] + $increment;
    }
    return $progression;
}


function runProgressionGame()
{
    $taskText = 'What number is missing in the progression?';

    $questionAndRightAnswer = function () {
        $progression = getRandomProgression();
        $missingNumber = $progression[rand(1, 8)];
        $strProgression = implode(' ', $progression);
        $searchForStrReplace = ' ' . $missingNumber . ' ';
        $hidingSymbol = ' .. ';
        $progressionWithMissingNumber = str_replace($searchForStrReplace, $hidingSymbol, $strProgression);
        $question = $progressionWithMissingNumber;
        $rightAnswer = $missingNumber;
        return [$question, (string)$rightAnswer];
    };

    startGame($taskText, $questionAndRightAnswer);
}
