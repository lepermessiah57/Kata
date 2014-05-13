<?php


namespace Kata\ScoringRules;


class TwoPairRuleTest extends \PHPUnit_Framework_TestCase {

    private $rule;

    public function setUp(){
        $this->rule = new TwoPairRule();
    }

    public function testIsAScoringRule(){
        $this->assertInstanceOf('Kata\ScoringRules\ScoringRule', $this->rule);
    }

    public function testGetNameReturnsChance(){
        $this->assertEquals('two-pair', $this->rule->getName());
    }

    public function testScoreNoPairWillReturnZero(){
        $dice = [1,2,5,3,4];
        $expected = 0;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreOnePairWillReturnZero(){
        $dice = [1,2,5,4,4];
        $expected = 0;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreTwoPairsWillReturnSumOfEachPair(){
        $dice = [2,2,5,4,4];
        $expected = 12;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreTwoPairsDifferentNumbersWillReturnSumOfEachPair(){
        $dice = [2,5,5,3,3];
        $expected = 16;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }

    public function testScoreFullHouseDifferentNumbersWillReturnSumOfEachPair(){
        $dice = [5,5,5,3,3];
        $expected = 16;

        $actual = $this->rule->score($dice);

        $this->assertEquals($expected, $actual);
    }
}
 