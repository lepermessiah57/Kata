<?php

namespace Kata;


class FizzBuzzTest extends \PHPUnit_Framework_TestCase {

    public function testPrintFizzBuzzThrowsExceptionWhenNullPassedIn(){
        $fizzBuzz = new FizzBuzz();

        try{
            $fizzBuzz->printFizzBuzz(null);
            $this->fail();
        }catch(\Exception $e){
            $this->assertEquals("Invalid Input",$e->getMessage());
        }
    }

    public function testPrintFizzBuzzThrowsExceptionWhenNotANumberIsPassedIn(){
        $fizzBuzz = new FizzBuzz();

        try{
            $fizzBuzz->printFizzBuzz("herring");
            $this->fail();
        }catch(\Exception $e){
            $this->assertEquals("Invalid Input",$e->getMessage());
        }
    }

    public function testZeroWillThrowException(){
        $fizzBuzz = new FizzBuzz();

        try{
            $fizzBuzz->printFizzBuzz(0);
            $this->fail();
        }catch(\Exception $e){
            $this->assertEquals("Invalid Input",$e->getMessage());
        }
    }

    public function testOneWillReturnOne(){
        $fizzBuzz = new FizzBuzz();
        $value = $fizzBuzz->printFizzBuzz(1);

        $this->assertEquals(1, $value);
    }

    public function testThreeWillReturnFizz(){
        $fizzBuzz = new FizzBuzz();
        $value = $fizzBuzz->printFizzBuzz(3);

        $this->assertEquals("FIZZ", $value);
    }

    public function testFiveWillReturnBuzz(){
        $fizzBuzz = new FizzBuzz();
        $value = $fizzBuzz->printFizzBuzz(5);

        $this->assertEquals("BUZZ", $value);
    }

    public function testFifteenWillReturnFizzBuzz(){
        $fizzBuzz = new FizzBuzz();
        $value = $fizzBuzz->printFizzBuzz(15);

        $this->assertEquals("FIZZBUZZ", $value);
    }

    public function testThirtyWillReturnFizzBuzz(){
        $fizzBuzz = new FizzBuzz();
        $value = $fizzBuzz->printFizzBuzz(30);

        $this->assertEquals("FIZZBUZZ", $value);
    }

    public function testFoo(){
        $fizzBuzz = new FizzBuzz();
        for($i = 1; $i <= 100; $i++){
            print($fizzBuzz->printFizzBuzz($i) . "\n");
        }
    }
}
 