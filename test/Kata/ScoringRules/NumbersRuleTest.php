<?php

namespace Kata\ScoringRules;


abstract class NumbersRuleTest extends \PHPUnit_Framework_TestCase {

    abstract function getRule();

    abstract function getScoreName();

    abstract function getScoreValue();

    private $rule;

    public function setUp(){
        $this->rule = $this->getRule();
    }

    public function testIsAScoringRule(){
        $this->assertInstanceOf('Kata\ScoringRules\ScoringRule', $this->rule);
    }

    public function testIsANumbersRule(){
        $this->assertInstanceOf('Kata\ScoringRules\NumbersRule', $this->rule);
    }

    public function testGetNameReturnsYahtzee(){
        $this->assertEquals($this->getScoreName(), $this->rule->getName());
    }

    public function testScoreNoNumbersReturnsZero(){
        $dice = $this->createDice(0);
        $expected = 0 * $this->getScoreValue();

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreOneNumberReturnsSumOfNumbers(){
        $dice = $this->createDice(1);
        $expected = 1 * $this->getScoreValue();

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreTwoNumbersReturnsSumOfNumbers(){
        $dice = $this->createDice(2);
        $expected = 2 * $this->getScoreValue();

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreThreeNumbersReturnsSumOfNumbers(){
        $dice = $this->createDice(3);
        $expected = 3 * $this->getScoreValue();

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreFourNumbersReturnsSumOfNumbers(){
        $dice = $this->createDice(4);
        $expected = 4 * $this->getScoreValue();

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreAllNumbersReturnsSumOfNumbers(){
        $dice = $this->createDice(5);
        $expected = 5 * $this->getScoreValue();

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    private function createDice($times){
        $dice = [0,0,0,0,0];
        for($i = 0; $i < $times; $i++){
            $dice[$i] = $this->getScoreValue();
        }
        return $dice;
    }
}
 