<?php


namespace Kata\ScoringRules;


class ChanceRule {

    public function score($dice){
        $score = array_sum( $dice );
        return $score;
    }

    public function getScoreName(){
        return 'chance';
    }

} 