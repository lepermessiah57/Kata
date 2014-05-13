<?php


namespace Kata\ScoringRules;


class ThreeOfAKindRule implements ScoringRule{

    public function score($dice) {
        $values = array_count_values($dice);
        krsort($values);
        foreach($values as $k=>$v){
            if($v > 2){
                return $k * 3;
            }
        }
        return 0;
    }

    public function getName() {
        return "three-of-a-kind";
    }
}