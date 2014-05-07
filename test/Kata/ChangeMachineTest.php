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

}
 