<?php

use Src\controllers\FizzBuzz;
use \PHPUnit\Framework\TestCase;

/*
 * Escribir un programa que muestre en pantalla los números del 1 al 100, sustituyendo los múltiplos de 3 por la palabra "fizz",
 * los múltiplos de 5 por "buzz" y los múltiplos de ambos, es decir, los múltiplos de 3 y 5 (o de 15), por la palabra "fizzbuzz".
 *
 * 1. Muestre en pantalla los números del 1 al 100 * Implementación
 * 2. Sustituyendo los múltiplos de 3 por la palabra "fizz". Atendido
 * 3. Los múltiplos de 5 por "buzz". Atendido
 * 4. Los múltiplos de 3 y 5 (o de 15), por la palabra "fizzbuzz".
 * 5. Los numeros que no son multiplos se quedan como numeros.
 */
  class FizzBuzzTest extends TestCase
 {
    /**
     * @test
     * @dataProvider multiple_3
     */
    public function sustitution_multiple_3_byword_fizz($multiple , $expect)
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->execute($multiple);

        $this->assertEquals($expect, $result);

    }
    /*Data provider function */
    public function multiple_3()
    {
        return [
            [3,'fizz'],
            [6,'fizz'],
            [9,'fizz'],
            [12,'fizz'],
            [18,'fizz'],
        ];
    }
    /**
     * @test
     * @dataProvider multiple_5
     */
    public function sustitution_multiple_5_byword_buzz($multiple , $expect)
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->execute($multiple);

        $this->assertEquals($expect, $result);

    }
    public function multiple_5()
    {
        return [
            [5,'buzz'],
            [10,'buzz'],
            [20,'buzz'],
            [25,'buzz'],
            [35,'buzz'],
        ];
    }

    /**
     * @test
     * @dataProvider multiple_15
     */
    public function sustitution_multiple_15_byword_fizzbuzz($multiple , $expect)
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->execute($multiple);

        $this->assertEquals($expect, $result);

    }
    public function multiple_15()
    {
        return [
            [15,'fizzbuzz'],
            [30,'fizzbuzz'],
            [45,'fizzbuzz'],
            [60,'fizzbuzz'],
            [75,'fizzbuzz'],
            [90,'fizzbuzz']
        ];
    }

    /**
     * @test
     * @dataProvider noMultiplos
     */
    public function no_multiplo_queda_igual($multiple , $expect)
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->execute($multiple);

        $this->assertEquals($expect, $result);

    }
    public function noMultiplos()
    {
        return [
            [1,1],
            [2,2],
            [4,4],
            [7,7],
            [8,8],
            [11,11]
        ];
    }
 }