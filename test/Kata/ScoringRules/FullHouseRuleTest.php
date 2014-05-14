<?php

namespace Kata\ScoringRules;


class FullHouseRuleTest extends \PHPUnit_Framework_TestCase {
    private $rule;

    public function setUp(){
        $this->rule = new FullHouseRule();
    }

    public function testIsAScoringRule(){
        $this->assertInstanceOf('Kata\ScoringRules\ScoringRule', $this->rule);
    }

    public function testGetNameReturnsChance(){
        $this->assertEquals('full-house', $this->rule->getName());
    }

    public function testScoreNotFullHouseReturnsZero(){
        $dice = [1,2,3,3,3];
        $expected = 0;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreFullHouseThreeOnesAndTwoTwosReturnsSeven(){
        $dice = [1,1,1,2,2];
        $expected = array_sum($dice);

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreFullHouseThreeFivesAndTwoTwosReturnsNineteen(){
        $dice = [5,5,5,2,2];
        $expected = array_sum($dice);

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreFullHouseFourFivesAndOneTwosReturnsZero(){
        $dice = [5,5,5,5,2];
        $expected = 0;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }
}
 