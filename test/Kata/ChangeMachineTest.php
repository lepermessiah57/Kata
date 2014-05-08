<?php

namespace Kata;

class ChangeMachineTest extends \PHPUnit_Framework_TestCase {

    private $changeMachine;

    public function setUp(){
        $this->changeMachine = new ChangeMachine();
    }

    public function testMakeChangeForOneCentReturnsOnePenny(){
        $cash = .01;
        $expected = ['penny'=>1];

        $actual = $this->changeMachine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForTwoCentsReturnsTwoPennies(){
        $cash = .02;
        $expected = ['penny'=>2];

        $actual = $this->changeMachine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForThreeCentsReturnsThreePennies(){
        $cash = .03;
        $expected = ['penny'=>3];

        $actual = $this->changeMachine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForFiveCentsReturnsOneNickel(){
        $cash = .05;
        $expected = ['nickel'=>1];

        $actual = $this->changeMachine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForSevenCentsReturnsOneNickelAndTwoPennies(){
        $cash = .07;
        $expected = ['nickel'=>1, 'penny'=>2];

        $actual = $this->changeMachine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForTenCentsReturnsOneDime(){
        $cash = .10;
        $expected = ['dime'=>1];

        $actual = $this->changeMachine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForTwelveCentsReturnsOneDimeAndTwoPennies(){
        $cash = .12;
        $expected = ['dime'=>1, 'penny'=>2];

        $actual = $this->changeMachine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForFifteenCentsReturnsOneDimeAndOneNickel(){
        $cash = .15;
        $expected = ['dime'=>1, 'nickel'=>1];

        $actual = $this->changeMachine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForSixteenCentsReturnsOneDimeOneNickelAndOnePenny(){
        $cash = .16;
        $expected = ['dime'=>1, 'nickel'=>1, 'penny'=>1];

        $actual = $this->changeMachine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForTwentyFourCentsReturnsTwoDimesAndFourPennies(){
        $cash = .24;
        $expected = ['dime'=>2, 'penny'=>4];

        $actual = $this->changeMachine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForTwentyFiveCentsReturnsOneQuarter(){
        $cash = .25;
        $expected = ['quarter'=>1];

        $actual = $this->changeMachine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForFortyTwoCentsReturnsOneQuarterOneDimeOneNickelAndTwoPennies(){
        $cash = .42;
        $expected = ['quarter'=>1, 'dime'=>1, 'nickel'=>1, 'penny'=>2];

        $actual = $this->changeMachine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForFiftyCentsReturnsOneHalfDollar(){
        $cash = .50;
        $expected = ['half-dollar'=>1];

        $actual = $this->changeMachine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForThreeFiddyReturnsSevenHalfDollar(){
        $cash = 3.50;
        $expected = ['half-dollar'=>7];

        $actual = $this->changeMachine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeWithAlphaStringThrowsAnException(){
        $cash = "Some random string";
        $expected = "Input must be numeric";

        try{
            $this->changeMachine->makeChange($cash);
            $this->fail('Should not have reached this');
        }catch(\Exception $e){
            $this->assertEquals($expected, $e->getMessage());
        }
    }

    public function testMakeChangeWithNullThrowsAnException(){
        $cash = null;
        $expected = "Input must be numeric";

        try{
            $this->changeMachine->makeChange($cash);
            $this->fail('Should not have reached this');
        }catch(\Exception $e){
            $this->assertEquals($expected, $e->getMessage());
        }
    }

    public function testMakeChangeWithNegativeValueThrowsAnException(){
        $cash = -.05;
        $expected = "Input must be positive";

        try{
            $this->changeMachine->makeChange($cash);
            $this->fail('Should not have reached this');
        }catch(\Exception $e){
            $this->assertEquals($expected, $e->getMessage());
        }
    }
}
 