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

        $this->assertScore(50, $actual, 'yahtzee');
    }

    public function testScoreWithAllTwosScoresYahtzee(){
        $dice = [2,2,2,2,2];

        $actual = $this->yahtzee->score($dice);

        $this->assertScore(50, $actual, 'yahtzee');
    }

    public function testScoreWithAllThreesScoresYahtzee(){
        $dice = [3,3,3,3,3];

        $actual = $this->yahtzee->score($dice);

        $this->assertScore(50, $actual, 'yahtzee');
    }

    public function testScoreWithAllFoursScoresYahtzee(){
        $dice = [4,4,4,4,4];

        $actual = $this->yahtzee->score($dice);

        $this->assertScore(50, $actual, 'yahtzee');
    }

    public function testScoreWithAllFivesScoresYahtzee(){
        $dice = [5,5,5,5,5];

        $actual = $this->yahtzee->score($dice);

        $this->assertScore(50, $actual, 'yahtzee');
    }

    public function testScoreWithAllSixesScoresYahtzee(){
        $dice = [6,6,6,6,6];

        $actual = $this->yahtzee->score($dice);

        $this->assertScore(50, $actual, 'yahtzee');
    }

    public function testScoreYahtzeeNoYahtzeeScoresZero(){
        $dice = [6,4,2,1,5];
        $actual = $this->yahtzee->score($dice);

        $this->assertScore(0, $actual, 'yahtzee');
    }

    public function testScoreChanceAddsUpAllScores(){
        $dice = [6,4,2,1,5];
        $expected = 6+4+2+1+5;
        $actual = $this->yahtzee->score($dice);

        $this->assertScore($expected, $actual, 'chance');
    }

    public function testScoreChanceAddsUpAllScoresDifferentDice(){
        $dice = [1,1,2,3,5];
        $expected = array_sum($dice);
        $actual = $this->yahtzee->score($dice);

        $this->assertScore($expected, $actual, 'chance');
    }

    public function testScoreOnesWithTwoOnes(){
        $dice = [1,2,3,2,1];
        $expected = 2;

        $actual = $this->yahtzee->score($dice);

        $this->assertScore($expected, $actual, 'ones');
    }

    public function testScoreTwosWithTwoTwos(){
        $dice = [1,2,3,2,1];
        $expected = 4;

        $actual = $this->yahtzee->score($dice);

        $this->assertScore($expected, $actual, 'twos');
    }

    public function testScoreTheesWithOneThree(){
        $dice = [1,2,3,2,1];
        $expected = 3;

        $actual = $this->yahtzee->score($dice);

        $this->assertScore($expected, $actual, 'threes');
    }

    public function testScoreFoursWithOneFour(){
        $dice = [1,2,3,2,4];
        $expected = 4;

        $actual = $this->yahtzee->score($dice);

        $this->assertScore($expected, $actual, 'fours');
    }

    public function testScoreFivesWithOneFive(){
        $dice = [1,2,3,5,4];
        $expected = 5;

        $actual = $this->yahtzee->score($dice);

        $this->assertScore($expected, $actual, 'fives');
    }

    public function testScoreSixesWithOneSix(){
        $dice = [1,2,3,5,6];
        $expected = 6;

        $actual = $this->yahtzee->score($dice);

        $this->assertScore($expected, $actual, 'sixes');
    }

    public function testScorePairsWithTwoSixes(){
        $dice = [1,2,3,6,6];
        $expected = 12;

        $actual = $this->yahtzee->score($dice);

        $this->assertScore($expected, $actual, 'pair');
    }

    public function testScoreTwoPairWithFivesAndSixes(){
        $dice = [5,2,5,6,6];
        $expected = 22;

        $actual = $this->yahtzee->score($dice);

        $this->assertScore($expected, $actual, 'two-pair');
    }

    public function testThreeOfAKindWithSixes(){
        $dice = [5,2,6,6,6];
        $expected = 18;

        $actual = $this->yahtzee->score($dice);

        $this->assertScore($expected, $actual, 'three-of-a-kind');
    }

    public function testFourOfAKindWithSixes(){
        $dice = [5,6,6,6,6];
        $expected = 24;

        $actual = $this->yahtzee->score($dice);

        $this->assertScore($expected, $actual, 'four-of-a-kind');
    }

    public function testSmallStraight(){
        $dice = [5,4,3,2,1];
        $expected = 15;

        $actual = $this->yahtzee->score($dice);

        $this->assertScore($expected, $actual, 'small-straight');
    }

    public function testLargeStraight(){
        $dice = [5,4,3,2,6];
        $expected = 20;

        $actual = $this->yahtzee->score($dice);

        $this->assertScore($expected, $actual, 'large-straight');
    }

    public function testFullHouse(){
        $dice = [5,5,5,6,6];
        $expected = 27;

        $actual = $this->yahtzee->score($dice);

        $this->assertScore($expected, $actual, 'full-house');
    }

    public function testAllScores(){
        $dice = [1,1,1,1,1];

        $actual = $this->yahtzee->score($dice);

        $this->assertScore(50, $actual, 'yahtzee');
        $this->assertScore(0, $actual, 'full-house');
        $this->assertScore(0, $actual, 'large-straight');
        $this->assertScore(0, $actual, 'small-straight');
        $this->assertScore(4, $actual, 'four-of-a-kind');
        $this->assertScore(3, $actual, 'three-of-a-kind');
        $this->assertScore(0, $actual, 'two-pair');
        $this->assertScore(2, $actual, 'pair');
        $this->assertScore(0, $actual, 'sixes');
        $this->assertScore(0, $actual, 'fives');
        $this->assertScore(0, $actual, 'fours');
        $this->assertScore(0, $actual, 'threes');
        $this->assertScore(0, $actual, 'twos');
        $this->assertScore(5, $actual, 'ones');
        $this->assertScore(5, $actual, 'chance');
    }

    private function assertScore($expected, $score, $name){
        $this->assertEquals($expected, $score[$name]);
    }
}

