<?php

namespace Kata;


class YahtzeeTest extends \PHPUnit_Framework_TestCase {

    private $yahtzee;

    public function setUp(){
        $this->yahtzee = new Yahtzee();
    }

    public function testScoreWithAllOnesScoresYahtzee(){
        $dice = [1,1,1,1,1];

        $actual = $this->yahtzee->score($dice);

        $this->assertScoresYahtzee($actual);
    }

    public function testScoreWithAllTwosScoresYahtzee(){
        $dice = [2,2,2,2,2];

        $actual = $this->yahtzee->score($dice);

        $this->assertScoresYahtzee($actual);
    }

    public function testScoreWithAllThreesScoresYahtzee(){
        $dice = [3,3,3,3,3];

        $actual = $this->yahtzee->score($dice);

        $this->assertScoresYahtzee($actual);
    }

    public function testScoreWithAllFoursScoresYahtzee(){
        $dice = [4,4,4,4,4];

        $actual = $this->yahtzee->score($dice);

        $this->assertScoresYahtzee($actual);
    }

    public function testScoreWithAllFivesScoresYahtzee(){
        $dice = [5,5,5,5,5];

        $actual = $this->yahtzee->score($dice);

        $this->assertScoresYahtzee($actual);
    }

    public function testScoreWithAllSixesScoresYahtzee(){
        $dice = [6,6,6,6,6];

        $actual = $this->yahtzee->score($dice);

        $this->assertScoresYahtzee($actual);
    }

    private function assertScoresYahtzee($score){
        $this->assertEquals(50, $score['yahtzee'] );

    }
}
 