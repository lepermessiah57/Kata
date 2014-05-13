<?php

namespace Kata\ScoringRules;


class PairRuleTest extends \PHPUnit_Framework_TestCase {

    private $rule;

    public function setUp(){
        $this->rule = new PairRule();
    }

    public function testIsAScoringRule(){
        $this->assertInstanceOf('Kata\ScoringRules\ScoringRule', $this->rule);
    }

    public function testGetNameReturnsChance(){
        $this->assertEquals('pair', $this->rule->getName());
    }

    public function testScoreNoPairWillReturnZero(){
        $dice = [1,2,5,3,4];
        $expected = 0;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScorePairOfOnesWillReturnTwo(){
        $dice = [1,2,1,3,4];
        $expected = 2;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScorePairOfTwosWillReturnFour(){
        $dice = [1,2,2,3,4];
        $expected = 4;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScorePairOfThreesWillReturnSix(){
        $dice = [1,2,5,3,3];
        $expected = 6;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScorePairMultiplePairsWillReturnSumOfHighestPair(){
        $dice = [1,5,2,1,5];
        $expected = 10;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScorePairTripletsWillReturnSumOfHighestPair(){
        $dice = [1,5,2,5,5];
        $expected = 10;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }
}
 