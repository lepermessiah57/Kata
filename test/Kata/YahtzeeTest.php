<?php

namespace Kata;


class YahtzeeTest extends \PHPUnit_Framework_TestCase {

    private $game;

    public function setUp(){
        $this->game = new Yahtzee();
    }

    public function testPossibleScoresReturnsUsChance(){
        $dice = [1,1,1,1,1];

        $actual = $this->game->getPossibleScores($dice);

        $this->assertCategoryExists('chance', $actual);
    }

    public function testPossibleScoresChanceAllOnesReturnsFive(){
        $dice = [1,1,1,1,1];
        $expected = 5;
        $category = 'chance';

        $actual = $this->game->getPossibleScores($dice);

        $this->assertCategoryScore($expected, $category, $actual);
    }

    public function testPossibleScoresChanceAllTwosReturnsTen(){
        $dice = [2,2,2,2,2];
        $expected = 10;
        $category = 'chance';

        $actual = $this->game->getPossibleScores($dice);

        $this->assertCategoryScore($expected, $category, $actual);
    }

    public function testPossibleScoresChanceRandomDigitsReturnsSum(){
        $dice = [2,4,6,1,3];
        $expected = array_sum($dice);
        $category = 'chance';

        $actual = $this->game->getPossibleScores($dice);

        $this->assertCategoryScore($expected, $category, $actual);
    }

    public function testPossibleScoresReturnsUsYahtzee(){
        $dice = [1,1,1,1,1];

        $actual = $this->game->getPossibleScores($dice);

        $this->assertCategoryExists('yahtzee', $actual);
    }

    public function testPossibleScoresYahtzeeAllOnesReturnsFifty(){
        $dice = [1,1,1,1,1];
        $category = 'yahtzee';
        $expected = 50;

        $actual = $this->game->getPossibleScores($dice);

        $this->assertCategoryScore($expected, $category, $actual);
    }

    public function testPossibleScoresYahtzeeAllFivesReturnsFifty(){
        $dice = [5,5,5,5,5];
        $category = 'yahtzee';
        $expected = 50;

        $actual = $this->game->getPossibleScores($dice);

        $this->assertCategoryScore($expected, $category, $actual);
    }

    public function testPossibleScoresYahtzeeRandomDigitsReturnsZero(){
        $dice = [1,2,5,1,4];
        $category = 'yahtzee';
        $expected = 0;

        $actual = $this->game->getPossibleScores($dice);

        $this->assertCategoryScore($expected, $category, $actual);
    }

    private function assertCategoryExists($category, $scores){
        $this->assertArrayHasKey($category, $scores);
    }

    private function assertCategoryScore($value, $category, $scores){
        $this->assertEquals($value, $scores[$category] );
    }
}
 