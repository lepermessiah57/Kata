<?php

namespace Kata\ScoringRules;


class ChanceRuleTest extends \PHPUnit_Framework_TestCase {

    private $rule;

    public function setUp(){
        $this->rule = new ChanceRule();
    }

    public function testIsAScoringRule(){
        $this->assertInstanceOf('Kata\ScoringRules\ScoringRule', $this->rule);
    }

    public function testGetNameReturnsChance(){
        $this->assertEquals('chance', $this->rule->getName());
    }

    public function testScoreReturnsSumOfDice(){
        $dice = [1,2,3,4,5];
        $expected = 15;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreReturnsSumOfDiceAllTwos(){
        $dice = [2,2,2,2,2];
        $expected = 10;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }
}
 