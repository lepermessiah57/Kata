<?php


namespace Kata\ScoringRules;


class ChanceRule implements ScoringRule {

    public function score($dice){
        $score = array_sum( $dice );
        return $score;
    }

    public function getScoreName(){
        return 'chance';
    }

} 