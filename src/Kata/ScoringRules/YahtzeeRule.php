<?php


namespace Kata\ScoringRules;


class YahtzeeRule implements ScoringRule{

    public function getScoreName(){
        return 'yahtzee';
    }

    public function score($dice){
        $yahtzee = count(array_unique($dice)) == 1;
        $score = $yahtzee ? 50 : 0;

        return $score;
    }
} 