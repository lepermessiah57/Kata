<?php


namespace Kata\ScoringRules;


class ThreeOfAKindRule extends PairRule{

    public function getName() {
        return "three-of-a-kind";
    }

    protected function getCount(){
        return 3;
    }
}