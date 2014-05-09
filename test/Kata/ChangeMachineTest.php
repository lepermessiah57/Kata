<?php

namespace Kata;


class ChangeMachineTest extends \PHPUnit_Framework_TestCase {

    private $machine;

    public function setUp(){
        $this->machine = new ChangeMachine();
    }

    public function testCashWithOneCentReturnsOnePenny(){
        $check = .01;
        $expected = ['penny'=>1];

        $actual = $this->machine->cash($check);

        $this->assertEquals($expected, $actual);
    }

    public function testCashWithTwoCentsReturnsTwoPennies(){
        $check = .02;
        $expected = ['penny'=>2];

        $actual = $this->machine->cash($check);

        $this->assertEquals($expected, $actual);
    }

    public function testCashWithThreeCentsReturnsThreePennies(){
        $check = .03;
        $expected = ['penny'=>3];

        $actual = $this->machine->cash($check);

        $this->assertEquals($expected, $actual);
    }

    public function testCashWithFourCentsReturnsFourPennies(){
        $check = .04;
        $expected = ['penny'=>4];

        $actual = $this->machine->cash($check);

        $this->assertEquals($expected, $actual);
    }

    public function testCashWithFiveCentsReturnsOneNickel(){
        $check = .05;
        $expected = ['nickel'=>1];

        $actual = $this->machine->cash($check);

        $this->assertEquals($expected, $actual);
    }

    public function testCashWithSixCentsReturnsOneNickelAndOnePenny(){
        $check = .06;
        $expected = ['nickel'=>1, 'penny'=>1];

        $actual = $this->machine->cash($check);

        $this->assertEquals($expected, $actual);
    }

    public function testCashWithSevenCentsReturnsOneNickelAndTwoPennies(){
        $check = .07;
        $expected = ['nickel'=>1, 'penny'=>2];

        $actual = $this->machine->cash($check);

        $this->assertEquals($expected, $actual);
    }

    public function testCashWithTenCentsReturnsOneDime(){
        $check = .10;
        $expected = ['dime'=>1];

        $actual = $this->machine->cash($check);

        $this->assertEquals($expected, $actual);
    }

    public function testCashWithElevenCentsReturnsOneDimeOnePenny(){
        $check = .11;
        $expected = ['dime'=>1, 'penny'=>1];

        $actual = $this->machine->cash($check);

        $this->assertEquals($expected, $actual);
    }

    public function testCashWithFifteenCentsReturnsOneDimeOneNickel(){
        $check = .15;
        $expected = ['dime'=>1, 'nickel'=>1];

        $actual = $this->machine->cash($check);

        $this->assertEquals($expected, $actual);
    }

    public function testCashWithSixteenCentsReturnsOneDimeOneNickelAndOnePenny(){
        $check = .16;
        $expected = ['dime'=>1, 'nickel'=>1, 'penny'=>1];

        $actual = $this->machine->cash($check);

        $this->assertEquals($expected, $actual);
    }

    public function testCashWithTwentyFiveCentsReturnsOneQuarter(){
        $check = .25;
        $expected = ['quarter'=>1];

        $actual = $this->machine->cash($check);

        $this->assertEquals($expected, $actual);
    }

    public function testCashWithTwentySixCentsReturnsOneQuarterAndOnePenny(){
        $check = .26;
        $expected = ['quarter'=>1, 'penny'=>1];

        $actual = $this->machine->cash($check);

        $this->assertEquals($expected, $actual);
    }

    public function testCashWithFortyTwoCentsReturnsOneQuarterOneDimeOneNickelAndTwoPennies(){
        $check = .42;
        $expected = ['quarter'=>1,'dime'=>1,'nickel'=>1, 'penny'=>2];

        $actual = $this->machine->cash($check);

        $this->assertEquals($expected, $actual);
    }

    public function testCashWithFiftyCentsReturnsOneHalfDollar(){
        $check = .50;
        $expected = ['half-dollar'=>1];

        $actual = $this->machine->cash($check);

        $this->assertEquals($expected, $actual);
    }
}
 