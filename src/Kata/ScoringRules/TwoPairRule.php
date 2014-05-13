<?php


namespace Kata\ScoringRules;


class TwoPairRule implements ScoringRule{

    public function score($dice) {
        $values = array_count_values($dice);
        krsort($values);
        $pairs = [];
        foreach($values as $k=>$v){
            if($v > 1){
                $pairs[$k] = $v;
            }
        }

        if(count($pairs) <=1){
            return 0;
        }
        $value = 0;
        foreach($pairs as $k=>$v){
            $value += $k * 2;
        }
        return $value;
    }

    public function getName() {
        return "two-pair";
    }

}