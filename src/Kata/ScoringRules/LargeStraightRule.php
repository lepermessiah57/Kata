<?php


namespace Kata\ScoringRules;


class LargeStraightRule implements ScoringRule{

    public function score($dice) {
        $straight = true;
        sort($dice);
        for($i = 0; $i < 5; $i++){
            if($i+2 != $dice[$i]){
                $straight = false;
                break;
            }
        }

        return $straight ? 20 : 0;
    }

    public function getName() {
        return "large-straight";
    }
}