<?php

namespace Kata\ScoringRules;


class SmallStraightRuleTest extends \PHPUnit_Framework_TestCase {
    private $rule;

    public function setUp(){
        $this->rule = new SmallStraightRule();
    }

    public function testIsAScoringRule(){
        $this->assertInstanceOf('Kata\ScoringRules\ScoringRule', $this->rule);
    }

    public function testGetNameReturnsChance(){
        $this->assertEquals('small-straight', $this->rule->getName());
    }

    public function testScoreNotASmallStraightReturnsZero(){
        $dice = [1,2,2,3,1];
        $expected = 0;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreLargeStraightOrderedReturnsZero(){
        $dice = [2,3,4,5,6];
        $expected = 0;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreSmallStraightOrderedReturnsFifteen(){
        $dice = [1,2,3,4,5];
        $expected = 15;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreSmallStraightUnOrderedReturnsFifteen(){
        $dice = [3,1,5,4,2];
        $expected = 15;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }
}
 