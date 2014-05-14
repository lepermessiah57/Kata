<?php

namespace Kata\ScoringRules;


class YahtzeeRuleTest extends \PHPUnit_Framework_TestCase {

    public function testGetScoreNameReturnsUsYahtzee(){
        $expected = 'yahtzee';
        $rule = new YahtzeeRule();

        $actual = $rule->getScoreName();

        $this->assertEquals($expected, $actual);
    }

    public function testScoreAllOnesReturnsUsFifty(){
        $dice = [1,1,1,1,1];
        $expected = 50;
        $rule = new YahtzeeRule();

        $actual = $rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreAllSixesReturnsUsFifty(){
        $dice = [6,6,6,6,6];
        $expected = 50;
        $rule = new YahtzeeRule();

        $actual = $rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreFourSixesOneTwoReturnsUsZero(){
        $dice = [6,6,6,6,2];
        $expected = 0;
        $rule = new YahtzeeRule();

        $actual = $rule->score($dice);

        $this->assertEquals($expected, $actual);
    }
}
 