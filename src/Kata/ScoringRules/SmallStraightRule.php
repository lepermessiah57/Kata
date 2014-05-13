<?php


namespace Kata\ScoringRules;


class SmallStraightRule implements ScoringRule {

    public function score($dice) {
        $straight = true;
        sort($dice);
        for($i = 0; $i < 5; $i++){
            if($i+1 != $dice[$i]){
                $straight = false;
                break;
            }
        }

        return $straight ? 15 : 0;
    }

    public function getName() {
        return "small-straight";
    }
}