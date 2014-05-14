<?php


namespace Kata;


use Kata\ScoringRules\ChanceRule;
use Kata\ScoringRules\YahtzeeRule;
use Kata\ScoringRules\PairRule;

class Yahtzee {

    public function getPossibleScores($dice){
        $scores = [];
        $rules = [new ChanceRule(), new YahtzeeRule(), new PairRule()];

        foreach($rules as $rule){
            $scores[$rule->getScoreName()] = $rule->score($dice);
        }

        return $scores;
    }

} 