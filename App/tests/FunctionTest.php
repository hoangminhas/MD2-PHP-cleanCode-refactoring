<?php
use PHPUnit\Framework\TestCase;
require "../src/app-cleancode-refactoring-renaming/Calculator.php";
require "../src/app-cleancode-refactoring-variable-extraction/FizzBuzz.php";

final class FunctionTest extends TestCase
{
    public function testCalculateAdd() {
        $va = new Calculator();
        $add = '+';
        $firstOperand = 1;
        $secondOperand = 1;
        $result = $va->calculate($firstOperand, $secondOperand, $add);
        $expect = 2;
        $this->assertEquals($expect,$result,'Nice');
    }

    public function testDivisionForZero() {
        $calculation = new Calculator();
        $div = '/';
        $firstOperand = 3;
        $secondOperand = 0;
        $result = $calculation->calculate($firstOperand, $secondOperand, $div);
        $expect = "Can not divide by Zero";
        $this->assertEquals($expect, $result);
    }

    public function testFizzBuzz() {
         $fizzBuzz = new FizzBuzz(24);
         $result = $fizzBuzz->status;
         $expect = "Fizz";
         $this->assertEquals($expect, $result);
    }
}