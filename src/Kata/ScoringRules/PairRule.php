<?php


namespace Kata\ScoringRules;


class PairRule implements ScoringRule{

    public function score($dice) {
        $values = array_count_values($dice);
        krsort($values);
        foreach($values as $k=>$v){
            if($v > $this->getCount() - 1){
                return $k * $this->getCount();
            }
        }
        return 0;
    }

    public function getName() {
        return "pair";
    }

    protected  function getCount(){
        return 2;
    }
}