<?php
/**
 * Created by PhpStorm.
 * User: matthill
 * Date: 5/13/14
 * Time: 10:03 AM
 */

namespace Kata\ScoringRules;


class TwosRuleTest extends \PHPUnit_Framework_TestCase {
    private $rule;

    public function setUp(){
        $this->rule = new TwosRule();
    }

    public function testIsAScoringRule(){
        $this->assertInstanceOf('Kata\ScoringRules\ScoringRule', $this->rule);
    }

    public function testGetNameReturnsYahtzee(){
        $this->assertEquals('twos', $this->rule->getName());
    }

    public function testScoreZeroTwosReturnsZero(){
        $dice = [4,1,1,1,1];
        $expected = 0;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreTwoOneReturnsTwo(){
        $dice = [1,2,3,3,3];
        $expected = 2;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreTwoTwosReturnsFour(){
        $dice = [1,2,1,1,2];
        $expected = 4;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreThreeTwosReturnsSix(){
        $dice = [1,2,1,2,2];
        $expected = 6;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreFourTwosReturnsEight(){
        $dice = [1,2,2,2,2];
        $expected = 8;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreAllTwosReturnsTen(){
        $dice = [2,2,2,2,2];
        $expected = 10;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }
}
 