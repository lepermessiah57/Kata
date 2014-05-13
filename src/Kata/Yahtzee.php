<?php

namespace Kata;

use Kata\ScoringRules\ChanceRule;
use Kata\ScoringRules\YahtzeeRule;

class Yahtzee {

    public function score($dice){
        $rules = [new ChanceRule(), new YahtzeeRule()];
        $score = [];
        foreach($rules as $rule){
            $score[$rule->getName()] = $rule->score($dice);
        }

        return $score;
    }
} 