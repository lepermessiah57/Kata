<?php


namespace Kata\ScoringRules;


class YahtzeeRule implements ScoringRule{

    public function score($dice) {
        $score = 0;
        if(count(array_unique($dice)) == 1){
            $score = 50;
        }
        return $score;
    }

    public function getName() {
        return "yahtzee";
    }
}