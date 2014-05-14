<?php


namespace Kata\ScoringRules;


class FullHouseRule implements ScoringRule{

    public function score($dice) {
        $counts = array_count_values($dice);
        $score = 0;
        if(count($counts) == 2) {
            $score = array_sum($dice);
            foreach($counts as $count){
                if($count > 3 ){
                    $score = 0;
                }
            }

        }
        return $score;
    }

    public function getName() {
        return "full-house";
    }
}