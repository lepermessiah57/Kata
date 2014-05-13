<?php

namespace Kata\ScoringRules;


class LargeStraightRuleTest extends \PHPUnit_Framework_TestCase {
    private $rule;

    public function setUp(){
        $this->rule = new LargeStraightRule();
    }

    public function testIsAScoringRule(){
        $this->assertInstanceOf('Kata\ScoringRules\ScoringRule', $this->rule);
    }

    public function testGetNameReturnsChance(){
        $this->assertEquals('large-straight', $this->rule->getName());
    }

    public function testScoreNotASmallStraightReturnsZero(){
        $dice = [1,2,2,3,1];
        $expected = 0;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreLargeStraightOrderedReturnsTwenty(){
        $dice = [2,3,4,5,6];
        $expected = 20;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreSmallStraightOrderedReturnsZero(){
        $dice = [1,2,3,4,5];
        $expected = 0;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreLargeStraightUnOrderedReturnsTwenty(){
        $dice = [3,6,5,4,2];
        $expected = 20;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }
}
 