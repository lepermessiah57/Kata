<?php

namespace Kata\ScoringRules;


class FourOfAKindRuleTest extends \PHPUnit_Framework_TestCase {
    private $rule;

    public function setUp(){
        $this->rule = new FourOfAKindRule();
    }

    public function testIsAScoringRule(){
        $this->assertInstanceOf('Kata\ScoringRules\ScoringRule', $this->rule);
    }

    public function testGetNameReturnsChance(){
        $this->assertEquals('four-of-a-kind', $this->rule->getName());
    }

    public function testScoreNoMatchingReturnsZero(){
        $dice = [1,2,3,4,5];
        $expected = 0;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreMatchingOnesReturnsFour(){
        $dice = [1,1,3,1,1];
        $expected = 4;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreMatchingThreessReturnsTwelve(){
        $dice = [3,3,3,1,3];
        $expected = 12;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreFiveThreessReturnsTwelve(){
        $dice = [3,3,3,3,3];
        $expected = 12;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

}
 