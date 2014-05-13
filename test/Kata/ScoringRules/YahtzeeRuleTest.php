<?php

namespace Kata\ScoringRules;


class YahtzeeRuleTest extends \PHPUnit_Framework_TestCase {
    private $rule;

    public function setUp(){
        $this->rule = new YahtzeeRule();
    }

    public function testIsAScoringRule(){
        $this->assertInstanceOf('Kata\ScoringRules\ScoringRule', $this->rule);
    }

    public function testGetNameReturnsYahtzee(){
        $this->assertEquals('yahtzee', $this->rule->getName());
    }

    public function testScoreDifferentNumbersScoresZero(){
        $dice = [1,2,3,3,2];
        $expected = 0;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreAllOnesScores50(){
        $dice = [1,1,1,1,1];
        $expected = 50;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreAllTwosScores50(){
        $dice = [2,2,2,2,2];
        $expected = 50;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreAllThreesScores50(){
        $dice = [3,3,3,3,3];
        $expected = 50;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreAllFoursScores50(){
        $dice = [4,4,4,4,4];
        $expected = 50;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreAllFivesScores50(){
        $dice = [5,5,5,5,5];
        $expected = 50;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreAllSixesScores50(){
        $dice = [6,6,6,6,6];
        $expected = 50;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }
}
 