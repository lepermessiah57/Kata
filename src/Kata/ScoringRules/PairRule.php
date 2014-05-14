<?php


namespace Kata\ScoringRules;


class PairRule implements ScoringRule {

    public function score($dice) {
        $possible_dice = [1=>0, 2=>0, 3=>0, 4=>0, 5=>0, 6=>0];
        foreach($dice as $die){
            $possible_dice[$die]++;
        }
        $score = 0;
        foreach($possible_dice as $value => $count){
            if( $count >= 2 ) {
                $score = $value * 2;
            }
        }

        return $score;
    }

    public function getScoreName() {
        return 'pair';
    }
}