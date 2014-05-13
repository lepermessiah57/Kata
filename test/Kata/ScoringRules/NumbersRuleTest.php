<?php

namespace Kata\ScoringRules;


abstract class NumbersRuleTest extends \PHPUnit_Framework_TestCase {

    abstract function getRule();

    abstract function getScoreName();
    private $rule;

    public function setUp(){
        $this->rule = $this->getRule();
    }

    public function testIsAScoringRule(){
        $this->assertInstanceOf('Kata\ScoringRules\ScoringRule', $this->rule);
    }

    public function testGetNameReturnsYahtzee(){
        $this->assertEquals($this->getScoreName(), $this->rule->getName());
    }

    public function testScoreNoNumbersReturnsZero(){
        $dice = [4,2,2,2,2];
        $expected = 0;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreOneNumberReturnsSumOfNumbers(){
        $dice = [1,2,2,2,2];
        $expected = 1;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreTwoNumbersReturnsSumOfNumbers(){
        $dice = [1,2,1,2,2];
        $expected = 2;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreThreeNumbersReturnsSumOfNumbers(){
        $dice = [1,2,1,2,1];
        $expected = 3;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreFourNumbersReturnsSumOfNumbers(){
        $dice = [1,2,1,1,1];
        $expected = 4;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreAllNumbersReturnsSumOfNumbers(){
        $dice = [1,1,1,1,1];
        $expected = 5;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }
}
 