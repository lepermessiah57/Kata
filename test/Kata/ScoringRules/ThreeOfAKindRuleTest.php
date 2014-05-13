<?php

namespace Kata\ScoringRules;


class ThreeOfAKindRuleTest extends \PHPUnit_Framework_TestCase {

    private $rule;

    public function setUp(){
        $this->rule = new ThreeOfAKindRule();
    }

    public function testIsAScoringRule(){
        $this->assertInstanceOf('Kata\ScoringRules\ScoringRule', $this->rule);
    }

    public function testGetNameReturnsChance(){
        $this->assertEquals('three-of-a-kind', $this->rule->getName());
    }

    public function testScoreNoMatchingReturnsZero(){
        $dice = [1,2,3,4,5];
        $expected = 0;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreMatchingOnesReturnsThree(){
        $dice = [1,1,3,1,5];
        $expected = 3;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreMatchingThreessReturnsNine(){
        $dice = [3,3,3,1,5];
        $expected = 9;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreFourThreessReturnsNine(){
        $dice = [3,3,3,1,3];
        $expected = 9;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreFiveThreessReturnsNine(){
        $dice = [3,3,3,3,3];
        $expected = 9;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }
}
 