<?php

namespace Kata\ScoringRules;


class ChanceRuleTest extends \PHPUnit_Framework_TestCase {

    public function testIsAScoringRule(){
        $rule = new ChanceRule();

        $this->assertInstanceOf('Kata\ScoringRules\ScoringRule', $rule);
    }

    public function testGetScoreNameReturnsUsChance(){
        $expected = 'chance';
        $rule = new ChanceRule();

        $actual = $rule->getScoreName();

        $this->assertEquals($expected, $actual);
    }

    public function testScoreAllOnesReturnsUsFive(){
        $dice = [1,1,1,1,1];
        $expected = 5;
        $rule = new ChanceRule();

        $actual = $rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreAllFivesReturnsUsTwentyFive(){
        $dice = [5,5,5,5,5];
        $expected = 25;
        $rule = new ChanceRule();

        $actual = $rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreRandomDigitsReturnsUsTheSum(){
        $dice = [1,5,3,4,6];
        $expected = array_sum($dice);
        $rule = new ChanceRule();

        $actual = $rule->score($dice);

        $this->assertEquals($expected, $actual);
    }
}
 