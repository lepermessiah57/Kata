<?php

namespace Kata;


class ChangeMachineTest extends \PHPUnit_Framework_TestCase {

    private $machine;

    public function setUp(){
        $this->machine = new ChangeMachine();
    }

    public function testMakeChangeForOneCentReturnsOnePenny(){
        //arrange
        $cash = .01;
        $expected = ['penny'=>1];

        //act
        $actual = $this->machine->makeChange($cash);

        //assert
        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForTwoCentsReturnsTwoPennies(){
        $cash = .02;
        $expected = ['penny'=>2];

        $actual = $this->machine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForThreeCentsReturnsThreePennies(){
        $cash = .03;
        $expected = ['penny'=>3];

        $actual = $this->machine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForFourCentsReturnsFourPennies(){
        $cash = .04;
        $expected = ['penny'=>4];

        $actual = $this->machine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForFiveCentsReturnsOneNickel(){
        $cash = .05;
        $expected = ['nickel'=>1];

        $actual = $this->machine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForSixCentsReturnsOneNickelAndOnePenny(){
        $cash = .06;
        $expected = ['nickel'=>1, 'penny' => 1];

        $actual = $this->machine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForSevenCentsReturnsOneNickelAndTwoPennies(){
        $cash = .07;
        $expected = ['nickel'=>1, 'penny' => 2];

        $actual = $this->machine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForTenCentsReturnsOneDime(){
        $cash = .10;
        $expected = ['dime'=>1];

        $actual = $this->machine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForElevenCentsReturnsOneDimeAndOnePenny(){
        $cash = .11;
        $expected = ['dime'=>1, 'penny' => 1];

        $actual = $this->machine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForFifteenCentsReturnsOneDimeAndOneNickel(){
        $cash = .15;
        $expected = ['dime'=>1, 'nickel' => 1];

        $actual = $this->machine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForSixteenCentsReturnsOneDimeOneNickelAndOnePenny(){
        $cash = .16;
        $expected = ['dime'=>1, 'nickel' => 1, 'penny'=>1];

        $actual = $this->machine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForSeventeenCentsReturnsOneDimeOneNickelAndTwoPennies(){
        $cash = .17;
        $expected = ['dime'=>1, 'nickel' => 1, 'penny'=>2];

        $actual = $this->machine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForTwentyFiveCentsReturnsOneQuarter(){
        $cash = .25;
        $expected = ['quarter'=>1];

        $actual = $this->machine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForTwentySixCentsReturnsOneQuarterAndOnePenny(){
        $cash = .26;
        $expected = ['quarter'=>1, 'penny'=>1];

        $actual = $this->machine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForThirtyCentsReturnsOneQuarterAndOneNickel(){
        $cash = .30;
        $expected = ['quarter'=>1, 'nickel'=>1];

        $actual = $this->machine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForThirtyFiveCentsReturnsOneQuarterAndOneDime(){
        $cash = .35;
        $expected = ['quarter'=>1, 'dime'=>1];

        $actual = $this->machine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForFortyTwoCentsReturnsOneQuarterOneDimeOneNickelTwoPennies(){
        $cash = .42;
        $expected = ['quarter'=>1, 'dime'=>1, 'nickel'=>1, 'penny'=>2];

        $actual = $this->machine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForFiftyCentsReturnsOneHalfDollar(){
        $cash = .50;
        $expected = ['half-dollar'=>1];

        $actual = $this->machine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForNinetyOneCentsReturnsOneHalfDollarOneQuarterOneDimeOneNickelAndOnePenny(){
        $cash = .91;
        $expected = ['half-dollar'=>1,'quarter'=>1, 'dime'=>1, 'nickel'=>1, 'penny'=>1];

        $actual = $this->machine->makeChange($cash);

        $this->assertEquals($expected, $actual);
    }

    public function testMakeChangeForNegativeValueThrowsException(){
        $cash = -.91;
        $expected = "The input must be a positive double";

        try{
            $this->machine->makeChange($cash);
            $this->fail('Should not have reached this');
        }catch(\Exception $e){
            $this->assertEquals($expected, $e->getMessage());
        }
    }

    public function testMakeChangeForZeroValueThrowsException(){
        $cash = 0;
        $expected = "The input must be a positive double";

        try{
            $this->machine->makeChange($cash);
            $this->fail('Should not have reached this');
        }catch(\Exception $e){
            $this->assertEquals($expected, $e->getMessage());
        }
    }

    public function testMakeChangeForNullValueThrowsException(){
        $cash = null;
        $expected = "The input must be a positive double";

        try{
            $this->machine->makeChange($cash);
            $this->fail('Should not have reached this');
        }catch(\Exception $e){
            $this->assertEquals($expected, $e->getMessage());
        }
    }
}
 