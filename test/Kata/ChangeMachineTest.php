<?php
/**
 * Created by PhpStorm.
 * User: matthill
 * Date: 5/7/14
 * Time: 2:42 PM
 */

namespace Kata;


class ChangeMachineTest extends \PHPUnit_Framework_TestCase {

    public function testMakeChangeOneCentReturnsOnePenny(){
        $money = .01;
        $changeMachine = new ChangeMachine();

        $change = $changeMachine->makeChange($money);

        $this->assertEquals(['penny'=>1], $change);
    }

    public function testMakeChangeTwoCentsReturnsTwoPenny(){
        $money = .02;
        $changeMachine = new ChangeMachine();

        $change = $changeMachine->makeChange($money);

        $this->assertEquals(['penny'=>2], $change);
    }

    public function testMakeChangeFiveCentsReturnsOneNickel(){
        $money = .05;
        $changeMachine = new ChangeMachine();

        $change = $changeMachine->makeChange($money);

        $this->assertEquals(['nickel'=>1], $change);
    }

    public function testMakeChangeSixCentsReturnsOneNickelAndOnePenny(){
        $money = .06;
        $changeMachine = new ChangeMachine();

        $change = $changeMachine->makeChange($money);

        $this->assertEquals(['nickel'=>1, 'penny'=>1], $change);
    }

    public function testMakeChangeTenCentsReturnsOneDime(){
        $money = .10;
        $changeMachine = new ChangeMachine();

        $change = $changeMachine->makeChange($money);

        $this->assertEquals(['dime'=>1], $change);
    }

    public function testMakeChangeTwelveCentsReturnsOneDimeAndTwoPennies(){
        $money = .12;
        $changeMachine = new ChangeMachine();

        $change = $changeMachine->makeChange($money);

        $this->assertEquals(['dime'=>1, 'penny'=>2], $change);
    }

    public function testMakeChangeFifteenCentsReturnsOneDimeAndOneNickel(){
        $money = .15;
        $changeMachine = new ChangeMachine();

        $change = $changeMachine->makeChange($money);

        $this->assertEquals(['dime'=>1, 'nickel'=>1], $change);
    }

    public function testMakeChangeSixteenCentsReturnsOneDimeAndOneNickelAndOnePenny(){
        $money = .16;
        $changeMachine = new ChangeMachine();

        $change = $changeMachine->makeChange($money);

        $this->assertEquals(['dime'=>1, 'nickel'=>1, 'penny'=>1], $change);
    }

    public function testMakeChangeTwentyCentsReturnsTwoDimes(){
        $money = .20;
        $changeMachine = new ChangeMachine();

        $change = $changeMachine->makeChange($money);

        $this->assertEquals(['dime'=>2], $change);
    }

    public function testMakeChangeTwentyFiveCentsReturnsOneQuarter(){
        $money = .25;
        $changeMachine = new ChangeMachine();

        $change = $changeMachine->makeChange($money);

        $this->assertEquals(['quarter'=>1], $change);
    }

    public function testMakeChangeFortyTwoCentsReturnsOneQuarterOneDimeOneNickelAndTwoPennies(){
        $money = .42;
        $changeMachine = new ChangeMachine();

        $change = $changeMachine->makeChange($money);

        $this->assertEquals(['quarter'=>1, 'dime'=>1, 'nickel'=>1,'penny'=>2], $change);
    }
}
 