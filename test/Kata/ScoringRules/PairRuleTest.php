<?php

namespace Kata\ScoringRules;


class PairRuleTest extends \PHPUnit_Framework_TestCase {

    public function testIsAScoringRule(){
        $rule = new PairRule();

        $this->assertInstanceOf('Kata\ScoringRules\ScoringRule', $rule);
    }

    public function testGetScoreNameReturnsUsPair(){
        $rule = new PairRule();
        $expected = 'pair';

        $actual = $rule->getScoreName();

        $this->assertEquals($expected, $actual);
    }

    public function testScorePairOfOnesReturnsTwo(){
        $dice = [1,1,2,3,4];
        $expected = 2;
        $rule = new PairRule();

        $actual = $rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScorePairOfThreesReturnsSix(){
        $dice = [1,3,2,3,4];
        $expected = 6;
        $rule = new PairRule();

        $actual = $rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScorePairOfThreesAndPairOfOnesReturnsSix(){
        $dice = [1,3,2,3,1];
        $expected = 6;
        $rule = new PairRule();

        $actual = $rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreAllThreesReturnsSix(){
        $dice = [3,3,3,3,3];
        $expected = 6;
        $rule = new PairRule();

        $actual = $rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreAllDifferentReturnsZero(){
        $dice = [3,1,2,4,5];
        $expected = 0;
        $rule = new PairRule();

        $actual = $rule->score($dice);

        $this->assertEquals($expected, $actual);
    }
}
 