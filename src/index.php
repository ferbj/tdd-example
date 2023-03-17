<?php

//require_once "controllers/FizzBuzz.php";
require_once __DIR__.'/../vendor/autoload.php';

use Src\controllers\FizzBuzz;

$fizzBuzz = new FizzBuzz();

for ($iterator = 1; $iterator <= 100; $iterator++) {
    echo $fizzBuzz->execute($iterator)."\n";
}

