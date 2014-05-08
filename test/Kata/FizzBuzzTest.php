<?php

namespace Kata;


class FizzBuzzTest extends \PHPUnit_Framework_TestCase {

    private $fizzBuzz;

    public function setUp(){
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testPopWithOneReturnsOne(){
        $value = 1;
        $expected = 1;

        $actual = $this->fizzBuzz->pop($value);

        $this->assertEquals($expected, $actual);
    }

    public function testPopWithTwoReturnsTwo(){
        $value = 2;
        $expected = 2;

        $actual = $this->fizzBuzz->pop($value);

        $this->assertEquals($expected, $actual);
    }

    public function testPopWithThreeReturnsFizz(){
        $value = 3;
        $expected = "FIZZ";

        $actual = $this->fizzBuzz->pop($value);

        $this->assertEquals($expected, $actual);
    }

    public function testPopWithFourReturnsFour(){
        $value = 4;
        $expected = 4;

        $actual = $this->fizzBuzz->pop($value);

        $this->assertEquals($expected, $actual);
    }

    public function testPopWithFiveReturnsBuzz(){
        $value = 5;
        $expected = "BUZZ";

        $actual = $this->fizzBuzz->pop($value);

        $this->assertEquals($expected, $actual);
    }

    public function testPopWithSixReturnsFizz(){
        $value = 6;
        $expected = "FIZZ";

        $actual = $this->fizzBuzz->pop($value);

        $this->assertEquals($expected, $actual);
    }

    public function testPopWithTenReturnsBuzz(){
        $value = 10;
        $expected = "BUZZ";

        $actual = $this->fizzBuzz->pop($value);

        $this->assertEquals($expected, $actual);
    }

    public function testPopWithFifteenReturnsFizzBuzz(){
        $value = 15;
        $expected = "FIZZBUZZ";

        $actual = $this->fizzBuzz->pop($value);

        $this->assertEquals($expected, $actual);
    }

    public function testPopWithTwentyReturnsBuzz(){
        $value = 20;
        $expected = "BUZZ";

        $actual = $this->fizzBuzz->pop($value);

        $this->assertEquals($expected, $actual);
    }

    public function testPopWithTwentyOneReturnsFizz(){
        $value = 21;
        $expected = "FIZZ";

        $actual = $this->fizzBuzz->pop($value);

        $this->assertEquals($expected, $actual);
    }

    public function testPopWillThrowExceptionIfValueIsNotNumeric(){
        $value = "this is a string";
        $expected = "Value must be an integer";

        try{
            $this->fizzBuzz->pop($value);
            $this->fail('Should not have reached this');
        }catch(\Exception $e){
            $this->assertEquals($expected, $e->getMessage());
        }
    }

    public function testPopWillThrowExceptionIfValueIsNull(){
        $value = null;
        $expected = "Value must be an integer";

        try{
            $this->fizzBuzz->pop($value);
            $this->fail('Should not have reached this');
        }catch(\Exception $e){
            $this->assertEquals($expected, $e->getMessage());
        }
    }

    public function testPopWillThrowExceptionIfValueIsNotPositive(){
        $value = -42;
        $expected = "Value must be a positive integer";

        try{
            $this->fizzBuzz->pop($value);
            $this->fail('Should not have reached this');
        }catch(\Exception $e){
            $this->assertEquals($expected, $e->getMessage());
        }
    }

    public function testPopWillThrowExceptionIfValueIsZero(){
        $value = 0;
        $expected = "Value must be a positive integer";

        try{
            $this->fizzBuzz->pop($value);
            $this->fail('Should not have reached this');
        }catch(\Exception $e){
            $this->assertEquals($expected, $e->getMessage());
        }
    }

    public function testPopAllBetweenOneAndOneHundredWillReturnAllValuesBetweenOneAndOneHundred(){
        $expected = [];
        $start = 1;
        $end = 100;
        for($i = $start; $i <= $end; $i++){
            $expected[] = $this->fizzBuzz->pop($i);
        }

        $actual = $this->fizzBuzz->popAllBetween($start, $end);

        $this->assertEquals($expected, $actual);
    }

    public function testPopAllBetweenFortyTwoAndFiveHundredWillReturnAllValuesBetweenFortyTwoAndFiveHundred(){
        $expected = [];
        $start = 42;
        $end = 500;
        for($i = $start; $i <= $end; $i++){
            $expected[] = $this->fizzBuzz->pop($i);
        }

        $actual = $this->fizzBuzz->popAllBetween($start, $end);

        $this->assertEquals($expected, $actual);
    }
}
 