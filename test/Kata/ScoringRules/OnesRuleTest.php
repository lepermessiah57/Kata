<?php

namespace Kata\ScoringRules;


class OnesRuleTest extends \PHPUnit_Framework_TestCase {
    private $rule;

    public function setUp(){
        $this->rule = new OnesRule();
    }

    public function testIsAScoringRule(){
        $this->assertInstanceOf('Kata\ScoringRules\ScoringRule', $this->rule);
    }

    public function testGetNameReturnsYahtzee(){
        $this->assertEquals('ones', $this->rule->getName());
    }

    public function testScoreZeroOneReturnsZero(){
        $dice = [4,2,2,2,2];
        $expected = 0;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreOneOneReturnsOne(){
        $dice = [1,2,2,2,2];
        $expected = 1;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreTwoOnesReturnsTwo(){
        $dice = [1,2,1,2,2];
        $expected = 2;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreThreeOnesReturnsThree(){
        $dice = [1,2,1,2,1];
        $expected = 3;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreFourOnesReturnsFour(){
        $dice = [1,2,1,1,1];
        $expected = 4;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreAllOnesReturnsFive(){
        $dice = [1,1,1,1,1];
        $expected = 5;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }
}
 