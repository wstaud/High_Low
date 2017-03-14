<?php
//Create a random number and set user correct to false to repeat program
$randomNumber = rand(1, 100);
$userCorrect = false;

//asks user for guess, compares against the random number. Gives user hint based on
//if the number is higher or lower than the random number. Loop ends once user is correct and userCorrect is set to true
do {
    fwrite(STDOUT, 'Guess? ');
    $answer = fgets(STDIN);
    if ((int)$answer == (int)$randomNumber) {
        echo "You gussed it right!" . PHP_EOL;
        $userCorrect = true;
    } else {
        if ($answer < $randomNumber) {
            echo "HIGHER!" . PHP_EOL;
        } else {
            echo "LOWER!" . PHP_EOL;
        }
    }
} while ($userCorrect === false);

